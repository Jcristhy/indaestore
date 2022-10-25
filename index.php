<?php
    session_start();
    include("includes/db.php");

    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
        $admin_session = $_SESSION['admin_email'];

        $get_admin =  "select * from admins where admin_email='$admin_session'";

        $run_admin = mysqli_query($con,$get_admin);

        $row_admin = mysqli_fetch_array($run_admin);

        $admin_id = $row_admin['admin_id'];

        $admin_name = $row_admin['admin_name'];

        $admin_email = $row_admin['admin_email'];

        $admin_image = $row_admin['admin_image'];

        $admin_country = $row_admin['admin_country'];

        $admin_about = $row_admin['admin_about'];

        $admin_contact = $row_admin['admin_contact'];

        $admin_job = $row_admin['admin_job'];

        $get_products = "select * from products";

        $run_products = mysqli_query($con,$get_products);

        $count_products = mysqli_num_rows($run_products);

        $get_customers = "select * from customers";

        $run_customers = mysqli_query($con,$get_customers);

        $count_customers = mysqli_num_rows($run_customers);

        $get_product_categories = "select * from product_categories";

        $run_product_categories = mysqli_query($con, $get_product_categories);

        $count_product_categories = mysqli_num_rows($run_product_categories);

        $get_pending_orders = "select * from pending_orders";

        $run_pending_orders = mysqli_query($con, $get_pending_orders);

        $count_pending_orders = mysqli_num_rows($run_pending_orders);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IND.A & CO SHOP Dashboard</title>
    
    <!--icon-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel ="stylesheet" href="font-awsome/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

    <!--BOOTSTRAP-->
    <link rel ="stylesheet" href="styles/bootstrap-337.min.css">
    
    <!--CSS FILE-->
    <link rel="stylesheet" href="css/style4.css">

</head>

<body>
    <!--WRAPPER BEGIN-->
    <div id="wrapper">
        <?php include("includes/sidebar.php"); ?>

        <!--PAGE-WRAPPER BEGIN-->
        <div id="page-wrapper">
            <!--CONTAINER-FLUID BEGIN-->
            <div class="container-fluid">
                <?php
                    if(isset($_GET['dashboard'])){
                        include("dashboard.php");
                    }

                    if(isset($_GET['insert_product'])){
                        include("insert_product.php");
                    }

                    if(isset($_GET['view_products'])){
                        include("view_products.php");
                    }

                    if(isset($_GET['delete_product'])){
                        include("delete_product.php");
                    }

                    if(isset($_GET['edit_product'])){
                        include("edit_product.php");
                    }
                    
                    if(isset($_GET['insert_product_category'])){
                        include("insert_product_category.php");
                    }

                    if(isset($_GET['view_product_categories'])){
                        include("view_product_categories.php");
                    }

                    if(isset($_GET['delete_product_category'])){
                        include("delete_product_category.php");
                    }

                    if(isset($_GET['edit_product_category'])){
                        include("edit_product_category.php");
                    }

                    if(isset($_GET['insert_category'])){
                        include("insert_category.php");
                    }

                    if(isset($_GET['view_categories'])){
                        include("view_categories.php");
                    }

                    if(isset($_GET['edit_category'])){
                        include("edit_category.php");
                    }

                    if(isset($_GET['delete_category'])){
                        include("delete_category.php");
                    }

                    if(isset($_GET['insert_slide'])){
                        include("insert_slide.php");
                    }

                    if(isset($_GET['view_slides'])){
                        include("view_slides.php");
                    }

                    if(isset($_GET['delete_slide'])){
                        include("delete_slide.php");
                    }

                    if(isset($_GET['edit_slide'])){
                        include("edit_slide.php");
                    }

                    if(isset($_GET['view_customers'])){
                        include("view_customers.php");
                    }

                    if(isset($_GET['delete_customer'])){
                        include("delete_customer.php");
                    }

                    if(isset($_GET['view_orders'])){
                        include("view_orders.php");
                    }

                    if(isset($_GET['delete_order'])){
                        include("delete_order.php");
                    }

                    if(isset($_GET['view_payments'])){
                        include("view_payments.php");
                    }

                    if(isset($_GET['delete_payment'])){
                        include("delete_payment.php");
                    }

                    if(isset($_GET['view_users'])){
                        include("view_users.php");
                    }

                    if(isset($_GET['delete_users'])){
                        include("delete_users.php");
                    }
                    
                    if(isset($_GET['insert_user'])){
                        include("insert_user.php");
                    }

                    if(isset($_GET['user_profile'])){
                        include("user_profile.php");
                    }

                    if(isset($_GET['view_report'])){
                        include("view_report.php");
                    }
                    
                ?>
            </div>
            <!--CONTAINER-FLUID FINISH-->
        </div>
        <!--PAGE-WRAPPER FINISH-->
    </div>
    <!--WRAPPER FINISH-->
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</body>
</html>

<?php } ?>