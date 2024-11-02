<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ICL</title>
<link rel="icon"  type="image/png" sizes="128×128" href="images/JKP.png">
<meta name="google-site-verification" content="yx_N4nv3P8tLXobYJ860Oo8zmNGCj1Ly0jRNt5hhhmk" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" href="ICL-CONTAINER.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<!-- Style Sheet for vertical Marquee -->
<style type="text/css">
	.marquee,
    .marquee-with-vertical,
    .marquee-ver-before,
    .marquee-ver {
        width: auto;
       
        overflow: hidden;
		border: 1px solid Blue;
  		border-radius: 30px; 
  		border-spacing: 0;
 		background:#FFFFFF;
 		color:#000099;
		font-weight: normal;
            }
.marquee-with-dr{
     overflow: hidden;
		border: 1px solid Blue;
  		border-radius: 30px; 
  		border-spacing: 0;
 		background: #000099;
 		color:#FFFFFF;
		font-weight: normal;
   }
   .marquee-with-options{
        overflow: hidden;
		border: 1px solid green;
  		border-radius: 30px; 
  		border-spacing: 0;
 		   }

</style>
<!-- Java Script for Marquee -->
<script src="jquery.min.js" type="text/javascript"></script>
<script src="jquery.marquee.min.js?v=4" type="text/javascript"></script>
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 30px;
  transition: 0.6s ease;
  border-radius: 0 9px 9px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 9px 0 0 9px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size:20px}
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
    width:auto;
}
  hr{
    border:0;
    margin:0;
    width:100%;
    height:3px;
    background:green;
}
</style>
 <style>
 body,html
{
    background-color:#DDEEDD;
    padding:0px;
    margin:0px;
    height:100%;
    width:100%;
    overflow:hidden;
}
     	.clock{
          background-image: linear-gradient(to right, rgb(0,0,0)50%, rgb(204,0,0)51%);
          font-family: Arial;
          Color:white;
          font-size: 30px;
          text-align: center;
          width:100%;
          height:auto;
          border-radius: 10px;
          padding:0px;
          
      }
  	.date {
       
          font-family: Arial;
          Color:solid blue;
          font-size: 20px;
          text-align: center;
          width:100%;
          height:auto;
          border-radius: 10px;
          padding:0px;
      }
dv {
  		height: 100%;
  		width: 100%;
 	//	background-color: powderblue;
  		border-radius: 40px;
      }

</style>
</head>
<body class="ICL-CONTAINER ICL-white">
<div>
<img src="images/LOGO.png" style="width:20%;">
<img src="images/CENTRE.png" style="width:35%; height="40px">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="online.php"><img src="images/online.png" width="15%" height="12%"></a>
<img src="images/india.gif" width="10%" height="75px" align="right">
</div>
<hr>
<table  align="center" width="100%" border="0" >
<tr>
<td width="25%" align="center">
          <div>
          <a href="chairman.php"><img src="buttons/chairman.png" width="40%" height="35%" alt="Chairman" /></a>
          <a href="principal.php"><img src="buttons/principal.png" width="40%" height="35%" alt="Principal" /></a>
          </div>
                </td>
<td  width="50%" align="center">
          <div>
          <a href="institute.php"><img src="buttons/institute.png" width="18%" height="45%" alt="Instute" /></a>
          <a href="lab.php"><img src="buttons/lab.png" width="18%%" height="45%" alt="Lab" /></a>
          <a href="vision.php"><img src="buttons/vision.png" width="18%%" height="45%" alt="Vision" /></a>
         <a href="index.php"><img src="buttons/HOME-HOME.png" width="18%" height="45%" alt="HOME" /></a>
          <a href="aboutus.php"><img src="buttons/about.png" width="18%" height="45%" alt="About_Us" /></a>
          </div>
        </td>
       <td class="td" width="25%"  align="center">
         <div class="dv" align="center">
 	<label class="date" id="datee"></label>
	<label  class="clock" id="clock" >8:10:45</label>
</div>
<script>
        setInterval(showTime, 1000);
        const d = new Date();
	document.getElementById("datee").innerHTML = d.toDateString();
        function showTime() {
            let time = new Date();
            let hour = time.getHours();
            let min = time.getMinutes();
            let sec = time.getSeconds();
            am_pm = "AM";
  
            if (hour > 12) {
                hour -= 12;
                am_pm = "PM";
            }
            if (hour == 0) {
                hr = 12;
                am_pm = "AM";
            }
  
            hour = hour < 10 ? "0" + hour : hour;
            min = min < 10 ? "0" + min : min;
            sec = sec < 10 ? "0" + sec : sec;
            
           let currentHour = hour + ":" 
                + min + ":" + sec + am_pm;
                
            let currentTime = hour;
            
            document.getElementById("clock")
                .innerHTML = currentTime;
            document.getElementById("clock")
                .innerHTML = currentHour;
         }
                 showTime();
