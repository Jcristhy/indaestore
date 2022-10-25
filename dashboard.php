<?php
 
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{

?>

<!--DASHBOARD-->
<!--row begin-->
<div class="row">
    <!--col-lg-12 begin-->
    <div class="col-lg-12">
        <h1 class="page-header"> Dashboard </h1>

        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-tachometer-alt"></i> Dashboard
            </li>
        </ol>
    </div>
    <!--col-lg-12 finish-->
</div>
<!--row finish-->

<!--row begin DASHBOARD ICON-->
<div class="row">

    <!--col-lg-3 col-md-6 begin PART 1-->
    <div class="col-lg-3 col-md-6">

        <!--panel panel-primary begin-->
        <div class="panel panel-primary">

            <!--panel-header begin-->
            <div class="panel-heading">

                <!--row begin-->
                <div class="row">

                    <!--col-xs-3 begin-->
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <!--col-xs-3 finish-->

                    <!--col-xs-9 text-right begin-->
                    <div class="col-xs-9 text-right">

                        <!--huge begin-->
                        <div class="huge"> <?php echo $count_products; ?> </div>
                        <!--huge finish-->

                        <div> Products </div>

                    </div>
                    <!--col-xs-9 text-right finish-->

                </div>
                <!--row finish-->

            </div>
            <!--panel-header finish-->

            <a href="index.php?view_products">
                <!--panel-footerbegin-->
                <div class="panel-footer">
                    <span class="pull-left">
                        View Details
                    </span>

                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>

                    <div class="clearfix"></div>
                </div>
                <!--panel-footer finish-->
            </a>

        </div>
        <!--panel panel-primary finish-->

    </div>
    <!--col-lg-3 col-md-6 finish-->

    <!--col-lg-3 col-md-6 PART 2 begin-->
    <div class="col-lg-3 col-md-6">

        <!--panel panel-green begin-->
        <div class="panel panel-green">

            <!--panel-header begin-->
            <div class="panel-heading">

                <!--row begin-->
                <div class="row">

                    <!--col-xs-3 begin-->
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <!--col-xs-3 finish-->

                    <!--col-xs-9 text-right begin-->
                    <div class="col-xs-9 text-right">

                        <!--huge begin-->
                        <div class="huge"> <?php echo $count_customers; ?> </div>
                        <!--huge finish-->

                        <div> Customers </div>

                    </div>
                    <!--col-xs-9 text-right finish-->

                </div>
                <!--row finish-->

            </div>
            <!--panel-header finish-->

            <a href="index.php?view_customers">
                <!--panel-footerbegin-->
                <div class="panel-footer">
                    <span class="pull-left">
                        View Details
                    </span>

                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>

                    <div class="clearfix"></div>
                </div>
                <!--panel-footer finish-->
            </a>

        </div>
        <!--panel panel-green finish-->

    </div>
    <!--col-lg-3 col-md-6 finish-->

    <!--col-lg-3 col-md-6 PART 3 begin-->
    <div class="col-lg-3 col-md-6">

        <!--panel panel-yellow begin-->
        <div class="panel panel-orange">

            <!--panel-header begin-->
            <div class="panel-heading">

                <!--row begin-->
                <div class="row">

                    <!--col-xs-3 begin-->
                    <div class="col-xs-3">
                        <i class="fa fa-tags fa-5x"></i>
                    </div>
                    <!--col-xs-3 finish-->

                    <!--col-xs-9 text-right begin-->
                    <div class="col-xs-9 text-right">

                        <!--huge begin-->
                        <div class="huge"> <?php echo $count_product_categories; ?> </div>
                        <!--huge finish-->

                        <div> Product Categories </div>

                    </div>
                    <!--col-xs-9 text-right finish-->

                </div>
                <!--row finish-->

            </div>
            <!--panel-header finish-->

            <a href="index.php?view_product_categories">
                <!--panel-footerbegin-->
                <div class="panel-footer">
                    <span class="pull-left">
                        View Details
                    </span>

                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>

                    <div class="clearfix"></div>
                </div>
                <!--panel-footer finish-->
            </a>

        </div>
        <!--panel panel-yellow finish-->

    </div>
    <!--col-lg-3 col-md-6 finish-->

    <!--col-lg-3 col-md-6 PART 4 begin-->
    <div class="col-lg-3 col-md-6">

        <!--panel panel-red begin-->
        <div class="panel panel-red">

            <!--panel-header begin-->
            <div class="panel-heading">

                <!--row begin-->
                <div class="row">

                    <!--col-xs-3 begin-->
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <!--col-xs-3 finish-->

                    <!--col-xs-9 text-right begin-->
                    <div class="col-xs-9 text-right">

                        <!--huge begin-->
                        <div class="huge"> <?php echo $count_pending_orders; ?> </div>
                        <!--huge finish-->

                        <div> Orders </div>

                    </div>
                    <!--col-xs-9 text-right finish-->

                </div>
                <!--row finish-->

            </div>
            <!--panel-header finish-->

            <a href="index.php?view_orders">
                <!--panel-footerbegin-->
                <div class="panel-footer">
                    <span class="pull-left">
                        View Details
                    </span>

                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>

                    <div class="clearfix"></div>
                </div>
                <!--panel-footer finish-->
            </a>

        </div>
        <!--panel panel-red finish-->

    </div>
    <!--col-lg-3 col-md-6 finish-->

</div>
<!--row finish-->

<!--row begin-->
<div class="row">

    <!--col-lg-8 begin-->
    <div class="col-lg-8">

        <!--panel panel-primary begin-->
        <div class="panel panel-primary">

            <!--panel-heading begin-->
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money-check fa-fw"></i> New Orders
                </h3>
            </div>
            <!--panel-heading finish-->

            <!--panel-body begin-->
            <div class="panel-body">
                <!--table-responsive begin-->
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th> Order no: </th>
                                <th> Customer Email: </th>
                                <th> Invoice no: </th>
                                <th> Product ID: </th>
                                <th> Product QTY: </th>
                                <th> Product Size: </th>
                                <th> Status: </th>
                            </tr>

                        </thead>

                        <tbody>
                            <?php
                                $i=0;

                                $get_order = "select * from pending_orders order by 1 DESC LIMIT 0,5";

                                $run_order = mysqli_query($con, $get_order);

                                while($row_order=mysqli_fetch_array($run_order)){
                                    $order_id = $row_order['order_id'];

                                    $customer_id = $row_order['cust_id'];

                                    $invoice_no = $row_order['invoice_no'];

                                    $product_id = $row_order['product_id'];

                                    $qty = $row_order['qty'];

                                    $size = $row_order['size'];

                                    $order_status = $row_order['order_status'];

                                    $i++;

                                
                            ?>
                            <tr>
                                <td> <?php echo $order_id; ?> </td>
                                <td>
                                    <?php
                                        $get_customer = "select * from customers where cust_id = '$customer_id'";

                                        $run_customer = mysqli_query($con, $get_customer);

                                        $row_customer = mysqli_fetch_array($run_customer);

                                        $customer_email = $row_customer['cust_email'];

                                        echo $customer_email;
                                    ?>
                                </td>
                                <td> <?php echo $invoice_no; ?> </td>
                                <td> <?php echo $product_id; ?> </td>
                                <td> <?php echo $qty; ?> </td>
                                <td> <?php echo $size; ?> </td>
                                <td>
                                    <?php
                                        if($order_status=='Pending'){
                                            echo $order_status='Pending';
                                        }
                                        else{
                                            echo $order_status='Complete';
                                        }
                                    ?>
                                </td>
                            </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!--table-responsive finish-->

                <!--text-right begin-->
                <div class="text-right">
                    <a href="index.php?view_orders">
                        View All Orders <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
                <!--text-right finish-->
            </div>
            <!--panel-body finish-->

        </div>
        <!--panel panel-primary finish-->

    </div>
    <!--col-lg-8 finish-->

    <!--col-md-4 begin-->
    <div class="col-md-4">

        <!--panel begin-->
        <div class="panel">

            <!--panel-body begin-->
            <div class="panel-body">

                <!--ADMIN PROFILE-->
                <!--mb-md thumb-info begin-->
                <div class="mb-md thumb-info">
                    <img src="admin_images/<?php echo $admin_image; ?>" alt="admin-thumb-info" class="rounded img-responsive">

                    <!--thumb-info-title begin-->
                    <div class="thumb-info-title">
                        <span class="thumb-info-inner"> <?php echo $admin_name; ?> </span>
                        <span class="thumb-info-type"> <?php echo $admin_job; ?> </span>
                    </div>
                    <!--thumb-info-title finish-->

                </div>
                <!--mb-md thumb-info finish-->

            </div>
            <!--panel-body finish-->

            <!--mb-md begin-->
            <div class="mb-md">
                <!--widget-content-expanded begin-->
                <div class="widget-content-expanded">
                    <i class="fa fa-user"></i> <span> Email: </span> <?php echo $admin_email; ?> <br/>
                    <i class="fa fa-flag"></i> <span> Country: </span> <?php echo $admin_country; ?> <br/>
                    <i class="fa fa-envelope"></i> <span> Contact: </span> <?php echo $admin_contact; ?> <br/>
                </div>
                <!--widget-content-expanded finish-->

                <hr class="dotted short">

                <h5 class="text-muted"> About Us </h5>

                <p>
                    <?php echo $admin_about; ?>
                </p>
            </div>
            <!--mb-md finish-->

        </div>
        <!--panel finish-->

    </div>
    <!--col-md-4 finish-->

</div>
<!--row finish-->

<?php } ?>