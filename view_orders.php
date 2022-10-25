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
                <i class="fa fa-tachometer-alt"></i> Dashboard / View Orders
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
                    <i class="fa fa-tags"></i> View Orders
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
                                <th> Customer Name </th>
                                <th> Invoice No </th>
                                <th> Product Name </th>
                                <th> Product Price </th>
                                <th> Quantity </th>
                                <th> Size </th>
                                <th> Order Date </th>
                                <th> Total Amount </th>
                                <th> Status </th>
                                <th> Delete </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $i=0;

                                $get_orders = "select * from pending_orders";

                                $run_orders = mysqli_query($con,$get_orders);

                                while($row_orders=mysqli_fetch_array($run_orders)){
                                    $order_id = $row_orders['order_id'];

                                    $cust_id = $row_orders['cust_id'];

                                    $invoice_no = $row_orders['invoice_no'];

                                    $pro_id = $row_orders['product_id'];
                                    
                                    $qty = $row_orders['qty'];

                                    $size = $row_orders['size'];

                                    $order_status = $row_orders['order_status'];


                                    $get_pro = "select * from products where product_id='$pro_id'";

                                    $run_pro = mysqli_query($con,$get_pro);

                                    $row_pro = mysqli_fetch_array($run_pro);

                                    $pro_title = $row_pro['product_title'];

                                    $pro_price = $row_pro['product_price'];
                                    

                                    $get_cust = "select * from customers where cust_id='$cust_id'";

                                    $run_cust = mysqli_query($con,$get_cust);

                                    $row_cust = mysqli_fetch_array($run_cust);

                                    $cust_name = $row_cust['cust_name'];
                                    

                                    $get_cust_orders = "select * from customer_orders where order_id='$order_id'";

                                    $run_cust_orders = mysqli_query($con,$get_cust_orders);

                                    $row_cust_orders = mysqli_fetch_array($run_cust_orders);

                                    $order_date = $row_cust_orders['order_date'];

                                    $order_amount = $row_cust_orders['due_amount'];



                                    $i++;
                                
                            ?>

                            <tr>
                                <td><?php echo $i; ?></td>

                                <td><?php echo $cust_name; ?></td>

                                <td><?php echo $invoice_no; ?></td>

                                <td><?php echo $pro_title; ?></td>

                                <td><?php echo $pro_price; ?></td>

                                <td><?php echo $qty; ?></td>

                                <td><?php echo $size; ?></td>

                                <td><?php echo $order_date; ?></td>

                                <td><?php echo $order_amount; ?></td>

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

                                <td>
                                    <a href="index.php?delete_order=<?php echo $order_id; ?>">
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