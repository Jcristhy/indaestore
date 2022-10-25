<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
        
?>

<?php
    if(isset($_GET['edit_slide'])){
        $edit_slide_id = $_GET['edit_slide'];

        $edit_slide = "select * from slider where slide_id='$edit_slide_id'";

        $run_edit_slide = mysqli_query($con, $edit_slide);

        $row_edit_slide = mysqli_fetch_array($run_edit_slide);

        $slide_id = $row_edit_slide['slide_id'];

        $slide_name = $row_edit_slide['slide_name'];

        $slide_image = $row_edit_slide['slide_image'];
    }
?>

<!--ROW BEGIN-->
<div class="row">
    <!--COL-LG-12 BEGIN-->
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>
                <i class="fas fa-tachometer-alt"></i> Dashboard / Edit Slide
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
                    <i class="far fa-edit"></i> Edit Slide
                </h3>
            </div>
            <!--panel-heading FINISH-->

            <!--panel-body BEGIN-->
            <div class="panel-body">
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <!--form-group BEGIN-->
                    <div class="form-group">
                        <label for="" class="control-label col-md-3">
                            Slide Name
                        </label>

                        <!--col-md-6 BEGIN-->
                        <div class="col-md-6">
                            <input name="slide_name" type="text" class="form-control" value="<?php echo $slide_name; ?>">
                        </div>
                        <!--col-md-6 FINISH-->
                    </div>
                    <!--form-group FINISH-->

                    <!--form-group BEGIN-->
                    <div class="form-group">
                        <label for="" class="control-label col-md-3">
                            Slide Image
                        </label>

                        <!--col-md-6 BEGIN-->
                        <div class="col-md-6">
                            <input type="file" name="slide_image" class="form-control">

                            <br/>

                            <img src="slides_images/<?php echo $slide_image; ?>" class="img-responsive">
                        </div>
                        <!--col-md-6 FINISH-->
                    </div>
                    <!--form-group FINISH-->

                    <!--form-group BEGIN-->
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"></label>

                        <!--col-md-6 BEGIN-->
                        <div class="col-md-6">
                            <input type="submit" name="update" value="Update Now" class="btn btn-primary form-control">
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
        $slide_name = $_POST['slide_name'];

        $slide_image = $_FILES['slide_image']['name'];

        $temp_name = $_FILES['slide_image']['tmp_name'];

        move_uploaded_file($temp_name, "$slides_images/$slide_image");

        $update_slide = "update slider set slide_name='$slide_name',slide_image='$slide_image' where slide_id='$slide_id'";

        $run_update_slide = mysqli_query($con, $update_slide);

        if($run_update_slide){
            echo "<script>alert('Slide image has been updated successfully')</script>";

            echo "<script>window.open('index.php?view_slides', '_self')</script>";
        }
    }
?>

<?php } ?>
