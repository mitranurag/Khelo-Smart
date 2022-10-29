<?php
SESSION_start();
{
    $_SESSION['username'] = $username ;
header("Location:Admin.php");
}
?>