</script>
</td>
      </tr>
      <tr>
      <td align="center"><div class="marquee-with-vertical">
 <?php include("users/htdocs/security/newsshow.php"); ?>
 </div>
 
 <img src="images/LAPTOP.jpg" alt="" width="95%"></td>
      <td><div class="slideshow-container">
    <div class="mySlides fade">
  <div class="numbertext">PGDCAS /18</div>
  <img src="images/courses-page-001.jpg" style="width:100%"  height=380px>
  <div class="text">1</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 /18</div>
  <img src="courses-page-002.jpg" style="width:100%"  height=380px>
  <div class="text">ADCPS</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 18</div>
  <img src="https://icljk.com/images/courses-page-003.jpg" style="width:100%" height=380px>
  <div class="text">HDCS , MDCS</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 18</div>
  <img src="courses-page-004.jpg" style="width:100%"  height=380px>
  <div class="text">DCOMP</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 18</div>
  <img src="https://icljk.com/images/courses-page-005.jpg" style="width:100%"  height=380px>
  <div class="text">ADCA , ADACS</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 18</div>
  <img src="images/courses-page-006.jpg" style="width:100%"  height=380px>
  <div class="text">DCOSA, ADCFA</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">7 / 18</div>
  <img src="images/courses-page-007.jpg" style="width:100%" height=380px>
  <div class="text">ACCS</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">8 / 18</div>
  <img src="images/courses-page-008.jpg" style="width:100%" height=380px>
  <div class="text">DCFA</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">9 / 18</div>
  <img src="https://icljk.com/images/courses-page-009.jpg" style="width:100%" height=380px>
  <div class="text">DDTP</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">10 / 18</div>
  <img src="images/courses-page-010.jpg" style="width:100%" height=380px>
  <div class="text">DWD</div>
</div>
<div class="mySlides fade">
  <div class="numbertext"> 11 / 18</div>
  <img src="images/courses-page-011.jpg" style="width:100%" height=380px>
  <div class="text">DCA , DCS</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">12 / 18</div>
  <img src="https://icljk.com/images/courses-page-012.jpg" style="width:100%" height=380px>
  <div class="text">CCS</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">13 / 18</div>
  <img src="images/courses-page-013.jpg" style="width:100%" height=380px>
  <div class="text">CBC</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">14 / 18</div>
  <img src="images/courses-page-014.jpg" style="width:100%" height=380px>
  <div class="text">CCFA</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">15 / 18</div>
  <img src="images/courses-page-015.jpg" style="width:100%" height=380px>
  <div class="text">SHORT TERM COURSES</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">16 / 18</div>
  <img src="images/courses-page-016.jpg" style="width:100%" height=380px>
  <div class="text">SHORT TERM COURSES</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">17 / 18</div>
  <img src="images/courses-page-017.jpg" style="width:100%" height=380px>
  <div class="text">SHORT TERM COURSES</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">18 / 18</div>
  <img src="images/courses-page-018.jpg" style="width:100%" height=380px>
  <div class="text">POST GRADUATE DIPLOMA </div>
</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span>
  <span class="dot" onclick="currentSlide(8)"></span>
  <span class="dot" onclick="currentSlide(9)"></span>
  <span class="dot" onclick="currentSlide(10)"></span>
  <span class="dot" onclick="currentSlide(11)"></span>
  <span class="dot" onclick="currentSlide(12)"></span>
  <span class="dot" onclick="currentSlide(13)"></span>
  <span class="dot" onclick="currentSlide(14"></span>
  <span class="dot" onclick="currentSlide(15)"></span>
  <span class="dot" onclick="currentSlide(16)"></span>
  <span class="dot" onclick="currentSlide(17)"></span>
  <span class="dot" onclick="currentSlide(18)"></span>
</div>
<div align="right">
<a href="http://icljk.com/online.php">
<img src="/images/HAND.png"  width="5%" height="2%">
 <img src="images/select.png" width="15%" height="12%"></a>
 </div>
</td>
      <td align="center">
      <p> <img src="images/ICL2.gif" width="80%"> 
          <br>
          <a href="studentlogin.php"><img src="buttons/STUDENT-LOGIN.png" width="60%" height="40" alt="STUDENT" ></a> 
          <br>
          <img src="images/ICL1.png" alt="" width="40%"></p></td>
      </tr>
      
 </table>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

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
 <div class="row" >
  <div class="column left" align="left">
    
    <p><div id="demo"></div>
<script>
var txt = "";
txt += "<p>Screen Resolution: " + screen.width + "*" + screen.height + "</p>";
document.getElementById("demo").innerHTML = txt;
</script></p>
  </div>
  <div class="column middle" align="center">
    
    <p>Copyright @ ICL
<script language="javascript" type="text/javascript">
	var today = new Date() 
	var year = today.getFullYear()
	document.write(year)
</script></p>
  </div>
  <div class="column right" align="right">
   
    <p><h7></h7><a href="admin.php" style="text-decoration: none">By Jatinder</a></h7></p>
  </div>
</div>
 <script>
 $(function(){
    var $mwo = $('.marquee-with-dr');
    $('.marquee').marquee();
    $('.marquee-with-dr').marquee({
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
        direction: 'right',
        //true or false - should the marquee be duplicated to show an effect of continues flow
        duplicated: true,
        
        pauseOnHover: true
    });

    //Direction hor
    $('.marquee-hor').marquee({
        direction: "right",
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
 $(function(){
    var $mwo = $('.marquee-with-vertical');
    $('.marquee').marquee();
    $('.marquee-with-vertical').marquee({
        //speed in milliseconds of the marquee
        speed: 100,
        //gap in pixels between the tickers
        gap: 5,
        //gap in pixels between the tickers
        delayBeforeStart: 0,
        //'left' or 'right'
        direction: 'up',
        //true or false - should the marquee be duplicated to show an effect of continues flow
        duplicated: true,
        
        pauseOnHover: true
    });

    //Direction hor
    $('.marquee-hor').marquee({
        direction: "up",
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
  </body>
</html>