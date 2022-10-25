<?php 
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{

?>

<?php
    if(isset($_GET['edit_product'])){
        $edit_id = $_GET['edit_product'];

        $get_product = "select * from products where product_id='$edit_id'";

        $run_edit = mysqli_query($con, $get_product);

        $row_edit = mysqli_fetch_array($run_edit);

        $product_id = $row_edit['product_id'];

        $product_title = $row_edit['product_title'];

        $product_category = $row_edit['product_cat_id'];

        $category = $row_edit['cat_id'];

        $product_img1 = $row_edit['product_img1'];

        $product_img2 = $row_edit['product_img2'];

        $product_img3 = $row_edit['product_img3'];

        $product_price = $row_edit['product_price'];

        $product_keywords = $row_edit['product_keywords'];

        $product_desc = $row_edit['product_desc'];
    }

    $get_product_category = "select * from product_categories where product_cat_id='$product_category'";

    $run_product_category = mysqli_query($con, $get_product_category);

    $row_product_category = mysqli_fetch_array($run_product_category);

    $product_category_title = $row_product_category['product_cat_title'];


    $get_category = "select * from categories where cat_id='$category'";

    $run_category = mysqli_query($con, $get_category);

    $row_category = mysqli_fetch_array($run_category);

    $category_title = $row_category['cat_title'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Insert Products </title>

    <!--BOOSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!--ICON-->
    <link rel ="stylesheet" href="font-awsome/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

</head>
<body>
    <!--DASHBOARD--> <!--row begin-->
    <div class="row">
        <!--col-lg-12 begin-->
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fas fa-tachometer-alt"></i> Dashboard / Edit Product
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
                        <i class="far fa-edit"></i> Edit Product
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
                                <input name = "product_title" type="text" class="form-control" required value="<?php echo $product_title; ?>">
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
                                    <option value="<?php echo $product_category; ?>"> <?php echo $product_category_title; ?> </option>

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
                                    <option value="<?php echo $category; ?>"> <?php echo $category_title; ?> </option>

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

                                <br>

                                <img width="70" height="70" src="product_images/<?php echo $product_img1; ?>" alt="<?php echo $product_img1; ?>">
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

                                <br>

                                <img width="70" height="70" src="product_images/<?php echo $product_img2; ?>" alt="<?php echo $product_img2; ?>">
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

                                <br>

                                <img width="70" height="70" src="product_images/<?php echo $product_img3; ?>" alt="<?php echo $product_img3; ?>">
                            </div>
                            <!--col-md-6 finish-->
                        </div>
                        <!--form-group finish-->

                        <!--PRODUCT Price--> <!--form-group begin-->
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Product Price </label>

                            <!--col-md-6 begin-->
                            <div class="col-md-6">
                                <input name = "product_price" type="text" class="form-control" required value="<?php echo $product_price; ?>">
                            </div>
                            <!--col-md-6 finish-->
                        </div>
                        <!--form-group finish-->

                        <!--PRODUCT KEYWORDS--> <!--form-group begin-->
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Product Keywords </label>

                            <!--col-md-6 begin-->
                            <div class="col-md-6">
                                <input name = "product_keywords" type="text" class="form-control" required value="<?php echo $product_keywords; ?>">
                            </div>
                            <!--col-md-6 finish-->
                        </div>
                        <!--form-group finish-->

                        <!--PRODUCT DESCRIPTION--> <!--form-group begin-->
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Product Description </label>

                            <!--col-md-6 begin-->
                            <div class="col-md-6">
                                <textarea name="product_desc" cols="19" rows="6" class="form-control">
                                    <?php echo $product_desc; ?>
                                </textarea>
                            </div>
                            <!--col-md-6 finish-->
                        </div>
                        <!--form-group finish-->

                        <!--Insert Product Button--> <!--form-group begin-->
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>

                            <!--col-md-6 begin-->
                            <div class="col-md-6">
                                <input name = "update" value = "Update Product" type="submit" class="btn btn-primary form-control">
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
    if(isset($_POST['update'])){
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

        $update_product = "update products set product_cat_id='$product_category', cat_id='$category',
        date=NOW(), product_title='$product_title', product_img1='$product_img1',
        product_img2='$product_img2', product_img3='$product_img3', product_price='$product_price', product_keywords='$product_keywords',
        product_desc='$product_desc' where product_id='$product_id'";

        $run_product = mysqli_query($con, $update_product);

        if($run_product){
            echo "<script>alert('Your product has been updated successfully')</script>";

            echo "<script>window.open('index.php?view_products', '_self')</script>";
        }
    }
?>

<?php } ?>