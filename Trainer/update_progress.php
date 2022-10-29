<?php 
$studentid= $_REQUEST['student_id'];
$name= $_REQUEST['student_name'];
$feedback = $_REQUEST['feedback'];

header("Location:Trainer.php");

$host = "localhost";
$user = "root";
$pwd = "";
$db = "cmba";
$conn= new mysqli($host,$user,$pwd,$db);
$insert = "INSERT INTO student_progress(student_id,student_name,feedback) VALUES('$studentid','$name','$feedback')";
$conn->query($insert);
?>