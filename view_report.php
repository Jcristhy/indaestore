
<!--ROW BEGIN-->
<div class="row">
    <!--col-lg-12 BEGIN-->
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-tachometer-alt"></i> Dashboard / View Sale Report
            </li>
        </ol>
    </div>
    <!--col-lg-12 FINISH-->
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
                    <i class="fa fa-tags"></i> View Sale Report
                </h3>
            </div>
            <!--panel-heading FINISH-->

            <!--panel-body BEGIN-->
            <div class="panel-body">
                <form action="" method="POST">
                    <fieldset>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" style="text-align: left;"> Choice </label>
                                
                                    <select name="filterchoice" class="form-control">
                                        <option value="0"> Select </option>
                                        <option value="1"> This year </option>
                                        <option value="2"> Last year </option>
                                        <option value="3"> This month </option>
                                        <option value="4"> Last month </option>
                                    </select>
                                </div>

                                <br>

                                <div class="form-group">
                                    <label class="control-label" style="text-align: left;"> Custom Sales </label>
                                </div>

                                <div class="form-group">
                                    <input type="date" id="from_sales" class="form-control" name="from_sales">
                                </div>

                                <div class="form-group">
                                    <input type="date" id="to_sales" class="form-control" name="to_sales">
                                </div>

                                <div class="form-group" align="center">
                                    <input type="submit" value="Generate Report" name="choice" class="btn btn-primary"/>

                                    <button class="btn btn-primary" onclick="window.print()">Print Report</button>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th> No </th>
                                            <th> Product Title </th>
                                            <th> Price </th>
                                            <th> Qty </th>
                                            <th> Total </th>
                                            <th> Date & Time </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                            if(!isset($_POST['choice'])){
                                                $query = "SELECT * FROM products";
                                                getData($query);
                                            }
                                            else if(isset($_POST['filterchoice'])){
                                                $from_sales = $_POST['from_sales'];

                                                $from_sales = strtotime($from_sales);
                                                $fsales = date("Y/m/d", $from_sales);


                                                $to_sales = $_POST['to_sales'];

                                                $to_sales = strtotime($to_sales);
                                                $tsales = date("Y/m/d", $to_sales);

                                                switch($_POST['filterchoice']){
                                                    //THIS YEAR
                                                    case "1":
                                                    $sql = "SELECT * FROM products WHERE YEAR(date) = YEAR(CURDATE()) ORDER BY YEAR(date) ASC, MONTH(date) ASC, DAY(date) ASC";
                                                    getData($sql);
                                                    break;
                                                    
                                                    //LAST YEAR
                                                    case "2":
                                                    $sql = "SELECT * FROM products WHERE YEAR(date) = YEAR(CURDATE()) - 1 ORDER BY YEAR(date) ASC, MONTH(date) ASC, DAY(date) ASC";
                                                    getData($sql);
                                                    break;

                                                    //THIS MONTH
                                                    case "3":
                                                    $sql = "SELECT * FROM products WHERE MONTH(date) = MONTH(CURRENT_DATE()) AND YEAR(date) = YEAR(CURRENT_DATE()) ORDER BY DAY(date) ASC";
                                                    getData($sql);
                                                    break;

                                                    //LAST MONTH
                                                    case "4":
                                                    $sql = "SELECT * FROM products WHERE MONTH(date) = MONTH(DATE_ADD(Now(), INTERVAL -1 MONTH)) ORDER BY DAY(date) ASC";
                                                    getData($sql);
                                                    break;

                                                    //CUSTOM SALES
                                                    default:
                                                    $sql = "SELECT * FROM products WHERE date >= 'fsales' AND date <= '$tsales' ORDER BY YEAR(date) ASC, MONTH(date) ASC, DAY(date) ASC";
                                                    getData($sql);
                                                }
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <!--panel-body FINISH-->
        </div>
        <!--panel panel-default FINISH->
    </div>
    <!--col-lg-12 FINISH-->
</div>
<!--ROW BEGIN-->

<?php
    function getData($sql){
        include('includes/db.php');

        $i=0;

        $data = mysqli_query($con, $sql) or die ('error');

        if(mysqli_num_rows($data) > 0){
            while($row = mysqli_fetch_assoc($data)){

                $pro_id = $row['product_id'];

                $pro_title = $row['product_title'];

                $pro_price = $row['product_price'];

                $pro_date = $row['date'];

                

                //$date = strtotime($pro_date);

                $i++;

            ?>

            <tr class="table-active">
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo $pro_title; ?></td>
                <td>RM <?php echo $pro_price; ?></td>

                <td>
                    <?php
                        $get_sold = "select * from pending_orders where product_id='$pro_id'";

                        $run_sold = mysqli_query($con, $get_sold);

                        $count = mysqli_num_rows($run_sold);

                        echo $count;
                    ?>
                </td>

                <td> RM
                    <?php
                        $total_price_sold = $pro_price * $count;

                        echo $total_price_sold;
                    ?>
                </td>

                <td><?php echo $pro_date; ?></td>
            </tr>

            <?php

            }
        }
        else{
            ?>
            <tr><td>No Data Found!</td></tr>
            <?php
        }
    }
?>

