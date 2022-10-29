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
        <title>Admin Home</title>
        <link rel="stylesheet" href="../css/bootstrap.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger">
        <a class="navbar-brand" href="#" style="color:chartreuse">Khelo Smart</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#modelId">
          Logout
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Are you sure to logout ?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                        <a href="../index.html">
                        <button type="button" class="btn btn-primary">Yes</button></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="jumbotron text-center">
        <h1 class="display-3">Admin Homepage</h1>
    </div>
    <br>
    <!--1st row-->
    <div class="row">
      <div class="col-xl-4" >
        <div class="card bg-light text-center">    
            <a href="Profile.php">
                <img class="card-img-top" src="../img/admin_icon.svg" alt="" width="100px" height="100px"></a>
                 <div class="card-body" style="color:saddlebrown; ">
                    <h4 class="card-title">Profile</h4>
                </div>
            </div>
         </div>
        <div class="col-xl-4">
            <div class="card bg-light text-center">
                <a href="Add events.php">
                <img class="card-img-top" src="../img/add_events_icon.svg" alt="" width="100px" height="100px"></a>
                    <div class="card-body" style="color:saddlebrown;">
                        <h4 class="card-title">Add Events</h4>
                     </div>
            </div>
         </div>
      <div class="col-xl-4">
            <div class="card bg-light text-center">
                <a href="Notification.php">
                <img class="card-img-top" src="../img/notification_icon.svg" alt="" width="100px" height="100px"></a>
                    <div class="card-body" style="color:saddlebrown;">
                        <h4 class="card-title">Notification</h4>
                    </div>
            </div>
        </div>
    </div><br>
    <!--2nd Row-->
    <div class="row">
        <div class="col-xl-4" >
              <div class="card bg-light text-center">
                <a href="Student and faculty list.php">
                <img class="card-img-top" src="../img/list_icon.svg" alt="" width="100px" height="100px"></a>
                   <div class="card-body" style="color:saddlebrown;">
                      <h4 class="card-title">Student and Faculty List</h4>
                  </div>
              </div>
           </div>
          <div class="col-xl-4">
              <div class="card bg-light text-center">
                <a href="Approval.php">
                <img class="card-img-top" src="../img/approve_icon.svg" alt="" width="100px" height="100px"></a>
                      <div class="card-body" style="color:saddlebrown;">
                          <h4 class="card-title">Approval</h4>
                       </div>
              </div>
           </div>
        <div class="col-xl-4">
              <div class="card bg-light text-center">
                <a href="Payment history.php">
                <img class="card-img-top" src="../img/pay_hist_icon.svg" alt="" width="100px" height="100px"></a>
                      <div class="card-body" style="color:saddlebrown;">
                          <h4 class="card-title">Payment History</h4>
                      </div>
              </div>
          </div>
      </div><br>
<!--3rd row-->
<div class="row">
    <div class="col-xl-2"></div>
    <div class="col-xl-8">
          <div class="card bg-light text-center">
            <a href="Student performance.php">
            <img class="card-img-top" src="../img/perf_icon.svg" alt="" width="100px" height="100px"></a>
                  <div class="card-body" style="color:saddlebrown;">
                      <h4 class="card-title">Student Performance</h4>
                  </div></a>
          </div>
      </div>
      <div class="col-xl-2"></div>
  </div>
    <br><br>
    <footer class="bg-dark text-muted text-center fixed-bottom">
        <p>Khelo Smart @ 2022. &copy; Copyrights : Anurag</p>
    </footer>
    </body>
</html>
