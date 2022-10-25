<?php
    session_start();
    include("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IND.A & CO SHOP Dashboard</title>
    
    <!--BOOTSTRAP-->
    <link rel ="stylesheet" href="styles/bootstrap-337.min.css">

    <!--CSS STYLE-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login1.css">

    <!--ICON STYLE-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel ="stylesheet" href="font-awsome/css/font-awesome.min.css">
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
            
            <h2 class="form-login-heading"> Forget Password? </h2><br>

            <input type="text" class="form-control" placeholder="Email" name="admin_email" required>

            <input type="text" class="form-control" placeholder="New Password" name="admin_password" required>

            <button type="submit" class="btn btn-lg btn-primary btn-block" name="submit">
                <i class="fas fa-key"></i> Change Password
            </button>

            <hr>
            <center>
                <a href="login.php">
                    <h4>Back to Login </h4>
                </a>
            </center>

        </form>
    </div>
    <!--container finish-->
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        if(mysqli_query($con, "UPDATE admins SET admin_password='$_POST[admin_password]'
        WHERE admin_email='$_POST[admin_email]'")){
            ?>
            <script type="text/javascript">
                alert("Password changed successfully, you may re-login now. Thank You")
            </script>
            <?php
        }
    }
?>