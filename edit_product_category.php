<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
        
?>

<?php
    if(isset($_GET['edit_product_category'])){
        $edit_product_cat_id = $_GET['edit_product_category'];

        $edit_product_cat_query = "select * from product_categories where product_cat_id='$edit_product_cat_id'";

        $run_edit = mysqli_query($con, $edit_product_cat_query);

        $row_edit = mysqli_fetch_array($run_edit);

        $product_cat_id = $row_edit['product_cat_id'];

        $product_cat_title = $row_edit['product_cat_title'];

        $product_cat_desc = $row_edit['product_cat_desc'];
    }
?>

<!--ROW BEGIN-->
<div class="row">
    <!--COL-LG-12 BEGIN-->
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>
                <i class="fas fa-tachometer-alt"></i> Dashboard / Edit Product Category
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
                    <i class="far fa-edit fa-fw"></i> Edit Product Category
                </h3>
            </div>
            <!--panel-heading FINISH-->

            <!--panel-body BEGIN-->
            <div class="panel-body">
                <form action="" class="form-horizontal" method="post">
                    <!--form-group BEGIN-->
                    <div class="form-group">
                        <label for="" class="control-label col-md-3">
                            Product Category Title
                        </label>

                        <!--col-md-6 BEGIN-->
                        <div class="col-md-6">
                            <input value="<?php echo $product_cat_title; ?>" name="product_cat_title" type="text" class="form-control">
                        </div>
                        <!--col-md-6 FINISH-->
                    </div>
                    <!--form-group FINISH-->

                    <!--form-group BEGIN-->
                    <div class="form-group">
                        <label for="" class="control-label col-md-3">
                            Product Category Description
                        </label>

                        <!--col-md-6 BEGIN-->
                        <div class="col-md-6">
                            <textarea type="text" name="product_cat_desc" id="" cols="30" rows="10" class="form-control"><?php echo $product_cat_desc; ?></textarea>
                        </div>
                        <!--col-md-6 FINISH-->
                    </div>
                    <!--form-group FINISH-->

                    <!--form-group BEGIN-->
                    <div class="form-group">
                        <label for="" class="control-label col-md-3">
                            
                        </label>

                        <!--col-md-6 BEGIN-->
                        <div class="col-md-6">
                            <input value="Update" name="update" type="submit" class="form-control btn btn-primary">
                        </div>
                        <!--col-md-6 FINISH-->
                    </div>
                    <!--form-group FINISH-->
                </form>
            </div>
            <!--panel-body FINISH-->
        </div>
        <!--panel panel-default FINISH-->
    </div>
    <!--col-lg-12 FINISH-->
</div>
<!--ROW FINISH-->

<?php
    if(isset($_POST['update'])){
        $product_cat_title = $_POST['product_cat_title'];

        $product_cat_desc = $_POST['product_cat_desc'];

        $update_product_cat = "update product_categories set product_cat_title='$product_cat_title', product_cat_desc='$product_cat_desc'
        where product_cat_id='$product_cat_id'";

        $run_product_cat = mysqli_query($con, $update_product_cat);

        if($run_product_cat){
            echo "<script>alert('Product Category Has Been Updated')</script>";

            echo "<script>window.open('index.php?view_product_categories', '_self')</script>";
        }
        
    }
?>


<?php } ?>
