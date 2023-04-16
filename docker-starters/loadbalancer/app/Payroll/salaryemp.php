<?php

require_once ('process/connect.php');
$sql = "SELECT employee.id,employee.firstName,employee.lastName,salary.base,salary.deduction,salary.bonus,salary.total from employee,`salary` where employee.id=salary.id";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Salary Table | Employee Management System</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	
	<header>
		<nav>
			<h1>PAYROLL</h1>
			<ul id="navli">
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homeblack" href="viewemp.php">View Employee</a></li>
				<li><a class="homered" href="salaryemp.php">PAYROLL</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
		
	</div>
	
	<table>
			<tr>
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				<th align = "center">Base Salary</th>
				<th align = "center">Deductions</th>
				<th align = "center">Bonus</th>
				<th align = "center">Total Salary</th>
				<th align = "center">Options</th>
				
				
			</tr>
			
			<?php

                
				$PAGIBIG = .2;
				$SSS= .12;
				$PHILHEALTH = .5 ;
				$Totaldeduct = ($PAGIBIG + $SSS + $PHILHEALTH);
				while ($salary = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$salary['id']."</td>";
					echo "<td>".$salary['firstName']." ".$salary['lastName']."</td>";
					echo "<td>".$salary['base']."</td>";
					echo "<td>".$salary['deduction'] =$Totaldeduct;"</td>";
					echo "<td>".$salary['bonus']." </td>";
					echo "<td>".$salary['total'] = $salary['bonus']+ $salary['base']* $Totaldeduct." </td>"; 
					

					
				    echo "<td><a href=\"editpayroll.php?id=$salary[id]\">Edit</a> </td>";

				}


			?>
			
			</table>
</body>
</html>