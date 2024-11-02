<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ICL</title>
<link rel="icon"  type="image/png" sizes="128×128" href="images/JKP.png">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv = 'cache-control' content = 'no-cache'>
<meta http-equiv = 'expires' content = '0'>
<meta http-equiv = 'pragma' content = 'no-cache'>

<meta name="google-site-verification" content="yx_N4nv3P8tLXobYJ860Oo8zmNGCj1Ly0jRNt5hhhmk" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://www.icljk.com/ICL-CONTAINER.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
/* Button used to open the contact form - fixed if position is fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: absolute;
  left: 40%;
  top: 200px;
  position: relative;
  bottom: 23px;
  right: 40%;
  width: 250px;
}

/* Button used to open the contact form - fixed if position is fixed at the bottom of the page */

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: absolute;
  left: 2%;
  right: 80%;
  top: 200px;
  bottom: 0;
  border: 3px solid #f1f1f1;
  z-index: 0;
}
.form-popup1 {
  display: none;
  position: absolute;
  left: 10%;
  right: 70%;
  top: 200px;
  bottom: 0;
  border: 3px solid #f1f1f1;
  z-index: 0;
}
.form-popup2 {
  display: none;
  position: absolute;
  left: 2%;
  right: 80%;
  top: 200px;
  bottom: 0;
  border: 3px solid #f1f1f1;
  z-index: 0;
}
.form-popup3 {
  display: none;
  position: absolute;
  left: 2%;
  right: 80%;
  top: 200px;
  bottom: 0;
  border: 3px solid #f1f1f1;
  z-index: 0;
}
.form-popup4 {
  display: none;
  position: absolute;
  left: 2%;
  right: 80%;
  top: 200px;
  bottom: 0;
  border: 3px solid #f1f1f1;
  z-index: 0;
}
.form-popup5 {
  display: none;
  position: absolute;
  left: 2%;
  right: 80%;
  top: 200px;
  bottom: 0;
  border: 3px solid #f1f1f1;
  z-index: 0;
}

/* Add styles to the form container */
.form-container {
  max-width: 100%;
  padding: 5px;
  background-color: white;
}
.form-contone {
  max-width: 100%;
  padding: 5px;
  background-color: white;
}
.form-conttwo {
  max-width: 100%;
  padding: 5px;
  background-color: white;
}
.form-contthree {
  max-width: 100%;
  padding: 5px;
  background-color: white;
}
.form-contfourr {
  max-width: 100%;
  padding: 5px;
  background-color: white;
}
.form-contfive {
  max-width: 100%;
  padding: 5px;
  background-color: white;
}


/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 5px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>


<style>
hr{
    border:0;
    margin:0;
    width:100%;
    height:3px;
    background:green;
}
</style>
<style>
.form {
        overflow: hidden;
		border: 1px solid Blue;
  		border-radius: 20px; 
  		border-spacing: 0;
 		background:#FFFFFF;
}
</style>

<style>
.name {
	font-size: 2vw;
	text-align: left;
	font-family: "Arial Black";
	Color: Blue;}
.td {
  background:linear-gradient(to right,  rgb(221,255,204) 50%, rgb(201,255,229) 51%);
  border-radius: 60px;
    width:70%;
}
  
</style>
<!-- Java Script for Marquee -->
<script src="https://icljk.com/jquery.min.js" type="text/javascript"></script>
<script src="//icljk.com/jquery.marquee.min.js?v=4" type="text/javascript"></script>
<!--style for horizontal marquee -->
<style type="text/css">
	.marquee,
    .marquee-with-options,
    .marquee-hor-before,
     .marquee-hor {
     	width: 100%;
        overflow: hidden;
		border: 1px solid White;
  		border-radius: 30px; 
  		border-spacing: 0;
 		background: #000099;
 		color:#FFFFFF;
		font-weight: normal;
            }
</style>

<!-- xml -->
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>

 <style>
        #blink {
            font-size: 20px;
            font-weight: bold;
            color: #2d38be;
            transition: 0.5s;
        }
    </style>


</head>
<body class="ICL-CONTAINER ICL-white">
<div class="ICL-CONTAINER ICL-white name">
<img src="images/LOGO.png" style="width:20%;">
<img src="images/CENTRE.png" style="width:35%; height="40px">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="http://icljk.com"><img src="buttons/HOME-HOME.png" width="15%" height="12%"></a>
<img src="images/india.gif" width="10%" height="70px" align="right">
</div>


