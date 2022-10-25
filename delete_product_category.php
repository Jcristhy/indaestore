<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
        
?>

<?php
    if(isset($_GET['delete_product_category'])){
        $delete_product_category_id=$_GET['delete_product_category'];

        $delete_product_category = "delete from product_categories where product_cat_id='$delete_product_category_id'";

        $run_delete = mysqli_query($con, $delete_product_category);

        if($run_delete){
            echo "<script>alert('Product Category Has Been Deleted Successfully')</script>";

            echo "<script>window.open('index.php?view_product_categories','_self')</script>";
        }
    }
?>

<?php } ?>