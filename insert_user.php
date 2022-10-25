<?php 
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
?>

<!--row begin-->
<div class="row">
    <!--col-lg-12 begin-->
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fas fa-tachometer-alt"></i> Dashboard / Insert User
            </li>
        </ol>
    </div>
    <!--col-lg-12 finish-->
</div>
<!--row finish-->

<!--row begin-->
<div class="row">
    <!--col-lg-12 begin-->
    <div class="col-lg-12">
        <!--panel panel-default begin-->
        <div class="panel panel-default">
            <!--INSERT USER-> <!--panel-heading begin-->
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-user-plus"></i> Insert User
                </h3>
            </div>
            <!--panel-heading finish-->

            <!--panel-body begin-->
            <div class="panel-body">
                <form method = "post" class="form-horizontal" enctype = "multipart/form-data">
                    <!--PRODUCT TITLE--> <!--form-group begin-->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Username </label>

                        <!--col-md-6 begin-->
                        <div class="col-md-6">
                            <input name = "admin_name" type="text" class="form-control" required>
                        </div>
                        <!--col-md-6 finish-->
                    </div>
                    <!--form-group finish-->

                    <!--form-group begin-->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> E-mail </label>

                        <!--col-md-6 begin-->
                        <div class="col-md-6">
                            <input name = "admin_email" type="text" class="form-control" required>
                        </div>
                        <!--col-md-6 finish-->
                    </div>
                    <!--form-group finish-->

                    <!--form-group begin-->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Password </label>

                        <!--col-md-6 begin-->
                        <div class="col-md-6">
                            <input name = "admin_password" type="password" class="form-control" required>
                        </div>
                        <!--col-md-6 finish-->
                    </div>
                    <!--form-group finish-->

                    <!--form-group begin-->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Country </label>

                        <!--col-md-6 begin-->
                        <div class="col-md-6">
                            <input name = "admin_country" type="text" class="form-control" required>
                        </div>
                        <!--col-md-6 finish-->
                    </div>
                    <!--form-group finish-->

                    <!--form-group begin-->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Contact </label>

                        <!--col-md-6 begin-->
                        <div class="col-md-6">
                            <input name = "admin_contact" type="text" class="form-control" required>
                        </div>
                        <!--col-md-6 finish-->
                    </div>
                    <!--form-group finish-->

                    <!--form-group begin-->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Job </label>

                        <!--col-md-6 begin-->
                        <div class="col-md-6">
                            <input name = "admin_job" type="text" class="form-control" required>
                        </div>
                        <!--col-md-6 finish-->
                    </div>
                    <!--form-group finish-->

                    <!--form-group begin-->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Profile Image </label>

                        <!--col-md-6 begin-->
                        <div class="col-md-6">
                            <input name = "admin_image" type="file" class="form-control" required>
                        </div>
                        <!--col-md-6 finish-->
                    </div>
                    <!--form-group finish-->

                    <!--form-group begin-->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> About </label>

                        <!--col-md-6 begin-->
                        <div class="col-md-6">
                            <textarea name="admin_about" class="form-control" rows="5"></textarea>
                        </div>
                        <!--col-md-6 finish-->
                    </div>
                    <!--form-group finish-->

                    <!--form-group begin-->
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>

                        <!--col-md-6 begin-->
                        <div class="col-md-6">
                            <input name = "submit" value = "Insert User" type="submit" class="btn btn-primary form-control">
                        </div>
                        <!--col-md-6 finish-->
                    </div>
                    <!--form-group finish-->
                </form>
            </div>
            <!--panel-body finish-->
        </div>
        <!--panel panel-default finish-->
    </div>
    <!--col-lg-12 finish-->
</div>
<!--row finish-->

<!--INSERT USER TO DATABASE AND POPUP MESSAGE-->
<?php 
    if(isset($_POST['submit'])){
        $user_name = $_POST['admin_name'];
        $user_email = $_POST['admin_email'];
        $user_pass = $_POST['admin_password'];
        $user_country = $_POST['admin_country'];
        $user_contact = $_POST['admin_contact'];
        $user_job = $_POST['admin_job'];
        $user_about = $_POST['admin_about'];

        $user_image = $_FILES['admin_image']['name'];

        $temp_admin_image = $_FILES['admin_image']['tmp_name'];

        move_uploaded_file($temp_admin_image,"admin_images/$user_image");

        $insert_user = "insert into admins (admin_name, admin_email, admin_password, admin_country, admin_contact, admin_job, admin_image, admin_about)
        values ('$user_name', '$user_email', '$user_pass', '$user_country', '$user_contact', '$user_job', '$user_image', '$user_about')";

        $run_user = mysqli_query($con, $insert_user);

        if($run_user){
            echo "<script>alert('New Admins User has been inserted successfully')</script>";

            echo "<script>window.open('index.php?view_users', '_self')</script>";
        }
    }
?>

<?php } ?>


