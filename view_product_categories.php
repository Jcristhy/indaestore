<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
        
?>

<!--ROW BEGIN-->
<div class="row">
    <!--COL-LG-12 BEGIN-->
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>
                <i class="fas fa-tachometer-alt"></i> Dashboard / View Product Categories
            </li>
        </ol>
    </div>
    <!--COL-LG-12 FINISH-->
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
                    <i class="fa fa-tags fa-fw"></i> View Product Categories
                </h3>
            </div>
            <!--panel-heading FINISH-->

            <!--panel-body BEGIN-->
            <div class="panel-body">
                <!--table-responsive BEGIN-->
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th> Product Category ID </th>
                                <th> Product Category Title </th>
                                <th> Product Category Description </th>
                                <th> Edit Product Category </th>
                                <th> Delete Product Category </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $i=0;

                                $get_product_cat = "select * from product_categories";

                                $run_product_cat = mysqli_query($con, $get_product_cat);

                                while($row_product_cat=mysqli_fetch_array($run_product_cat)){
                                    $product_cat_id=$row_product_cat['product_cat_id'];

                                    $product_cat_title=$row_product_cat['product_cat_title'];

                                    $product_cat_desc=$row_product_cat['product_cat_desc'];

                                    $i++;
                                
                            ?>

                            <tr>
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $product_cat_title; ?> </td>
                                <td width="300"> <?php echo $product_cat_desc; ?> </td>
                                <td>
                                    <a href="index.php?edit_product_category=<?php echo $product_cat_id; ?>">
                                        <i class="far fa-edit"></i> Edit
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?delete_product_category=<?php echo $product_cat_id; ?>">
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
        <!--panel panel-default FINISH-->
    </div>
    <!--col-lg-12 FINISH-->
</div>
<!--ROW FINISH-->

<?php } ?>