<?php
$con = mysqli_connect("localhost","root","","ipl") or die(mysqli_error($con));

$id = $_GET['id'];

$query = "DELETE FROM `team_table` WHERE `team_name`='$id'";

if(mysqli_query($con,$query)){
    echo "";
    echo "<script type='text/javascript'>alert('TEAM DELETED SUCCESSFULLY!!!');</script>";
    header("refresh: 0.01; url=team.php");
}

else{
    echo "<script type='text/javascript'>alert('ERROR');</script>";
    //header("refresh: 0.01; url=team.php");
echo mysqli_error($con);
}