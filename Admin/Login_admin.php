<?php
SESSION_start();
$host = "localhost";
$user = "root";
$pwd = "";
$db = "cmba";
$conn = new mysqli($host,$user,$pwd,$db);
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$select = "SELECT * FROM `admin_authentication` where username = '$username' and password = '$password' ";
$result = $conn->query($select);
if($result->num_rows==1){
    $_SESSION['username'] = $username ;
header("Location:Admin.php");
}
?>
