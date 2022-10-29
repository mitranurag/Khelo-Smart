<?php
//echo $username . "&nbsp" . $password;
$host = "localhost";
$user = "root";
$pwd = "";
$db = "cmba";
$conn = new mysqli($host,$user,$pwd,$db);
$studentid = $_REQUEST['student_id'];
$password = $_REQUEST['password'];
$select = "SELECT * FROM `student_authentication` where student_id= '$studentid' and password= '$password' " ;
$result= $conn->query($select);
if($result->num_rows==1){
    header("Location:Student.php");
}
?> 