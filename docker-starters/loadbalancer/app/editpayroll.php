<?php

require_once ('process/connect.php');
$sql = "SELECT * FROM `salary` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$firstname = mysqli_real_escape_string($conn, $_POST['firstName']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastName']);
	$salary = mysqli_real_escape_string($conn, $_POST['base']);
	$deduct = mysqli_real_escape_string($conn, $_POST['deduction']);
	$bonus = mysqli_real_escape_string($conn, $_POST['bonus']);
    $total = mysqli_real_escape_string($conn, $_POST['total']);
    

	


$result = mysqli_query($conn, "UPDATE `salary` SET `base`='$salary',`deduction`='$deduct',`bonus`='$bonus',`total`='$total' WHERE id=$id");
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='viewemp.php';
    </SCRIPT>");


	
}
?>




<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	$sql = "SELECT * from `salary` WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$salary = $res['base'];
	$deduct = $res['deduction'];
	$bonus = $res['bonus'];
    $total = $res['total'];
	$PAGIBIG = .2;
	$SSS= .12;
	$PHILHEALTH = .5 ;
	$Totaldeduct = ($PAGIBIG + $SSS + $PHILHEALTH);
	
	
}
}

?>

<html>
<head>
	<title>View Employee |  Admin Panel | Employee Management System</title>
	<!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
	<header>
		<nav>
			<h1>EMS</h1>
			<ul id="navli">
				<li><a class="homeblack" href="index.html">HOME</a></li>
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homered" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="elogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>
	

		<!-- <form id = "registration" action="edit.php" method="POST"> -->
	<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Update PAYROLL Info</h2>
                    <form id = "registration" action="editpayroll.php" method="POST">

                        <div class="row row-space">
                            <div class="col-2">



                        <div class="input-group">
                            <input class="input--style-1" type="number"  placeholder="Base Salary" name="base" value="<?php echo $salary;?>">
                        </div>
                        <div class="row row-space">
                            
                            <div class="col-2">
                                <div class="input-group">
									<input class="input--style-1" type="number" placeholder="Bonus" name="bonus" value="<?php echo $bonus;?>">
                                </div>
                                <div class="input-group">
                                    <br>
                                    <p>TOTAL SALARY</p>
									<input class="input--style-1" type="number" placeholder="Total" name="total" value="<?php echo $total=$bonus+$salary*$Totaldeduct;?>"readonly>
                                </div>
                            </div>
                        </div>
                        
                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Submit</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


  
</body>
</html>
