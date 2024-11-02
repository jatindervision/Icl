<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ICL</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="ICL-CONTAINER.css">
<style>
.font {
    font-size: 5vw;
}
}
.hr{
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
* {
  box-sizing: border-box;
}


.column {
  float: left;
  padding: 10px;
  height: auto;                                       
}

.left, .right {
  width: 25%;
}

.middle {
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
@media only screen and (max-width: auto) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;
  }
}
</style>
   <style>
      .button {
        background-color: #1c87c9;
        border: none;
        color: white;
        border-radius: 50px; 
        padding: 10px 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 40px;
        margin: 4px 2px;
        cursor: pointer;
      }
    </style>
</head>
<body style="text-align:center" class="ICL-CONTAINER ICL-white" >

<div data-role="popup" id="popupstudent" data-overlay-theme="a" data-theme="a" data-corners="true" data-tolerance="15,15" >
    <iframe src="Fee.php" width="70%" height="350" seamless></iframe>
	 
</div>

     </body>
</html>