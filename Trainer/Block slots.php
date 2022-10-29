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
        <title>Block Slots</title>
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
        <h1 class="display-3">Block Slots</h1>
    </div>
    <br>
    <div class="row">
        <div class="col"></div>
        <div class="col">
        <form method="post" action="block_slots.php">
            <div class="form-group">
                <label for=""><b>Student ID</b></label>
                <input type="text" name="student_id" id="" class="form-control" placeholder="Student Id"><br>
                <label for=""><b>Time From</b></label>
                <input type="time" name="time_from" id="" class="form-control" placeholder="Time"><br>
                <label for=""><b>Time Upto</b></label>
                <input type="time" name="time_upto" id="" class="form-control" placeholder="Time"><br>
                <input type="submit">
                <input type="reset">
            </div>
        </form>
    </div>
    <div class="col"></div>
    </div>
    <br><br><br>
    <footer class="bg-dark text-muted text-center fixed-bottom">
        <p>Khelo Smart @ 2022. &copy; Copyrights : Anurag</p>
    </footer>
    </body>
</html>
