<html>
	<head><title>Get your Ticket!</title>
	<style>
	.container
	{
		font-family:"Broadway";
		font-size:14px;
		color: #000;
		position:absolute;
		top:75px;
		left:750px;
	}
	img
	{
		position:absolute;
		width:36%;
		margin: 10px auto;
		display: block;
		top: -10px;
		left: 570px;
	}

	#btnOne
	{
		position:absolute;
		top:400px;
		left:870px;
	}
	body
	{
		backround-color: LighCyan;
		
	}
		
	
	</style>
	
	<script>
        function msg_alert(msg)
        {
            alert(msg)
        }
    </script>
	</head>
	

	<button id="btnOne"type="button" onclick="alert('we will be sending a copy of your ticket/s to your Email. Thank you for trusting our Busline. Have a safe trip')">
	<a href="finalproject.html"></a>Get Ticket</button>
	
	<body>
	
	<center>
	
	
	<img src="ticket.jpg">
	<div class="container">

	<?php
	
	$Nm = $_POST["Name"];
	$Pn = $_POST["Pnumber"];
	$Ca = $_POST["Caddress"];
	$Gen = $_POST["gender"];
	$BusT = $_POST["Btype"];
	$DesT = $_POST["Destination"];
	if($Nm)
	{
	 	echo "<h2>$Nm</h2>";
		
	
	}
	if($Pn)
	{
		echo "$Pn";
		echo "<br>";
	}

	if($Ca)
	{
		echo "$Ca";
		echo "<br>";
	}

	if($Gen)
	{
		echo "$Gen";
		echo "<br>";
	}

	if($BusT)
	{
		echo "$BusT";
		echo "<br>";
	}

	if($DesT)
	{
		echo"$DesT";
		echo "<br>";
	}
		
	
	
	if($_POST["Submit"] == true)
	{
		$Rand = rand(1000,10000);
		$rnd = rand(1,15);
		echo"<h2>BusNo. $rnd TicketNo. $Rand</h2>";
	
			
	}
	?>
	     	 
	</div>
	</center>
	</body>
</html>
