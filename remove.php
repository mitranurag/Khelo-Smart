<?php
//connect to db
$host = "localhost";
$user = "root";
$pwd = "";
$db = "cmba";
$conn = new mysqli($host,$user,$pwd,$db);
//fetch acces id
$accessID = $_REQUEST['accessID'];
$type = $_REQUEST['type'];
if($type == 'student'){
$delete = "DELETE FROM `student_authentication` where student_id = '$accessID' ";
$conn->query($delete);

  header("Location:Admin/Approval.php");
}
else if($type == 'trainer'){
    $delete = "DELETE FROM `trainer_authentication` where trainer_id = '$accessID'";
    $conn->query($delete);

            header("Location:Admin/Approval.php");
}
?>