<div class='marquee-with-options'>ICL Recognized &amp; Affiliated BY SARVA EDUCATION License by Central Govt.ofIndia , Vide Lic. No.2/114/T-I/08/D
Read with Notification of the Govt. of India No. GSR 288(E) dated 31.5.1991. CRN: U72900HP2008NPL03098 ***.</div>
<HR>

      <CENTER><H2> UNDER CONSTRUCTION - AVAILABLE UPTO 1ST AUGUST</H2></CENTER>
     <CENTER><H2> ONLINE ADMISSION ENROLLMENT FORM</H2></CENTER>
  

<button class="open-button" onclick="openForm()">Open Admission Form</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h3>Admission Form</h3>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <input type="text" placeholder="Enter Name" name="email" required>
    <input type="text" placeholder="Enter Parentage" name="email" required>
    <input type="text" placeholder="Enter Email" name="email" required>
    <input type="text" placeholder="Enter Email" name="email" required>
    <input type="text" placeholder="Enter Email" name="email" required>
    <input type="text" placeholder="Enter Email" name="email" required>
    <input type="text" placeholder="Enter Email" name="email" required>
    <input type="text" placeholder="Enter Email" name="email" required>
    <select name="course[]" onchange="showUser(this.value)">
          <option value="">Select Program</option>
          <option name="course" value="1">PGDCA</option>
          <option name="course" value="2">PGDCS</option> 
          <option name="course" value="3">ADCPS</option>
          <option name="course" value="4">HDCS</option>
          <option name="course" value="5">DCOMP</option>
          <option name="course" value="6">ADCA</option>
          <option name="course" value="7">ADCS</option>
          <option name="course" value="8">ADCFA</option>
          <option name="course" value="9">DCOSA</option>
          <option name="course" value="10">ACCSS</option>
          <option name="course" value="11">MCCS</option>
          <option name="course" value="12">DCFA</option>
          <option name="course" value="13">DDTP</option>
          <option name="course" value="14">DWD</option>
          <option name="course" value="15">DCA</option>
          <option name="course" value="16">DCS</option>
          <option name="course" value="17">CCA</option>
          <option name="course" value="18">CCS</option>
          <option name="course" value="19">CBC</option>
          <option name="course" value="20">CCFA</option>
          <option name="course" value="21">SHORT TERM</option>
          <option name="course" value="22">SPECIAL COURSE</option>
              </select>
            

    
   
 
        <button type="submit" class="btn">Login</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>


