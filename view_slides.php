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
                <i class="fas fa-tachometer-alt"></i> Dashboard / View Slides
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
                    <i class="fa fa-tags fa-fw"></i> View Slides
                </h3>
            </div>
            <!--panel-heading FINISH-->

            <!--panel-body BEGIN-->
            <div class="panel-body">
                <?php
                    $get_slides = "select * from slider";

                    $run_slides = mysqli_query($con, $get_slides);

                    while($row_slides=mysqli_fetch_array($run_slides)){
                        $slide_id = $row_slides['slide_id'];

                        $slide_name = $row_slides['slide_name'];

                        $slide_image = $row_slides['slide_image'];
                    
                ?>

                <!--col-lg-3 col-md-3 BEGIN-->
                <div class="col-lg-3 col-md-3">
                    <!--panel panel-primary BEGIN-->
                    <div class="panel panel-primary">
                        <!--panel-heading BEGIN-->
                        <div class="panel-heading">
                            <h3 class="panel-title" align="center">
                                <?php echo $slide_name; ?>
                            </h3>
                        </div>
                        <!--panel-heading FINISH-->

                        <!--panel-body BEGIN-->
                        <div class="panel-body">
                            <img src="slides_images/<?php echo $slide_image; ?>" alt="<?php echo $slide_name; ?>" class="img-responsive">
                        </div>
                        <!--panel-body FINISH-->

                        <!--panel-footer BEGIN-->
                        <div class="panel-footer">
                            <center>
                                <a href="index.php?delete_slide=<?php echo $slide_id; ?>" class="pull-right">
                                    <i class="far fa-trash-alt"></i> Delete
                                </a>

                                <a href="index.php?edit_slide=<?php echo $slide_id; ?>" class="pull-left">
                                    <i class="far fa-edit"></i> Edit
                                </a>

                                <div class="clearfix"></div>
                            </center>
                        </div>
                        <!--panel-footer FINISH-->
                    </div>
                    <!--panel panel-primary FINISH-->
                </div>
                <!--col-lg-3 col-md-3 FINISH-->

                <?php } ?>
            </div>
            <!--panel-body FINISH-->
        </div>
        <!--panel panel-default FINISH-->
    </div>
    <!--col-lg-12 FINISH-->
</div>
<!--ROW FINISH-->

<?php } ?>