<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-image: linear-gradient(to right bottom, #2980b9, #3498db);
            font-family: Arial, sans-serif;
            color: #fff;
        }

        .container {
            margin-top: 60px;
            width: 50%;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 10px;
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            color: #333;
        }

        .btn-primary {
            border-radius: 20px;
            background-color: #2ecc71;
            border: none;
        }

        .btn-primary:hover {
            background-color: #27ae60;
        }

        .btn-danger {
            border-radius: 20px;
            background-color: #e74c3c;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c0392b;
        }

        .link {
            color: #fff;
        }

        .link:hover {
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h1 class="text-center" style="margin: 15px; color: #fff; font-weight: bold;">TYPHOON COURIER SERVICE</h1>
    <hr />
    <p class="text-center" style="color: #f39c12; font-weight: bold;">The Fastest Courier Service Ever</p>
    <div>
        <h5><a href="admin/adminlogin.php" style="float: right; margin-right: 40px; color: #fff;">AdminLogin</a></h5>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h2 class="text-center" style="color: #2980b9;">Login</h2>
                    <p class="text-center" style="color: #e84118;">Please Fill Your Details</p>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Enter Email Address" required />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Sign In" />
                            <button onclick="window.location.href='resetpswd.php'" class="btn btn-danger btn-block" style="cursor: pointer;">Reset Password</button>
                        </div>
                        <p class="text-center" style="color: #e84118;">Don't have an account? <a href="register.php" class="link">Register here</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
