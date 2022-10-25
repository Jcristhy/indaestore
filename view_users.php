<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
        
?>

<!--ROW BEGIN-->
<div class="row">
    <!--col-lg-12 BEGIN-->
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-tachometer-alt"></i> Dashboard / View Users
            </li>
        </ol>
    </div>
    <!--col-lg-12 FINISH-->
</div>
<!--ROW FINISH-->

<!--ROW BEGIN-->
<div class="row">
    <!--col-lg-12 BEGIN-->
    <div class="col-lg-12">
        <!--panel panel-default BEGIN-->
        <div class="panel panel-default">
            <!--panel-heading BEGIN-->
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-tags"></i> View Users
                </h3>
            </div>
            <!--panel-heading FINISH-->

            <!--panel-body BEGIN-->
            <div class="panel-body">
                <!--table-responsive BEGIN-->
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> User Name </th>
                                <th> User Image </th>
                                <th> User E-Mail </th>
                                <th> User Country </th>
                                <th> User Job </th>
                                <th> User Contact </th>
                                <th> Edit </th>
                                <th> Delete </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $i=0;

                                $get_users = "select * from admins";

                                $run_users = mysqli_query($con,$get_users);

                                while($row_users=mysqli_fetch_array($run_users)){
                                    $users_id = $row_users['admin_id'];

                                    $users_name = $row_users['admin_name'];

                                    $users_image = $row_users['admin_image'];

                                    $users_email = $row_users['admin_email'];
                                    
                                    $users_country = $row_users['admin_country'];

                                    $users_job = $row_users['admin_job'];

                                    $users_contact = $row_users['admin_contact'];

                                    $i++;
                                
                            ?>

                            <tr>
                                <td><?php echo $i; ?></td>

                                <td><?php echo $users_name; ?></td>

                                <td><img src="../admin_area/admin_images/<?php echo $users_image; ?>" width="60" height="60"></td>

                                <td><?php echo $users_email; ?></td>

                                <td><?php echo $users_country; ?></td>

                                <td><?php echo $users_job; ?></td>

                                <td><?php echo $users_contact; ?></td>

                                <td>
                                    <a href="index.php?user_profile=<?php echo $users_id; ?>">
                                        <i class="far fa-edit"></i> Edit
                                    </a>
                                </td>

                                <td>
                                    <a href="index.php?delete_users=<?php echo $users_id; ?>">
                                        <i class="far fa-trash-alt"></i> Delete
                                    </a>
                                </td>
                            </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!--table-responsive FINISH-->
            </div>
            <!--panel-body FINISH-->
        </div>
        <!--panel panel-default FINISH->
    </div>
    <!--col-lg-12 FINISH-->
</div>
<!--ROW BEGIN-->

<?php } ?>