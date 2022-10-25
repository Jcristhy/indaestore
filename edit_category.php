<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
        
?>

<?php
    if(isset($_GET['edit_category'])){
        $edit_cat_id = $_GET['edit_category'];

        $edit_cat_query = "select * from categories where cat_id='$edit_cat_id'";

        $run_edit = mysqli_query($con, $edit_cat_query);

        $row_edit = mysqli_fetch_array($run_edit);

        $cat_id = $row_edit['cat_id'];

        $cat_title = $row_edit['cat_title'];

        $cat_desc = $row_edit['cat_desc'];
    }
?>

<!--ROW BEGIN-->
<div class="row">
    <!--COL-LG-12 BEGIN-->
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>
                <i class="fas fa-tachometer-alt"></i> Dashboard / Edit Category
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
                    <i class="far fa-edit fa-fw"></i> Edit Category
                </h3>
            </div>
            <!--panel-heading FINISH-->

            <!--panel-body BEGIN-->
            <div class="panel-body">
                <form action="" class="form-horizontal" method="post">
                    <!--form-group BEGIN-->
                    <div class="form-group">
                        <label for="" class="control-label col-md-3">
                            Category Title
                        </label>

                        <!--col-md-6 BEGIN-->
                        <div class="col-md-6">
                            <input value="<?php echo $cat_title; ?>" name="cat_title" type="text" class="form-control">
                        </div>
                        <!--col-md-6 FINISH-->
                    </div>
                    <!--form-group FINISH-->

                    <!--form-group BEGIN-->
                    <div class="form-group">
                        <label for="" class="control-label col-md-3">
                            Category Description
                        </label>

                        <!--col-md-6 BEGIN-->
                        <div class="col-md-6">
                            <textarea type="text" name="cat_desc" id="" cols="30" rows="10" class="form-control"><?php echo $cat_desc; ?></textarea>
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
        $cat_title = $_POST['cat_title'];

        $cat_desc = $_POST['cat_desc'];

        $update_cat = "update categories set cat_title='$cat_title', cat_desc='$cat_desc'
        where cat_id='$cat_id'";

        $run_cat = mysqli_query($con, $update_cat);

        if($run_cat){
            echo "<script>alert('Category Has Been Updated')</script>";

            echo "<script>window.open('index.php?view_categories', '_self')</script>";
        }
        
    }
?>


<?php } ?>
