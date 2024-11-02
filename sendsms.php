<?php
$token = 'egQvjh7BR7U8FAhZSLx3YurmJpbBBT6sLtJS9zSVff0xQFDdpMWvJbvSmiee';
$mobile = mysql_real_escape_string($_POST['phone']);
$msg = mysql_real_escape_string($_POST['message']);
$site = 'https://www.icljk.com';
$url = "http://api.fast2sms.com/sms.php?token=".$token."&mob=".$mobile."&mess=".$msg."&sender=".$site."&route=0";
$homepage = file_get_contents($url);
if($homepage)
{
  echo "Message Send Compleated...";
}
else{
  echo "Something Went Wrong...";
}
?>
