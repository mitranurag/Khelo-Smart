<?php
/*SESSION_start();
if($_SESSION['username'] == ""){
    header("Location:Admin/Login.html");
}*/
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
$update = "UPDATE `student_authentication` SET `status`='1' WHERE student_id = '$accessID' ";
$conn->query($update);

  header("Location:Admin/Approval.php");
}
else if($type == 'trainer'){
    $update = "UPDATE `trainer_authentication` SET `status`='1' WHERE trainer_id = '$accessID' ";
    $conn->query($update);

            header("Location:Admin/Approval.php");
}
?>