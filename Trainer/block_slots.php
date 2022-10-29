<?php 
$student_id = $_REQUEST['student_id'];
$timefrom = $_REQUEST['time_from'];
$timeupto = $_REQUEST['time_upto'];

header("location:Block Slots.php");

$host = "localhost";
$user = "root";
$pwd = "";
$db = "cmba";
$conn = new mysqli($host,$user,$pwd,$db);
$update = "UPDATE student_authentication SET time_from= $timefrom, time_upto=$timeupto WHERE student_id= $student_id";
$conn->query($update);
?>