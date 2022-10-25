<?php
    session_start();
    include("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IND.A & CO SHOP Admin Panel</title>

    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">

    <!--CSS STYLE-->
    <link rel="stylesheet" href="css/login1.css">
    <link rel="stylesheet" href="css/style.css">

    <!--icon-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

    

</head>

<body>
    <div class="box" align="center">
        <img src="admin_images/indalogo1.png" class="img-responsive" width="125" height="125">
        
        <h2 >I N D. A & C O</h2>
    </div>

    <!--container begin-->
    <div class="container">
        <form action="" class="form-login" method="post">
            
            <h2 class="form-login-heading"> Admin Login </h2><br>

            <input type="text" class="form-control" placeholder="Email" name="admin_email" required>

            <input type="password" class="form-control" placeholder="Password" name="admin_password" required>

            <button type="submit" class="btn btn-lg btn-primary btn-block" name="admin_login">
                <i class="fas fa-sign-in-alt"></i> Login
            </button>

            <hr>

            <center>
                <a href="forget_pass.php">
                    <h4> Forget Password? </h4>
                </a>
            </center>

        </form>
    </div>
    <!--container finish-->

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>

</body>
</html>

<?php
    if(isset($_POST['admin_login'])){
        $admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);

        $admin_pass = mysqli_real_escape_string($con,$_POST['admin_password']);

        $get_admin = "select * from admins where admin_email='$admin_email' AND admin_password='$admin_pass'";

        $run_admin = mysqli_query($con,$get_admin);

        $count = mysqli_num_rows($run_admin);

        if($count==1){
            $_SESSION['admin_email']=$admin_email;

            echo "<script>alert('Logged in. Welcome Back')</script>";

            echo "<script>window.open('index.php?dashboard','_self')</script>";
        }
        else{
            echo "<script>alert('Email or Password is Wrong !')</script>";
        }
    }
?>