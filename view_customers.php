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
                <i class="fa fa-tachometer-alt"></i> Dashboard / View Customers
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
                    <i class="fa fa-tags"></i> View Customers
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
                                <th> Name </th>
                                <th> Profile Image </th>
                                <th> E-Mail </th>
                                <th> Country </th>
                                <th> State </th>
                                <th> Home Address </th>
                                <th> Contact Number </th>
                                <th> Delete </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $i=0;

                                $get_cust = "select * from customers";

                                $run_cust = mysqli_query($con,$get_cust);

                                while($row_cust=mysqli_fetch_array($run_cust)){
                                    $cust_id = $row_cust['cust_id'];

                                    $cust_name = $row_cust['cust_name'];

                                    $cust_image = $row_cust['cust_image'];

                                    $cust_email = $row_cust['cust_email'];
                                    
                                    $cust_country = $row_cust['cust_country'];

                                    $cust_city = $row_cust['cust_city'];

                                    $cust_address = $row_cust['cust_address'];

                                    $cust_contactnum = $row_cust['cust_contactnum'];

                                    $i++;
                                
                            ?>

                            <tr>
                                <td><?php echo $i; ?></td>

                                <td><?php echo $cust_name; ?></td>

                                <td><img src="../customer/customer_images/<?php echo $cust_image; ?>" width="60" height="60"></td>

                                <td><?php echo $cust_email; ?></td>

                                <td><?php echo $cust_country; ?></td>

                                <td><?php echo $cust_city; ?></td>

                                <td><?php echo $cust_address; ?></td>

                                <td><?php echo $cust_contactnum; ?></td>

                                <td>
                                    <a href="index.php?delete_customer=<?php echo $cust_id; ?>">
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