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
                <i class="fa fa-tachometer-alt"></i> Dashboard / View Products
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
                    <i class="fa fa-tags"></i> View Products
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
                                <th> ID </th>
                                <th> Product Title </th>
                                <th> Product Image </th>
                                <th> Product Price </th>
                                <th> Product Sold </th>
                                <th> Product Keywords </th>
                                <th> Product Date </th>
                                <th> Delete Product </th>
                                <th> Edit Product </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $i=0;

                                $get_pro = "select * from products";

                                $run_pro = mysqli_query($con, $get_pro);

                                while($row_pro=mysqli_fetch_array($run_pro)){
                                    $pro_id = $row_pro['product_id'];

                                    $pro_title = $row_pro['product_title'];

                                    $pro_img1 = $row_pro['product_img1'];

                                    $pro_price = $row_pro['product_price'];

                                    $pro_keywords = $row_pro['product_keywords'];

                                    $pro_date = $row_pro['date'];

                                    $i++;
                                
                            ?>

                            <tr>
                                <td><?php echo $i; ?></td>

                                <td><?php echo $pro_title; ?></td>

                                <td><img src="product_images/<?php echo $pro_img1; ?>" width="60" height="60"></td>

                                <td>RM <?php echo $pro_price; ?></td>

                                <td>
                                    <?php
                                        $get_sold = "select * from pending_orders where product_id='$pro_id'";

                                        $run_sold = mysqli_query($con, $get_sold);

                                        $count = mysqli_num_rows($run_sold);

                                        echo $count;
                                    ?>
                                </td>

                                <td><?php echo $pro_keywords; ?></td>

                                <td><?php echo $pro_date; ?></td>

                                <td>
                                    <a href="index.php?delete_product=<?php echo $pro_id; ?>">
                                        <i class="far fa-trash-alt"></i> Delete
                                    </a>
                                </td>

                                <td>
                                    <a href="index.php?edit_product=<?php echo $pro_id; ?>">
                                        <i class="far fa-edit"></i> Edit
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