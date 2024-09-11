<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Verify Details</title>
    <style>
        body {
            background-image: url('images/brr.png');
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 80px auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.3);
        }

        h1,
        h2 {
            color: green;
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            color: #273c75;
        }

        p {
            color: #e84118;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            font-size: 18px;
            color: #333;
        }

        input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #273c75;
            color: #fff;
            cursor: pointer;
            font-size: 18px;
        }

        input[type="submit"]:hover {
            background-color: #1e272e;
        }

        .text-center {
            text-align: center;
        }

        .text-blue {
            color: blue;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>The Broken Saint</h1>
        <hr>
        <h2>Verify Your Details</h2>
        <p>To Reset Your Password</p>
        <form action="resetpswd.php" method="get">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Verify">
            </div>
            <p>Don't have an account? <a href="register.php" class="text-blue">Register here</a>.</p>
        </form>
    </div>
</body>

</html>

<?php

require_once "dbconnection.php";
// require_once "session.php";

if (isset($_REQUEST['submit'])) {

    $email = $_REQUEST['email'];

    $qryy= "SELECT * FROM `login` WHERE `email`='$email'";
    $run= mysqli_query($dbcon,$qryy);
    $row= mysqli_num_rows($run);
    if($row < 1){
        ?>
        <script>alert("Opps! Email not matched..Try again or Create New One");
            window.open('resetpswd.php','_self');
        </script>   
    <?php
    }
    else{
        $data= mysqli_fetch_assoc($run);
        $id=$data['u_id'];
        session_start();
        $_SESSION['gid']=$id;
        
        ?>  
        <script>
            window.open('reset.php','_self');
        </script>
    <?php
    }
}
    
?>
