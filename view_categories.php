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
                <i class="fas fa-tachometer-alt"></i> Dashboard / View Categories
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
                    <i class="fa fa-tags fa-fw"></i> View Categories
                </h3>
            </div>
            <!--panel-heading FINISH-->

            <!--panel-body BEGIN-->
            <div class="panel-body">
                <!--table-responsive BEGIN-->
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th> Category ID </th>
                                <th> Category Title </th>
                                <th> Category Description </th>
                                <th> Edit Category </th>
                                <th> Delete Category </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $i=0;

                                $get_cat = "select * from categories";

                                $run_cat = mysqli_query($con, $get_cat);

                                while($row_cat=mysqli_fetch_array($run_cat)){
                                    $cat_id=$row_cat['cat_id'];

                                    $cat_title=$row_cat['cat_title'];

                                    $cat_desc=$row_cat['cat_desc'];

                                    $i++;
                                
                            ?>

                            <tr>
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $cat_title; ?> </td>
                                <td width="300"> <?php echo $cat_desc; ?> </td>
                                <td>
                                    <a href="index.php?edit_category=<?php echo $cat_id; ?>">
                                        <i class="far fa-edit"></i> Edit
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?delete_category=<?php echo $cat_id; ?>">
                                        <i class="far fa-trash-alt"></i> Delete
                                    </a>
                                </td>
                            </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!--table-responsive FINISH-->
            </div>
            <!--panel-body FINISH-->
        </div>
        <!--panel panel-default FINISH-->
    </div>
    <!--col-lg-12 FINISH-->
</div>
<!--ROW FINISH-->

<?php } ?>