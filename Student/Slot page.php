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
        <title>Slot Page</title>
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
        <h1 class="display-3">Slot Page</h1>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col">
    <div class="form-group">
        <form action="Slot page.html">
            <label for=""><b>Day</b></label>
            <input type="text" name="" id="" class="form-control" placeholder="Day"><br>
            <label for=""><b>Time</b></label>
            <input type="time" name="" id="" class="form-control" placeholder="Time"><br>
            <input type="submit" style="border-color:darkturquoise">
            <input type="reset" style="border-color:darkturquoise">
      </form>
    </div>
    </div>
    <div class="col"></div>
    </div>
    <br><br><br>
    <footer class="bg-dark text-muted text-center fixed-bottom">
        <p>Khelo Smart @ 2022. &copy; Copyrights : Anurag</p>
    </footer>
    </body>
</html>