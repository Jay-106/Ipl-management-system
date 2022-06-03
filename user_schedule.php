<!DOCTYPE html>
<html lang="en">
<style>
    table{
        table-layout: fixed;
        width: 100%;
        border-collapse: collapse;
        border: 3px solid black;
    }
    thead th{
        padding: 15px;
        font-size: 1.6em; 
    }
    tbody th{
        padding: 10px;
        font-size: medium;
    }
    thead{
        background-color: chocolate;   
    }
    
    tbody{
        background-color: yellow;
    }
    .titles{
        padding: 15px;
        margin-top: 5px;
        background-color: rgb(19, 19, 160);
        margin-bottom: 5px;
    }
    .titles h1{
        color: white;
    }
    .indschedule h3{

        font-size: 1.6rem;
        font-style: italic;
        padding: 2rem 0 1rem;
        margin-bottom: 1rem;

    }
    .data{
        margin-bottom: 4rem;
        background: #fff;
        box-shadow: 0 2px 4px 0 rgb(0 0 0 / 20%);
        padding: 10px;
    }
    .teams{
        width:80%;
        display: inline-block;
    }
    .clearfix{
        clear: both;
    }
    .matchno{
        width:20%;
        display: inline-block;
        
    }
    .matchno p{
        
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/adminHome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Schedule page</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="images/logo.jpg" alt="logo" width="300" height="150">
            
        </div>
        <nav class="main-menu">
            <ul>
                <li><a href="userpage.html">Home</a></li>
                <li>
                   
                    <a href="user_player.php">Players</a>
                    <!--<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/resources/v4.20.1/i/svg-output/icons.svg#icn-chevron-down">
                        <svg xmlns="http://www.w3.org/2000/svg" id="icn-chevron-down" viewBox="0 0 11 5" xml:space="preserve"><path class="acst0" d="M5.5 5l.5-.3L11 1l-.9-1-4.6 3.4L.9 0 0 .9l5 3.7.5.4z"></path></svg>
                    </use>-->
                </li>
                <li>
                    <a href="user_schedule.php">Schedule</a>
                </li>
                <li>
                    <a href="user_stadium.php">Stadium</a>
                </li>
                <li>
                    <a href="">Ranking</a>
                    <ul class="drop">
                        <li><a href="user_team_rating.php">Team Ranking</a></li>
                        <li><a href="user_baller_ranking.php">Bowler Ranking</a></li>
                        <li><a href="user_batsman_ranking.php">Batsman Ranking</a></li>
                        <li><a href="user_All_rounder.php">All rounder Ranking</a></li>
                    </ul>
                </li>
                <li><a href="user_team.php">Teams</a></li>
                <li>
                    <a href="user_points.php">Point</a>
                      
                </li>
                <li>
                    <a href="user_sponsor.php">Sponser</a>
                    
                </li>
                <li>
                    <a href="user_result.php">Result</a>
                </li>
                <li><a href="index.html">LogOut</a></li>
                
            </ul>
        </nav>
        <div class="titles">
            <h1>Schedule</h1>
        </div>
        <table>
            <thead>
                
            </thead>
            <tbody>
                <?php
                    $con = mysqli_connect("localhost", "root", "", "ipl") or die(mysqli_error($con));
                    $query = "select DATE_FORMAT(date,'%a,%dth %M %y'),team1,team2,match_no from schedules order by schedules.date";
                    $result = mysqli_query($con,$query);
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<div class='indschedule'><h3>".$row["DATE_FORMAT(date,'%a,%dth %M %y')"]."</h3><div class='data'><div class='teams'><h2>"
                                .$row["team1"]." v/s ".$row["team2"]."</h2></div><div class='match_no'><p>Match: ".$row["match_no"]."</p></div></div></div>";
                        }
                    }
                    mysqli_close($con);
                ?>
            </tbody>
        </table>


    </div>
    
</body>
</html>