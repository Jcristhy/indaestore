<?php 
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
?>

<?php
    if(isset($_GET['user_profile'])){
        $edit_user = $_GET['user_profile'];

        $get_user = "select * from admins where admin_id='$edit_user'";

        $run_user = mysqli_query($con, $get_user);

        $row_user = mysqli_fetch_array($run_user);

        $user_id = $row_user['admin_id'];

        $user_name = $row_user['admin_name'];

        $user_email = $row_user['admin_email'];

        $user_pass = $row_user['admin_password'];

        $user_image = $row_user['admin_image'];

        $user_country = $row_user['admin_country'];

        $user_about = $row_user['admin_about'];

        $user_contact = $row_user['admin_contact'];

        $user_job = $row_user['admin_job'];
    }
?>

<!--row begin-->
<div class="row">
    <!--col-lg-12 begin-->
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fas fa-tachometer-alt"></i> Dashboard / Edit User
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
                    <i class="fa fa-user-plus"></i> Edit User
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
                            <input value="<?php echo $user_name; ?>" name = "admin_name" type="text" class="form-control" required>
                        </div>
                        <!--col-md-6 finish-->
                    </div>
                    <!--form-group finish-->

                    <!--form-group begin-->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> E-mail </label>

                        <!--col-md-6 begin-->
                        <div class="col-md-6">
                            <input value="<?php echo $user_email; ?>" name = "admin_email" type="text" class="form-control" required>
                        </div>
                        <!--col-md-6 finish-->
                    </div>
                    <!--form-group finish-->

                    <!--form-group begin-->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Password </label>

                        <!--col-md-6 begin-->
                        <div class="col-md-6">
                            <input value="<?php echo $user_pass; ?>" name = "admin_password" type="text" class="form-control" required>
                        </div>
                        <!--col-md-6 finish-->
                    </div>
                    <!--form-group finish-->

                    <!--form-group begin-->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Country </label>

                        <!--col-md-6 begin-->
                        <div class="col-md-6">
                            <input value="<?php echo $user_country; ?>" name = "admin_country" type="text" class="form-control" required>
                        </div>
                        <!--col-md-6 finish-->
                    </div>
                    <!--form-group finish-->

                    <!--form-group begin-->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Contact </label>

                        <!--col-md-6 begin-->
                        <div class="col-md-6">
                            <input value="<?php echo $user_contact; ?>" name = "admin_contact" type="text" class="form-control" required>
                        </div>
                        <!--col-md-6 finish-->
                    </div>
                    <!--form-group finish-->

                    <!--form-group begin-->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Job </label>

                        <!--col-md-6 begin-->
                        <div class="col-md-6">
                            <input value="<?php echo $user_job; ?>" name = "admin_job" type="text" class="form-control" required>
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

                            <img src="admin_images/<?php echo $admin_image; ?>" alt="<?php echo $admin_name; ?>" width="70" height="70">
                        </div>
                        <!--col-md-6 finish-->
                    </div>
                    <!--form-group finish-->

                    <!--form-group begin-->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> About </label>

                        <!--col-md-6 begin-->
                        <div class="col-md-6">
                            <textarea name="admin_about" class="form-control" rows="5"><?php echo $admin_about; ?></textarea>
                        </div>
                        <!--col-md-6 finish-->
                    </div>
                    <!--form-group finish-->

                    <!--form-group begin-->
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>

                        <!--col-md-6 begin-->
                        <div class="col-md-6">
                            <input name = "update" value = "Update User" type="submit" class="btn btn-primary form-control">
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
    if(isset($_POST['update'])){
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

        $update_user = "update admins set admin_name='$user_name', admin_email='$user_email', admin_password='$user_pass', admin_country='$user_country',
        admin_contact='$user_contact', admin_job='$user_job', admin_about='$user_about', admin_image='$user_image' where admin_id='$user_id'";

        $run_user = mysqli_query($con, $update_user);

        if($run_user){
            echo "<script>alert('Admins User has been updated successfully')</script>";

            echo "<script>window.open('login.php', '_self')</script>";

            session_destroy();
        }
    }
?>

<?php } ?>


