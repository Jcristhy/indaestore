<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
        
?>

<?php
    if(isset($_GET['delete_users'])){
        $delete_users_id = $_GET['delete_users'];

        $delete_users = "delete from admins where admin_id='$delete_users_id'";

        $run_delete = mysqli_query($con, $delete_users);

        if($run_delete){
            echo "<script>alert('Admins user has been deleted successfully')</script>";

            echo "<script>window.open('index.php?view_users','_self')</script>";
        }

    }
?>

<?php } ?>