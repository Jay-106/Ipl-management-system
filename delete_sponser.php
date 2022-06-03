<?php
$con = mysqli_connect("localhost","root","","ipl") or die(mysqli_error($con));

$id = $_GET['id'];

$query = "DELETE FROM `sponsor` WHERE `sponser_id`='$id'";

if(mysqli_query($con,$query)){
    echo "";
    echo "<script type='text/javascript'>alert('SPONSOR DELETED SUCCESSFULLY!!!');</script>";
    header("refresh: 0.01; url=update_delete_sponser.php");
}

else{
    echo "<script type='text/javascript'>alert('ERROR');</script>";
    header("refresh: 0.01; url=update_delete_sponser.php");
mysqli_error($con);
}