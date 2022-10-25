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
                <i class="fas fa-tachometer-alt"></i> Dashboard / Insert Slide
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
                    <i class="fas fa-money-check fa-fw"></i> Insert Slide
                </h3>
            </div>
            <!--panel-heading FINISH-->

            <!--panel-body BEGIN-->
            <div class="panel-body">
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <h4>P/S: Slide image can be added up to 10 images only.</h4>
                    </br>
                    
                    <!--form-group BEGIN-->
                    <div class="form-group">
                        <label for="" class="control-label col-md-3">
                            Slide Name
                        </label>

                        <!--col-md-6 BEGIN-->
                        <div class="col-md-6">
                            <input name="slide_name" type="text" class="form-control">
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
                        </div>
                        <!--col-md-6 FINISH-->
                    </div>
                    <!--form-group FINISH-->

                    <!--form-group BEGIN-->
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"></label>

                        <!--col-md-6 BEGIN-->
                        <div class="col-md-6">
                            <input type="submit" name="submit" value="Submit Now" class="btn btn-primary form-control">
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
        $slide_name = $_POST['slide_name'];

        $slide_image = $_FILES['slide_image']['name'];

        $temp_name = $_FILES['slide_image']['tmp_name'];

        $view_slides = "select * from slider";

        $view_run_slide = mysqli_query($con, $view_slides);

        $count = mysqli_num_rows($view_run_slide);

        if($count<10){
            move_uploaded_file($temp_name,"slides_images/$slide_image");

            $insert_slide = "insert into slider (slide_name, slide_image) values ('$slide_name','$slide_image')";

            $run_slide = mysqli_query($con, $insert_slide);

            echo "<script>alert('New Slide Image Has Been Inserted')</script>";

            echo "<script>window.open('index.php?view_slides','_self')</script>";
        }

        else{
            echo "<script>alert('You have already inserted maximum number of slides')</script>";
        }

    }
?>

<?php } ?>
