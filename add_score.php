<!DOCTYPE html>
<html lang="en">
    <style>
        
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
    <title>Add scores</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="images/logo.jpg" alt="logo" width="300" height="150">
            
        </div>
        <nav class="main-menu">
            <ul>
                <li><a href="mainPage.html">Home</a></li>
                <li>
                    <a href="#">Player</a>
                    <!--<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/resources/v4.20.1/i/svg-output/icons.svg#icn-chevron-down">
                        <svg xmlns="http://www.w3.org/2000/svg" id="icn-chevron-down" viewBox="0 0 11 5" xml:space="preserve"><path class="acst0" d="M5.5 5l.5-.3L11 1l-.9-1-4.6 3.4L.9 0 0 .9l5 3.7.5.4z"></path></svg>
                    </use>-->
                    <ul class="drop">
                        <li><a href="addplayer.php">Add player</a></li>
                        <li><a href="updateplayer.php">update player</a></li>
                        <li><a href="deleteplayer.php">Delete player</a></li>
                        <li><a href="displayPlayer.php">Display player</a></li>    
                    </ul>
                </li>
                <li>
                    <a href="#">Schedule</a>
                    <ul class="drop">
                        
                        <li><a href="addschedule.php">Add Schedule</a></li>
                        
                        <li><a href="deleteschedule.php">Update/Delete Schedule</a></li>
                        <li><a href="schedule.php">Display Schedule</a></li>    
                    </ul>
                </li>
                <li>
                    <a href="#">Stadium</a>
                    <ul class="drop">
                        
                        <li><a href="addground.php">Add Stadium</a></li>
                        <li><a href="updateground.php">Update/Delete Stadium</a></li>  
                        
                    </ul>
                </li>
                <li>
                    <a href="#">Ranking</a>
                    <ul class="drop">
                        <li><a href="team_rating.php">Team Ranking</a></li>
                        <li><a href="baller_ranking.php">Bowler Ranking</a></li>
                        <li><a href="batsman_ranking.php">Batsman Ranking</a></li>
                        <li><a href="All_rounder.php">All rounder Ranking</a></li>
                    </ul>
                </li>
                <li><a href="team.php">Teams</a></li>
                <li>
                    <a href="#">Point</a>
                    <ul class="drop">
                        
                        <li><a href="addpoint.php">Add Point</a></li>
                        <li><a href="update_delete_points.php">update/delete Point</a></li>     
                    </ul>    
                </li>
                <li>
                    <a href="#">Sponser</a>
                    <ul class="drop">
                        
                        <li><a href="addsponser.php">Add Sponser</a></li>
                        <li><a href="update_delete_sponser.php">update/delete Sponser</a></li>
                    </ul>
                </li>
                <li>
                    <a href="addmatches_score.php">Matches</a>
                </li>
                <li>
                    <a href="displayresult.php">Result</a>
                </li>
                <li><a href="index.html">Logout</a></li>
            </ul>
        </nav>
        <div class="titles">
            <h1>Add scores</h1>
        </div>
        <div class="forms">
            <form  method="POST">
            <?php
                $con = mysqli_connect("localhost","root","","ipl") or die(mysqli_error($con));
                $id = $_GET['id'];
                if(isset($_POST['submit'])){
                    
                    
                    $team1_score = $_POST['team1_score'];
                    $team2_score = $_POST['team2_score'];
    
                    $city = $_POST['city'];
                    
                    
                    $query = "INSERT INTO `matches`(`city`, `schedules_id`, `team1_score`, `team2_score`) VALUES ('$city','$id','$team1_score','$team2_score')";

                    if(mysqli_query($con,$query)){
                        echo "";
                        echo "<script type='text/javascript'>alert('Score ADDED, NEW RECORD CREATED SUCCESSFULLY!!');</script>";
                        echo("<script>location.href = 'addmatches_score.php';</script>");
                    }
                    else{
                        echo "<script type='text/javascript'>alert('ERROR');</script>";
                        echo("<script>location.href = 'addmatches_score.php';</script>");
                            mysqli_error($con);
                    }
                }
                ?>
                <label for="team1_score">Enter the score of <?php
                $con = mysqli_connect("localhost","root","","ipl") or die(mysqli_error($con));
                $query = "select team1_select($id) as team from dual";
                $result = mysqli_query($con,$query);
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo 
                        $row['team'];      
                    }
                }
                

                ?></label>
                <input type="number" id="team1_score" name="team1_score"><br><br>
                <label for="team2_score">Enter the score of 
                <?php
                $con = mysqli_connect("localhost","root","","ipl") or die(mysqli_error($con));
                $query = "select team2_select($id) as team from dual";
                $result = mysqli_query($con,$query);
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo 
                        $row['team'];      
                    }
                }
                

                ?>
                </label>
                <input type="number" id="team2_score" name="team2_score"><br><br>

                <label for="city">Select city name: </label>
                <select name="city" id="city">
                <?php
                     $con = mysqli_connect("localhost", "root", "", "ipl") or die(mysqli_error($con));
                     $query = "select * from ground_details";
                     $result = mysqli_query($con,$query);
                     if(mysqli_num_rows($result)>0){
                         while($row = mysqli_fetch_assoc($result)){
                             echo 
                             "<option value=".$row['city'].">".$row['city']."</option>";      
                         }
                     }
                     mysqli_close($con);
                ?>
                </select>
                <input type="submit" value="Submit" name="submit">
            </form> 
        </div>
    </div>
</body>
</html>
