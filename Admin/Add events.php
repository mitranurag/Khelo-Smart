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
        <title>Add Events</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger sticky-top">
        <a class="navbar-brand" href="#" style="color:chartreuse">Khelo Smart</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="Admin.php">Home </a>
                </li>
        </div>
    </nav>
    <div class="jumbotron text-center">
        <h3 class="display-3">Add Events</h3>
    </div>
    <br>
    <!--form-->
    <div class="row">
        <div class="col"></div>
        <div class="col">
    <div class="form-group">
        <form action="add_events.php" method="post">
            <label for=""><b>Event Name</b></label>
            <input type="text" name="event_name" id="" class="form-control" placeholder="Event Name" required><br>
            <label for=""><b>Date</b></label>
            <input type="date" name="date" id="" class="form-control" placeholder="Date" required><br>
            <label for=""><b>Time</b></label>
            <input type="time" name="time" id="" class="form-control" placeholder="Time" required><br>
            <label for=""><b>Price</b></label>
            <input type="number" name="price" id="" class="form-control" placeholder="Price" required><br>
            <label for=""><b>Location</b></label>
            <input type="text" name="location" id="" class="form-control" placeholder="Location" required><br>
            <label for=""><b>Information</b></label><br>
            <textarea name="info" id="" cols="60" rows="5" required></textarea><br><br>
            <input type="submit">
            <input type="reset">
      </form>
    </div>
    </div>
    <div class="col"></div>
    </div><br><br><br><br>
    <footer class="bg-dark text-muted text-center fixed-bottom">
        <p>Khelo Smart @ 2022. &copy; Copyrights  : Anurag</p>
    </footer>
    </body>
</html>
