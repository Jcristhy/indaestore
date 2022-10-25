<?php 
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Insert Products </title>

    <!--ICON-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!--ICON-->
    <link rel ="stylesheet" href="font-awsome/css/font-awesome.min.css">

    <!--FONT-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

</head>
<body>
    <!--DASHBOARD--> <!--row begin-->
    <div class="row">
        <!--col-lg-12 begin-->
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fas fa-tachometer-alt"></i> Dashboard / Insert Products
                </li>
            </ol>
        </div>
        <!--col-lg-12 finish-->
    </div>
    <!--row finish-->

    <!--row begin-->
    <div class="row">
        <!--col-lg-12 begin-->
        <div class="col-lg-12">
            <!--panel panel-default begin-->
            <div class="panel panel-default">
                <!--INSERT PRODUCT--> <!--panel-heading begin-->
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fas fa-money-check"></i> Insert Product
                    </h3>
                </div>
                <!--panel-heading finish-->

                <!--panel-body begin-->
                <div class="panel-body">
                    <form method = "post" class="form-horizontal" enctype = "multipart/form-data">
                        <!--PRODUCT TITLE--> <!--form-group begin-->
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Product Title </label>

                            <!--col-md-6 begin-->
                            <div class="col-md-6">
                                <input name = "product_title" type="text" class="form-control" required>
                            </div>
                            <!--col-md-6 finish-->
                        </div>
                        <!--form-group finish-->

                        <!--PRODUCT CATEGORY--> <!--form-group begin-->
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Product Category </label>

                            <!--col-md-6 begin-->
                            <div class="col-md-6">
                                <select name="product_cat" class="form-control">
                                    <option>Select a Category Product</option>

                                    <?php
                                        $get_product_cats = "select * from product_categories";

                                        $run_product_cats = mysqli_query($con, $get_product_cats);

                                        while($row_product_cats = mysqli_fetch_array($run_product_cats)){
                                            $product_cat_id = $row_product_cats['product_cat_id'];

                                            $product_cat_title = $row_product_cats['product_cat_title'];

                                            echo "
                                                <option value = '$product_cat_id'> $product_cat_title </option>
                                            ";
                                        }
                                    ?>
                                </select>
                            </div>
                            <!--col-md-6 finish-->
                        </div>
                        <!--form-group finish-->

                        <!--CATEGORY--> <!--form-group begin-->
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Category </label>

                            <!--col-md-6 begin--><!--SELECT CATEGORIES-->
                            <div class="col-md-6">
                                <select name="cat" class="form-control">
                                    <option>Select a Category </option>

                                    <?php
                                        $get_cat = "select * from categories";

                                        $run_cat = mysqli_query($con, $get_cat);

                                        while($row_cat= mysqli_fetch_array($run_cat)){
                                            $cat_id = $row_cat['cat_id'];

                                            $cat_title = $row_cat['cat_title'];

                                            echo "
                                                <option value = '$cat_id'> $cat_title </option>
                                            ";
                                        }
                                    ?>
                                </select>
                            </div>
                            <!--col-md-6 finish-->
                        </div>
                        <!--form-group finish-->

                        <!--PRODUCT IMAGE--> <!--form-group begin-->
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Product Image 1 </label>

                            <!--col-md-6 begin-->
                            <div class="col-md-6">
                                <input name = "product_img1" type="file" class="form-control" required>
                            </div>
                            <!--col-md-6 finish-->
                        </div>
                        <!--form-group finish-->

                        <!--PRODUCT IMAGE--> <!--form-group begin-->
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Product Image 2 </label>

                            <!--col-md-6 begin-->
                            <div class="col-md-6">
                                <input name = "product_img2" type="file" class="form-control">
                            </div>
                            <!--col-md-6 finish-->
                        </div>
                        <!--form-group finish-->

                        <!--PRODUCT IMAGE--> <!--form-group begin-->
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Product Image 3 </label>

                            <!--col-md-6 begin-->
                            <div class="col-md-6">
                                <input name = "product_img3" type="file" class="form-control">
                            </div>
                            <!--col-md-6 finish-->
                        </div>
                        <!--form-group finish-->

                        <!--PRODUCT Price--> <!--form-group begin-->
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Product Price </label>

                            <!--col-md-6 begin-->
                            <div class="col-md-6">
                                <input name = "product_price" type="text" class="form-control" required>
                            </div>
                            <!--col-md-6 finish-->
                        </div>
                        <!--form-group finish-->

                        <!--PRODUCT KEYWORDS--> <!--form-group begin-->
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Product Keywords </label>

                            <!--col-md-6 begin-->
                            <div class="col-md-6">
                                <input name = "product_keywords" type="text" class="form-control" required>
                            </div>
                            <!--col-md-6 finish-->
                        </div>
                        <!--form-group finish-->

                        <!--PRODUCT DESCRIPTION--> <!--form-group begin-->
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Product Description </label>

                            <!--col-md-6 begin-->
                            <div class="col-md-6">
                                <textarea name="product_desc" cols="19" rows="6" class="form-control"></textarea>
                            </div>
                            <!--col-md-6 finish-->
                        </div>
                        <!--form-group finish-->

                        <!--Insert Product Button--> <!--form-group begin-->
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>

                            <!--col-md-6 begin-->
                            <div class="col-md-6">
                                <input name = "submit" value = "Insert Product" type="submit" class="btn btn-primary form-control">
                            </div>
                            <!--col-md-6 finish-->
                        </div>
                        <!--form-group finish-->
                    </form>
                </div>
                <!--panel-body finish-->
            </div>
            <!--panel panel-default finish-->
        </div>
        <!--col-lg-12 finish-->
    </div>
    <!--row finish-->

    <!--JS FILE-->
    <script src="js/jquery-331.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--TINYMCE IS SMALL EDITOR FOR WRITING-->
    <script src = "js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
</body>
</html>

<!--INSERT PRODUCT TO DATABASE AND POPUP MESSAGE-->
<?php 
    if(isset($_POST['submit'])){
        $product_title = $_POST['product_title'];
        $product_cat = $_POST['product_cat'];
        $cat = $_POST['cat'];
        $product_price = $_POST['product_price'];
        $product_keywords = $_POST['product_keywords'];
        $product_desc = $_POST['product_desc'];

        $product_img1 = $_FILES['product_img1']['name'];
        $product_img2 = $_FILES['product_img2']['name'];
        $product_img3 = $_FILES['product_img3']['name'];

        $temp_name1 = $_FILES['product_img1']['tmp_name'];
        $temp_name2 = $_FILES['product_img2']['tmp_name'];
        $temp_name3 = $_FILES['product_img3']['tmp_name'];

        move_uploaded_file($temp_name1,"product_images/$product_img1");
        move_uploaded_file($temp_name2,"product_images/$product_img2");
        move_uploaded_file($temp_name3,"product_images/$product_img3");

        $insert_product = "insert into products (product_cat_id, cat_id, date, product_title, product_img1, product_img2, product_img3, product_price, product_keywords, product_desc)
        values ('$product_cat', '$cat', NOW(), '$product_title',
        '$product_img1', '$product_img2', '$product_img3', '$product_price', '$product_keywords', '$product_desc')";

        $run_product = mysqli_query($con, $insert_product);

        if($run_product){
            echo "<script>alert('Product has been inserted successfully')</script>";

            echo "<script>window.open('index.php?view_products', '_self')</script>";
        }
    }
?>

<?php } ?>