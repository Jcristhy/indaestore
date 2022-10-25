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
                <i class="fas fa-tachometer-alt"></i> Dashboard / Insert Product Category
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
                    <i class="fas fa-money-check fa-fw"></i> Insert Product Category
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
                            <input name="product_cat_title" type="text" class="form-control">
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
                            <textarea type="text" name="product_cat_desc" id="" cols="30" rows="10" class="form-control"></textarea>
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
                            <input value="Submit" name="submit" type="submit" class="form-control btn btn-primary">
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
    if(isset($_POST['submit'])){
        $product_cat_title = $_POST['product_cat_title'];

        $product_cat_desc = $_POST['product_cat_desc'];

        $insert_product_category = "insert into product_categories (product_cat_title, product_cat_desc)
        values ('$product_cat_title', '$product_cat_desc')";

        $run_product_cat = mysqli_query($con, $insert_product_category);

        if($run_product_cat){
            echo "<script>alert('New Product Category Has Been Inserted Successfully')</script>";

            echo "<script>window.open('index.php?view_product_categories','_self')</script>";
        }
    }
?>


<?php } ?>
