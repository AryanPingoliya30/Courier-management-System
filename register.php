<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('images/brr.png');
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.3);
        }
        h2 {
            color: green;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: red;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #d63031;
        }
        p {
            text-align: center;
            margin-top: 20px;
        }
        p a {
            color: red;
            text-decoration: none;
        }
        p a:hover {
            text-decoration: underline;
        }
        .notice {
            margin-top: 20px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <p>Please fill this form to create an account.</p>
        <!-- <?php echo $success; ?>
        <?php echo $error; ?> -->
        <form action="" method="post">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Phone Num.</label>
                <input type="number" name="ph" class="form-control" required>
            </div>    
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" class="form-control" required />
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-danger" value="Register">
            </div>
            <p>Already have an account? <a href="index.php">Login here</a>.</p>
        </form>
        <hr>
        <p class="notice">Notice: If the email Id is registered before, it will not respond. In this case, reset your password or register with a different email Id.</p>
    </div>    
</body>
</html>
