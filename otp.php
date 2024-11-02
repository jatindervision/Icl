<?php
class OTP {
  // (A) CONSTRUCTOR - CONNECT TO DATABASE
  protected $pdo = null;
  protected $stmt = null;
  public $error = "";
  function __construct() {
    try {
      $this->pdo = new PDO(
        "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET,
        DB_USER, DB_PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
      );
    } catch (Exception $ex) { die($ex->getMessage()); }
  }

  // (B) DESTRUCTOR - CLOSE CONNECTION
  function __destruct() {
    if ($this->stmt !== null) { $this->stmt = null; }
    if ($this->pdo !== null) { $this->pdo = null; }
  }

  // (C) GENERATE OTP
  function generate ($email) {
    // @TODO - 
    // YOU SHOULD CHECK IF THE PROVIDED EMAIL IS A VALID USER IN YOUR SYSTEM
    
    // (C1) CHECK IF USER ALREADY HAS EXISTING OTP REQUEST
    $this->stmt = $this->pdo->prepare(
      "SELECT * FROM `otp` WHERE `user_email`=?"
    );
    $this->stmt->execute([$email]);
    $otp = $this->stmt->fetch(PDO::FETCH_NAMED);

    // (C2) ALREADY HAS OTP REQUEST
    if (is_array($otp)) {
      // @TODO - 
      // ADD YOUR OWN RULES HERE - ALLOW NEW REQUEST IF EXIPRED?
      // $validTill = strtotime($otp['otp_timestamp']) + (OTP_VALID * 60);
      // if (strtotime("now") > $validTill) { DELETE OLD REQUEST }
      // else { ERROR }
      $this->error = "You already have a pending OTP.ie.: THIS EMAIL ALREADY SUBMITTED: FROM ICL";
      return false;
    }

    // (C3) CREATE RANDOM PASSWORD
    $alphabets = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $count = strlen($alphabets) - 1;
    $pass = "";
    for ($i=0; $i<OTP_LEN; $i++) { $pass .= $alphabets[rand(0, $count)]; }

    // (C4) DATABASE ENTRY
    try {
      $this->stmt = $this->pdo->prepare(
        "REPLACE INTO `otp` (`user_email`, `otp_pass`) VALUES (?,?)"
      );
      $this->stmt->execute([$email, $pass]);
    } catch (Exception $ex) {
      $this->error = $ex->getMessage();
      return false;
    }

    // (C5) SEND VIA EMAIL
    // @TODO - FORMAT YOUR OWN "NICE" EMAIL OR SEND VIA SMS.
    $mailSubject = "Your OTP From: info.icljk.com";
    $mailBody = "Your OTP is $pass. Save This OTP.";
    if (@mail($email, $mailSubject, $mailBody)) { 
      return true; 
    } else {
      $this->error = "Failed to send OTP email.";
      return false;
    }
  }

  // (D) CHALLENGE OTP
  function challenge ($email, $pass) {
    // (D1) GET THE OTP ENTRY
    $this->stmt = $this->pdo->prepare(
      "SELECT * FROM `otp` WHERE `user_email`=?"
    );
    $this->stmt->execute([$email]);
    $otp = $this->stmt->fetch(PDO::FETCH_NAMED);

    // (D2) OTP ENTRY NOT FOUND
    if (!is_array($otp)) {
      $this->error = "The specified OTP request is not found.";
      return false;
    }

    // (D3) TOO MANY TRIES
    if ($otp['otp_tries'] >= OTP_TRIES) {
      $this->error = "Too many tries for OTP.";
      return false;
    }

    // (D4) EXPIRED
    $validTill = strtotime($otp['otp_timestamp']) + (OTP_VALID * 60);
    if (strtotime("now") > $validTill) {
      $this->error = "OTP has expired.";
      return false;
    }

    // (D5) INCORRECT PASSWORD - ADD STRIKE
    if ($pass != $otp['otp_pass']) {
      $strikes = $otp['otp_tries'] + 1;
      $this->stmt = $this->pdo->prepare(
        "UPDATE `otp` SET `otp_tries`=? WHERE `user_email`=?"
      );
      $this->stmt->execute([$strikes, $email]);

      // @TODO - TOO MANY STRIKES 
      // LOCK ACCOUNT? REQUIRE MANUAL VERIFICATION? SUSPEND FOR 24 HOURS?
      // if ($strikes >= OTP_TRIES) { DO SOMETHING }

      $this->error = "Incorrect OTP.";
      return false;
    }

    // (D6) ALL OK - DELETE OTP
    $this->stmt = $this->pdo->prepare(
      "DELETE FROM `otp` WHERE `user_email`=?"
    );
    $this->stmt->execute([$email]);
    return true;
  }
}

// (E) DATABASE SETTINGS - CHANGE TO YOUR OWN!
define('DB_HOST', 'localhost');
define('DB_NAME', 'icljkcom_db');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'icljkcom_user');
define('DB_PASSWORD', 'jat$$$@123');

// (F) ONE-TIME PASSWORD SETTINGS
define('OTP_VALID', "600"); // VALID FOR X MINUTES
define('OTP_TRIES', "3"); // MAX TRIES
define('OTP_LEN', "8"); // PASSWORD LENGTH

// (G) NEW OTP OBJECT
$_OTP = new OTP();