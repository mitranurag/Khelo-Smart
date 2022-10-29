<?php
SESSION_start();
if($_SESSION['username'] == ""){
    header("Location:Login.html");
}
include("../db.php");
$select = "SELECT `sl_no`, `event_name`, `event_date`, `event_time`, `price`, `location`, `information`, `type`, `date` FROM `events` ";
$result = $conn->query($select);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>View Events</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-success sticky-top">
        <a class="navbar-brand" href="#" style="color:chartreuse">Khelo Smart</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="Student.php">Home </a>
                </li>
        </div>
    </nav>
    <div class="jumbotron text-center">
        <h1 class="display-3">View Events</h1>
    </div><br>
    <table class="table table-bordered table-success">
        <thead class="thead-inverse">
            <tr>
                <th>S.No</th>
                <th>Event Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Price</th>
                <th>Location</th>
                <th>Information</th>
            </tr>
            </thead>
            <tbody>
                <?php 
           if($result->num_rows>0){
             while($row=$result->fetch_assoc()){
           ?> <tr>
                    <td><?php echo $row['sl_no']?></td>
                    <td><?php echo $row['event_name']?></td>
                    <td><?php echo $row['event_date']?></td>
                    <td><?php echo $row['event_time']?></td>
                    <td><?php echo $row['price']?></td>
                    <td><?php echo $row['location']?></td>
                    <td><?php echo $row['information']?></td>
                </tr>
                <?php 
                 }
                }
                ?>
            </tbody>
    </table>

    <br><br><br>
    <footer class="bg-dark text-muted text-center fixed-bottom">
        <p>Khelo Smart @ 2022. &copy; Copyrights : Anurag</p>
    </footer>
    </body>
</html>
