<?php
SESSION_start();
if($_SESSION['username'] == ""){
    header("Location:Login.html");
}
include("../db.php");
$conn = new mysqli($host,$user,$pwd,$db);
$select = " SELECT `sl_no`, `student_id`, `student_name`, `feedback`, `type`, `date` FROM `student_progress` ";
$result = $conn->query($select);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student Performance</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-sm navbar-dark sticky-top" style="background-color:saddlebrown ;">
        <a class="navbar-brand" href="#" style="color:chartreuse">Khelo Smart</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="Trainer.php">Home </a>
                </li>
        </div>
    </nav>
    <div class="jumbotron text-center">
        <h1 class="display-3">Student Performance</h1>
    </div><br>
    <table class="table table-striped table-warning " style="text-align: center;">
        <thead class="thead-inverse table-dark">
            <tr>
                <th>S.No.</th>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Feedback</th>
            </tr>
            <?php 
           if($result->num_rows>0){
             while($row=$result->fetch_assoc()){
           
           ?>
            <tr>
                <td><?php echo $row['sl_no']?></td>
                <td><?php echo $row['student_id']?></td>
                <td><?php echo $row['student_name']?></td>
                <td><?php echo $row['feedback']?></td>
            </tr>
            <?php 
                 }
                }
                ?>
            </thead>
    </table><br>
    <br><br><br>
    <footer class="bg-dark text-muted text-center fixed-bottom">
        <p>Khelo Smart @ 2022. &copy; Copyrights : Anurag</p>
    </footer>
    </body>
</html>