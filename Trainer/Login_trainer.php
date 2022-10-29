<?php
//echo $user . "&nbsp" . $pass;

$host = "localhost";
$user = "root";
$pwd = "";
$db = "cmba";
$conn = new mysqli($host,$user,$pwd,$db);
$trainerid = $_REQUEST['trainer_id'];
$password = $_REQUEST['password'];
$select = "SELECT * FROM `trainer_authentication` where trainer_id='$trainerid' and password='$password' ";
$result = $conn->query($select);
if($result->num_rows==1){
    header("Location:Trainer.php");
}
?>
