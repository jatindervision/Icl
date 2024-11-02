
<html lang="en">
<head>
    <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link rel="stylesheet" href="https://www.icljk.com/ICL-CONTAINER.css">
    <title>ICL</title>
<!-- Style Sheet for clock-->
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
div {
  		height: 100%;
  		width: 100%;
 		background-color: powderblue;
  		border-radius: 40px;
      }
.hr{
  		 border:0;
   		 margin:0;
   		 width:80%;
   		 height:2px;
    		 background:blue;
      }
</style>

</head>
  
<body  class="ICL-CONTAINER ICL-white">

  <div class="div" align="center">
 	<label class="date" id="datee"></label><hr class="hr">
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
</body>
  
</html>