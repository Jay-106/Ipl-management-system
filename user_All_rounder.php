<!DOCTYPE html>
<html lang="en">
    <style>
        table{
            width:100%;
        }
        thead{
            font-size: large;
            font-weight: bold;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }    
        .forms{
            align-content: center;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
            padding: 60px;
        }
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}
        
        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        input[type=number], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        
        
        input[type=date], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type=submit]:hover {
            background-color: #45a049;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
        

    </style>
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/adminHome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>All rounder-ranking</title>
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
            <h1>All-rounder-ranking</h1>
        </div>
        <table>
            <thead>
                <tr>
                    <td>Rank</td>
                    <td>Player Name</td>
                    <td>Team Name</td>
                    <td>Runs</td>
                    <td>Wickets</td>
                </tr>
            </thead>
            <tbody>
            <?php
                $con=mysqli_connect("localhost","root","","ipl");
                
               
                $query = "CALL select_playerbyrole('All-rounder')";
                $result=mysqli_query($con,$query);
                $i=0;
                if(mysqli_num_rows($result)>0)
                {
                    while ($row=mysqli_fetch_assoc($result)) {

                        $i=$i+1;
                        $player_name = $row["player_name"];
                        $team_name = $row["team_name"];
                        $runs = $row["runs"];
                        $wicket=$row["wicket"];
                        echo
                        "<tr>
                        <td>".floor($i)."</td>
                        <td>".$row['player_name']."</td>
                        <td>".$row['team_name']."</td>
                        <td>".$row['runs']."</td>
                        <td>".$row['wicket']."</td>";
                    }
                    mysqli_close($con);
                }
            ?>
            </tbody>
        </table>
        
    </div>
</body>
</html>

