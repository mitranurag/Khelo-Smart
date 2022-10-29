<?php 
$studentid = $_REQUEST['student_id'];
$studentname = $_REQUEST['student_name'];
$email = $_REQUEST['email'];
$contact = $_REQUEST['contact'];
$password = $_REQUEST['password'];
$age = $_REQUEST['age'];
$gender = $_REQUEST['gender'];
$addres = $_REQUEST['address'];
$timefrom = $_REQUEST['time_from'];
$timeupto = $_REQUEST['time_upto'];
//echo $username."&nbsp".$email."&nbsp".$contact."&nbsp".$password."&nbsp".$age."&nbsp".$gender;
header("Location:Login.html");

//database connection
$host = "localhost";
$user = "root";
$pwd = "";
$db = "cmba";
$conn = new mysqli($host,$user,$pwd,$db);
$insert = "INSERT INTO student_authentication(student_id,student_name,email,contact,password,age,gender,address,time_from,time_upto) VALUES ('$studentid','$studentname','$email','$contact','$password','$age','$gender','$addres','$timefrom','$timeupto')";
$conn->query($insert);
?> 