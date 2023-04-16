<?php

require_once('connect.php');

$firstname = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$dept = $_POST['dept'];
$salary = $_POST['salary'];
$birthday = $_POST['birthday'];

$sql = "INSERT INTO `employee`(`firstName`, `lastName`, `email`, `password`, `birthday`, `gender`, `contact`,  `address`, `dept`, `pic`) VALUES ('$firstname','$lastName','$email','1234','$birthday','$gender','$contact','$address','$dept','default_pic.jpg')";

$result = mysqli_query($conn, $sql);
if ($result == false) {
    echo "Error: " . mysqli_error($conn);
} else {
    $last_id = $conn->insert_id;

    $sqlS = "INSERT INTO `salary`(`id`, `base`, `bonus`, `total`) VALUES ('$last_id','$salary',0,'$salary')";
    $salaryQ = mysqli_query($conn, $sqlS);
    
    if($result == 1){
        
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Successfully Registered')
        window.location.href='..//viewemp.php';
        </SCRIPT>");
    }
    
    else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Failed to Register')
        window.location.href='javascript:history.go(-1)';
        </SCRIPT>");
    }
}

?>