<table width="100%" border="0">
  <tr>
    <td width="25%"></td>
    <td width="50%">
    
    <form method="post"  enctype="multipart/form-data" action="/online1.php">
      <h4>
    <table class="form" width="96%"  align="center">
      <tr>
        <td>email</td>
        <td><input name="email" type="text" size="35"
         style="background-color:#FFFFFF;
          border: solid 1px #993300;
              height: 30px; 
              font-size:18px; 
              vertical-align:9px;color:#00F">&nbsp;</td>
        </tr>
        <tr>
        <td>Name</td>
        <td><input name="name" type="text" id="name" maxlength="30" 
            style="background-color:#FFFFFF;
          border: solid 1px #993300;
              height: 30px; 
              font-size:18px; 
              vertical-align:9px;color:#00F">&nbsp;</td>
      </tr>
      <tr>
        <td>Parentage</td>
        <td><input name="parentage" type="text" id="parentage" maxlength="30" 
           style="background-color:#FFFFFF;
          border: solid 1px #993300;
              height: 30px; 
              font-size:18px; 
              vertical-align:9px;color:#00F"></td>
      </tr>
      <tr>
        <td>D.O.B (Date/Month/Year):</td>
        <td><input name="day" type="text" id="day" class="calculator-input" onkeypress="return event.charCode >= 48 && event.charCode <= 57" size="2" value="DD"  maxlength="2"
                style="background-color:#FFFFFF;
                border: solid 1px #993300;
                 height: 25px; 
                font-size:18px; 
                vertical-align:5px;color:#00F">
                <input name="month" type="text" id="month" class="calculator-input" onkeypress="return event.charCode >= 48 && event.charCode <= 57" size="2" value="MM"  maxlength="2"
                style="background-color:#FFFFFF;
                border: solid 1px #993300;
                 height: 25px; 
                font-size:18px; 
                vertical-align:5px;color:#00F">
                <input name="year" type="text" id="year" class="calculator-input" onkeypress="return event.charCode >= 48 && event.charCode <= 57" size="4" value="YYYY"  maxlength="4"
                style="background-color:#FFFFFF;
                border: solid 1px #993300;
                 height: 25px; 
                font-size:18px; 
                vertical-align:5px;color:#00F"></td>
      </tr>
       <tr>
        <td>Sex</td>
        <td><select name="sex">
        
          <option name="sex" value="Male" >Male</option>
          <option name="sex" value="Female">Female</option> 
        </select></td>
      </tr>
      <tr>
        <td>Mobile No.:</td>
        <td><input name="mobile" type="text" id="mobile" class="calculator-input" onkeypress="return event.charCode >= 48 && event.charCode <= 57" size="10" value="XXXXXXXXXX"  maxlength="10"
                style="background-color:#FFFFFF;
                border: solid 1px #993300;
                 height: 25px; 
                font-size:18px; 
                vertical-align:5px;color:#00F">
        </td>
      </tr>
      <tr>
        <td>Course Applied:</td>
        <td> 

           </td>
            <tr>
              <td colspan="2" align="center">
                <div id="txtHint"><p id="blink">..SELECT COURSE AND SEE DETAIL..</p>
        <script type="text/javascript">
        var blink = document.getElementById('blink');
        setInterval(function() {
            blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
        }, 1000);
        </script></div>
                </td>
            </tr>
        <tr>
        <td>Passport Size Photograph</td>
        <td><input type="file"  name="image"
       style="background-color:#FFFFFF;
          border: solid 1px #993300;
              height: 30px; 
              font-size:18px; 
              vertical-align:9px;color:#00F"></td>
      </tr>
       <tr>
        <td colspan=2>Qualifications[ Attatch Documents]</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>(1) Matric</td>
        <td>
            <input type="file"  name="image1" style="background-color:#FFFFFF;border: solid 1px #993300;height: 30px; font-size:18px;vertical-align:9px;color:#00F"></td>
      </tr>
      <tr>
        <td>(2) 10+2</td>
        <td><input type="file"  name="image2" style="background-color:#FFFFFF;
          border: solid 1px #993300;
              height: 30px; 
              font-size:18px; 
              vertical-align:9px;color:#00F"></td>
              </tr>
              <tr>
        <td>(3) (Graduation)</td>
        <td><input type="file"  name="image3"
       style="background-color:#FFFFFF;
          border: solid 1px #993300;
              height: 30px; 
              font-size:18px; 
              vertical-align:9px;color:#00F"></td>
      </tr>
     <tr>
        <td>&nbsp;</td>
        <td align="right"><input type="submit" name="submit" value="Upload"> 
           </td>
      </tr>
      
      <tr>
        <td colspan="2"><hr><h5>AFTER CONFIRMATION OF YOUR ADMISSION , YOU WILL RECEIVE ROLL NO FROM OFFICE THROUGH SMS and EMAIL</h5><hr></td>
        </tr>
      <tr>
        <td colspan="2"><h5>1-ONLIN &amp; OFFLINE CLASSES</h5></td>
        </tr>
      <tr>
        <td colspan="2"><h5>2-SOME PRACTICAL'S ARE COMPULSORY FOR ONLINE STUDENTS</h5></td>
        </tr>
      <tr>
        <td colspan="2"><h5>3-AFTER AVAILABILITY OF ROLL NO .. ALL INFORMATION  AT STUDENT LOGIN</h5></td>
        </tr>
    </table>
    </h4>
    </form>
      </td>
    <td width="25%"></td>
  </tr>
</table>


<hr>
<div class="ICL-CONTAINER ICL-white marquee-with-options" align="center">
<img src="images/digital.png" height="50px" width="200px">
<img src="images/EDUCATION.png" height="50px" width="200px">
<img src="images/PRINTING.png" height="50px" width="200px">
<img src="images/software.png" height="50px" width="200px">
<img src="images/website.png" height="50px" width="200px">
<img src="images/TALLY.png" height="70px" width="200px">
<img src="images/PYTHONE.png" height="70px" width="200px">
<img src="images/VS.png" height="70px" width="200px">
<img src="images/DTP.png" height="70px" width="200px">
</div>
<hr>

 
 
 <script>
 $(function(){
    var $mwo = $('.marquee-with-options');
    $('.marquee').marquee();
    $('.marquee-with-options').marquee({
        //speed in milliseconds of the marquee
        speed: 100,
        //gap in pixels between the tickers
        gap: 5,
        //gap in pixels between the tickers
        delayBeforeStart: 0,
        //'left' or 'right'
        direction: 'left',
        //true or false - should the marquee be duplicated to show an effect of continues flow
        duplicated: true,
        
        pauseOnHover: true
    });

    //Direction hor
    $('.marquee-hor').marquee({
        direction: "left",
        speed: 1000
    });

    //pause and resume links
    $('.pause').click(function(e){
        e.preventDefault();
        $mwo.trigger('pause');
    });
    $('.resume').click(function(e){
        e.preventDefault();
        $mwo.trigger('resume');
    });
    //toggle
    $('.toggle').hover(function(e){
        $mwo.trigger('pause');
    },function(){
        $mwo.trigger('resume');
    })
    .click(function(e){
        e.preventDefault();
    })
});
</script>
 <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
  </body>
</html>