<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<title>base</title>
</head>
<body>
	<div class="header">
		<img src="worker.jpg" id="logo">
		<h1>E SEWA</h1>
	</div>
	<div id="sidebar">
		<div class="toggle-btn" onclick="togglesidebar()">
		  <span></span>
	  		<span></span>
	  		<span></span>
	  	</div>
	 		<ul>
	 		<li><a href="bookappt.php">Book Appointment</a></li>
	 		<li><a href="cappt.php">Appointment</a></li>
	  		<li><a href="Search.php">Search Worker</a></li>
	  		<li><a href="feedback.php">Feedback</a></li>
	  		<li><a href="contact.php">Contact Us</a></li>
			<li><a href="logout.php">LogOut</a></li>
			</ul>
		</div>
		<script type="text/javascript">
							function togglesidebar()
				{
				  document.getElementById("sidebar").classList.toggle("active");
				}
		</script>

</body>
</html>
