<?php
SESSION_start();
if($_SESSION['username'] == ""){
    header("Location:Login.html");
}
include("../db.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Notification</title>
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
        <h1 class="display-3">Notification</h1>
    </div>
    <center>COMING SOON IN NEXT UPDATE...</center>
    <br><br><br><br>
    <footer class="bg-dark text-muted text-center fixed-bottom ">
        <p>Khelo Smart @ 2022. &copy; Copyrights : Anurag</p>
    </footer>
    </body>
</html>
