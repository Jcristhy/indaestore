<?php
    include('includes/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IND.A & CO SHOP</title>

    <!--BOOTSTRAP-->
    <link rel ="stylesheet" href="styles/bootstrap-337.min.css">
    
    <!--icon-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel ="stylesheet" href="font-awsome/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

    <!--css file-->
    <link rel="stylesheet" href="css/style.css">

    <style type="text/css" media="print">
        @media print{
            .noprint, .noprint *{
                display: none; !important;
            }
        }
    </style>

</head>

<body onload="print()">
    <div class="container">
        <center>
            <h3 style="margin-top: 30px;"> Generate Report </h3>

            <hr>
        </center>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th> No </th>
                    <th> Name </th>
                    <th> Product Name </th>
                    <th> Price </th>
                    <th> Quantity </th>
                    <th> Size </th>
                    <th> Total</th>
                    <th> Date Order </th>
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
                        $pro_id = $row_orders['product_id'];

                        $qty = $row_orders['qty'];
                        $size = $row_orders['size'];


                        $get_pro = "select * from products  where product_id='$pro_id'";
                        $run_pro = mysqli_query($con,$get_pro);
                        $row_pro = mysqli_fetch_array($run_pro);
                        $pro_title = $row_pro['product_title'];
                        $pro_price = $row_pro['product_price'];


                        $get_cust = "select * from customers where cust_id='$cust_id'";
                        $run_cust = mysqli_query($con,$get_cust);
                        $row_cust = mysqli_fetch_array($run_cust);
                        $cust_name = $row_cust['cust_name'];
                        

                        $get_cust_orders = "select * from customer_orders  where order_id='$order_id'";
                        $run_cust_orders = mysqli_query($con,$get_cust_orders);
                        $row_cust_orders = mysqli_fetch_array($run_cust_orders);
                        $order_date = $row_cust_orders['order_date'];
                        $order_amount = $row_cust_orders['due_amount'];

                        $i++;

                    
                ?>

                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $cust_name; ?></td>
                    <td><?php echo $pro_title; ?></td>
                    <td><?php echo $pro_price; ?></td>
                    <td><?php echo $qty; ?></td>
                    <td><?php echo $size; ?></td>
                    <td><?php echo $order_amount; ?></td>
                    <td><?php echo $order_date; ?></td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>

    <center>
        <button type="submit" class="btn btn-info noprint" onclick="window.location.replace('index.php?view_orders');"> Cancel Print </button>
    </center>
    
</body>
</html>
