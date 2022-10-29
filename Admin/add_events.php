<?php 
$eventname = $_REQUEST['event_name'];
$date = $_REQUEST['date'];
$time = $_REQUEST['time'];
$price = $_REQUEST['price'];
$location = $_REQUEST['location'];
$info = $_REQUEST['info'];

header("location:Add events.php");

$host = "localhost";
$user = "root";
$pwd = "";
$db = "cmba";
$conn = new mysqli($host,$user,$pwd,$db);
$insert = "INSERT INTO events(event_name,event_date,event_time,price,location,information) VALUES('$eventname','$date','$time','$price','$location','$info')";
$conn->query($insert);

?>