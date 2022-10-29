<?php
SESSION_start();
if($_SESSION['username'] == ""){
    header("Location:Login.html");
}
/*include("../db.php");
$studentid = $_REQUEST['student_id'];
$select = "SELECT * FROM student_authentication WHERE student_id = '$studentid' ";
$result = $conn->query($select); */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
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
        <h1 class="display-3">Profile</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
    <table class="table table-bordered">
    <!--</*?php 
           if($result->num_rows>0){
             while($row=$result->fetch_assoc()){
             */?> -->
            <tr>
                <th> <i class="fas fa-id-badge">&nbsp;&nbsp;&nbsp;</i>Student ID</th>
                <td>205</td>
            </tr>
            <tr>
                <th><i class="fas fa-user-alt">&nbsp;&nbsp;&nbsp;</i>Student Name</th>
                <td>Anurag</td>
            </tr>
            <tr>
                <th><i class="fas fa-envelope">&nbsp;&nbsp;&nbsp;</i>Email</th>
                <td>anurag@anu.com</td>
            </tr>
            <tr>
                <th><i class="fas fa-id-card">&nbsp;&nbsp;&nbsp;</i>Age</th>
                <td>20</td>
            </tr>
            <tr>
                <th><i class="fas fa-map-marked-alt">&nbsp;&nbsp;&nbsp;</i>Address</th>
                <td>Hyderbad</td>
            </tr>
            <tr>
                <th><i class="fas fa-mobile-alt">&nbsp;&nbsp;&nbsp;</i>Contact</th>
                <td>9876543211</td>
            </tr>
          <!--  </*?php 
             }
            }
            ?> -->
    </table>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <br><br><br><br>
    <footer class="bg-dark text-muted text-center fixed-bottom">
        <p>Khelo Smart @ 2022. &copy; Copyrights : Anurag</p>
    </footer>
    </body>
</html>
