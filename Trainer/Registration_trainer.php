<?php 
$trainerid = $_REQUEST['trainer_id'];
$trainername = $_REQUEST['trainer_name'];
$email = $_REQUEST['email'];
$contact = $_REQUEST['contact'];
$password = $_REQUEST['password'];
$experience = $_REQUEST['exp'];
$gender = $_REQUEST['gender'];

//echo $username."&nbsp".$email."&nbsp".$contact."&nbsp".$password."&nbsp".$experience."&nbsp".$gender;
header("Location:Login.html");

$host = "localhost";
$user = "root";
$pwd = "";
$db="cmba";
$conn= new mysqli($host,$user,$pwd,$db);
$insert= "INSERT INTO trainer_authentication(trainer_id,trainer_name,email,contact,password,experience,gender) VALUES('$trainerid','$trainername','$email','$contact','$password','$experience','$gender')";
$conn->query($insert);
?>