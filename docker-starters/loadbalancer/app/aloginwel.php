<?php 
require_once ('process/connect.php');
$sql = "SELECT id From alogin WHERE email = email  order by password = password";
$result = mysqli_query($conn, $sql);
?>


<html>
<head>
	<title>Admin Panel | Employee Management System</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
</head>
<style>
.aloginpic1{
	
	width:50%;
	margin-right: 30px; 
	margin-top:50px;
}
</style>
<body>
	
	<header>
		<nav>
			<h1>EMS</h1>
			<ul id="navli">
				
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homeblack" href="viewemp.php">View Employee</a></li>
				<!-- <li><a class="homeblack" href="salaryemp.php">PAYROLL</a></li> -->
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
				
			</ul>
		</nav>
	</header>
	<div class="divider"></div>
	<div id="divimg">
	
	
		
	</div>
	<center><img class="aloginpic1 "src="aloginpic.jpg"></center>

</body>
</html>