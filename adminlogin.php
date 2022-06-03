<?php

    session_start();

    $con = mysqli_connect("localhost", "root", "", "ipl") or die(mysqli_error($con));

    $admin_name = $_POST['aname'];
    $admin_pass = $_POST['a_psw'];

    $check_a = "select * from admin where admin_name ='$admin_name'";
    $res_u = mysqli_query($con,$check_a) or die(mysqli_error($con));
    $check_p = "select * from admin where admin_name = '$admin_name' and admin_pass = '$admin_pass'";
    $res_p = mysqli_query($con,$check_p) or die(mysqli_error($con));

    
    


    if(mysqli_num_rows($res_u)==0)
    {
      echo "<script type='text/javascript'>alert('Incorrect adminname!!');</script>";
      header("refresh: 0.01; url=index.html");
    }

    if(mysqli_num_rows($res_p)==0)
    {
      echo "<script type='text/javascript'>alert('Incorrect password!!');</script>";
      header("refresh: 0.01; url=index.html");
    }

    else
    {
     // echo "<script type='text/javascript'>alert('Logged in successfully!!');</script>";
      header("refresh: 0.01; url=mainPage.html");
      
    }

?>



<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        
        body,
        html {
            height: 100%;
            margin: 0;
        }        
        p.inset {
            border-style: groove;
        }
        /* Full-width input fields */
        
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        /* Set a style for all buttons */
        
        button {
            background-color: #4CAF50;
            color: white;
            padding: 15px 30px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        
        button:hover {
            opacity: 1.0;
        }
        /* Extra styles for the cancel button */
        
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }
        /* Center the image and position the close button */
        
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }
        
        img.avatar {
            width: 40%;
            border-radius: 50%;
        }
        
        .container {
            padding: 16px;
        }
        
        span.psw {
            float: right;
            padding-top: 16px;
        }
        /* The Modal (background) */
        
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 60px;
        }
        /* Modal Content/Box */
        
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 60%;
            /* Could be more or less, depending on screen size */
        }
        /* The Close Button (x) */
        
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }
        /* Add Zoom Animation */
        
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }
        
        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }
            to {
                -webkit-transform: scale(1)
            }
        }
        
        @keyframes animatezoom {
            from {
                transform: scale(0)
            }
            to {
                transform: scale(1)
            }
        }
        /* Change styles for span and cancel button on extra small screens */
        
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
        
        .container {
            position: relative;
            text-align: center;
            color: white;
            height: 100%;
        }
        
        .centered {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        h2 {
            text-align: center;
        }
        
        .buttons:hover,
        .operator:hover {
            background-color: #f08080;
            transition-duration: 0.5s;
            transform-style: unset;
            text-transform: capitalize;
        }
        
        .buttons,
        .cancelbtn {
            border: 0px;
            border-radius: 25px;
        }
        
        .cancelbtn:hover {
            background-color: #4CAF50;
            transition-duration: 0.5s;
            transform-style: unset;
            text-transform: capitalize;
        }
        
        .buttons:active .cancelbtn:active {
            font-size: 30px;
        }
    </style>

</head>

<body>

    <div class="container">
        <img class="img" src="images/ipl_v1.jpeg" alt="IPL" style="height:100%;" width="100%">
        <div class="centered">
            <h1 class="text " style="font-family:'Courier New', Courier, monospace;">IPL 2020 </h1>
            <button class="buttons" onclick="document.getElementById('id02').style.display='block'" style="width:auto;"> Admin Login</button>
            <button class="buttons" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> User Login</button>
            <br>
            <br>
            <br>
            
            <button class="buttons" onclick=" document.getElementById('02').style.display='block'" style="width:auto;">Don't have an account</button>
        </div>
    </div>

    <div id="id01" class="modal">

        <form class="modal-content animate" action="userlogin.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="images/ipl_v2.jpeg" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button class="buttons" type="submit">Login</button>
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
        </form>
    </div>
    <div id="id02" class="modal">

        <form class="modal-content animate" action="adminlogin.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="images/ipl_v2.jpeg" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="aname"><b>Adminname</b></label>
                <input type="text" placeholder="Enter Adminname" name="aname" required>

                <label for="a_psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="a_psw" required>

                <button class="buttons" type="submit">Login</button>
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
        </form>
    </div>

    <div id="02" class="modal">
      <form action="createuser.php" style="border:1px solid #ccc" class="modal-content animate">
        <div class="imgcontainer">
          <span onclick="document.getElementById('02').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="images/ipl_v2.jpeg" alt="Avatar" class="avatar">
        </div>
          <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
        
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
        
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
        
            <label for="psw-repeat"><b>Confirm Password</b></label>
            <input type="password" placeholder="Confirm Password" name="psw-repeat" required>
            <div class="clearfix">
              <button type="submit" class="signupbtn" class="signup">Sign Up</button>
              <button type="button" class="cancelbtn" onclick="document.getElementById('02').style.display='none'" class="cancelbtn">Cancel</button>
              
            </div>
          </div>
        </form>
  </div>
    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        var modal1 = document.getElementById('02');
        window.onclick = function(event) {
            if (event.target == modal1) {
                modal.style.display = "none";
            }
        }
    </script>

</body>

</html>