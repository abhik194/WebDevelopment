<!DOCTYPE html>
<html>
<head>
	<title>Tracker Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<style type="text/css">
		.btn{
			background-color: green;
		}
		a{
			text-align: center;
		}
	</style>
<!--<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#div2").load('view.php');
  });
});
</script>-->
</head>
<body onload="detec()">
	<form>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Track your device</h1>
			</div>
			
				<h3 id="div1" style="color:red;  
              font-size: 20px; text-align: center;"></h3>
            
            <a class="btn" id="button" href="final.php">OK</a> 

          <!--   <button id="button" class='btn'>OK</button> -->
              
              <div id="div2">
              	
              </div>
			

		<!--	<div class="login-form">
				<div class="control-group">
				<a class="btn" id="button" onclick="detec()" href="#">Check Device</a>
				<p id="d_name" style="color: red; font-size: 20px;">

				<div class="app-title">
					<h3>Insert the result</h3>
				</div>

				<input type="text" name="name" id="d_name" placeholder="desktop/phone" required/>
				<br>
				
				
					
			</div>
		</div> -->

	</div>
</div>
</form>
    <script> 
       var device = ""; 

       var ph = 'phone';
       var desk = 'desktop';
       var up = document.getElementById("div1");
  
        function detec(){ 
  
            if (navigator.userAgent.match(/Android/i) 
                || navigator.userAgent.match(/webOS/i) 
                || navigator.userAgent.match(/iPhone/i)  
                || navigator.userAgent.match(/iPad/i)  
                || navigator.userAgent.match(/iPod/i) 
                || navigator.userAgent.match(/BlackBerry/i) 
                || navigator.userAgent.match(/Windows Phone/i))
                {
					device = ph;

                } 

            else 
            { 
              device = desk;
            } 

            up.innerHTML= device;
            $.ajax({
            	type:"POST",
            	url: 'viewold.php',
            	data: { name : device },
            	success: function(data)
            	{
            		alert("success");
            	}
            });
             
        } 
       
    </script>

</body>
</html>