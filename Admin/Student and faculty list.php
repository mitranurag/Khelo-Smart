<?php 
$host = "localhost";
$user = "root";
$pwd = "";
$db = "cmba";
$conn = new mysqli($host,$user,$pwd,$db);
$select= "SELECT  `sl_no`, `student_id`, `student_name`, `email`, `contact`, `password`, `age`, `gender`, `address`, `time_from`, `time_upto`, `date`, `status` FROM `student_authentication` ";
$select1="SELECT `sl_no`, `trainer_id`, `trainer_name`, `email`, `contact`, `password`, `experience`, `gender`, `type`, `date`, `status` FROM `trainer_authentication` ";
$result = $conn->query($select);
$result1 = $conn->query($select1);
?>
<!--HTML SECTION-->
<!DOCTYPE html>
<html>
    <head>
        <title>Student-Faculty List</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
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
        <h3 class="display-3">Student and Faculty List</h3>
    </div>
    <br>
        <div class="container">
            <h4 class="display-6 text-center">Student List</h4>
        </div>
    <table class="table table-hover table-success " style="text-align: center;">
        <thead class="thead-inverse table-dark">
            <tr>
                <th>S.No.</th>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Address</th>
                <th>Parent Contact No.</th>
                <th>Timing From</th>
                <th>Timing Upto</th>
                <th>Amount Paid</th>
                <th>Date</th>
                <!--<th>Add</th>-->
                <th>Remove</th>
            </tr>
            </thead>
           <tbody>

           <?php 
           if($result->num_rows>0){
             while($row=$result->fetch_assoc()){
                $accessID = $row['student_id'];
                if($row['status'] == 1){
           ?>
                <tr>
                    <td><?php echo $row['sl_no']?></td>
                    <td><?php echo $row['student_id']?></td>
                    <td><?php echo $row['student_name']?></td>
                    <td><?php echo $row['address']?></td>
                    <td><?php echo $row['contact']?></td>
                    <td><?php echo $row['time_from']?></td>
                    <td><?php echo $row['time_upto']?></td>
                    <td>Soon..</td>
                    <td><?php echo $row['date']?></td>
                    <!--<td><i class="fa fa-check"></i></td>-->
                    <td><a href="../remove.php?accessID=<?php echo $accessID; ?>&type=student"><i class="fa fa-close"></i></a></td>
                </tr>
                <?php 
                }
                 }
                }
                ?>
            </tbody>
    </table>
<br>
<div class="container">
    <h4 class="display-6 text-center">Faculty List</h4>
</div>
<table class="table table-hover table-success " style="text-align: center;">
<thead class="thead-inverse table-dark">
    <tr>
        <th>S.No.</th>
        <th>Trainer ID</th>
        <th>Trainer Name</th>
        <th>Contact No.</th>
        <th>Date</th>
        <!--<th>Add</th>-->
        <th>Remove</th>
    </tr>
    </thead>
    <?php 
           if($result1->num_rows>0){
             while($row=$result1->fetch_assoc()){
                $accessID = $row['trainer_id'];
                if($row['status'] == 1){
                
           ?>
   <tbody>
        <tr>
            <td><?php echo $row['sl_no']?></td>
            <td><?php echo $row['trainer_id']?></td>
            <td><?php echo $row['trainer_name']?></td>
            <td><?php echo $row['contact']?></td>
            <td><?php echo $row['date']?></td>
            <!--<td><i class="fa fa-check"></i></td>-->
            <td><a href="../remove.php?accessID=<?php echo $accessID; ?>&type=trainer"><i class="fa fa-close"></i></a></td>
        </tr>
        <?php 
                 }
                }
                }
                ?>
       
    </tbody>
</table>
<div class="row">
    <div class="col text-right" style="padding-right:50px ;">
<button type="button" style="border:transparent; background-color: transparent;"><a href="#top"><img src="../img/icons8-slide-up-100.png" width="40px" height="40px"> </a></button>
</div></div>
<br><br><br>
    <footer class="bg-dark text-muted text-center fixed-bottom">
        <p>Khelo Smart @ 2022. &copy; Copyrights : Anurag</p>
    </footer>
    </body>
</html>