<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
        
?>

<!--ROW BEGIN-->
<div class="row">
    <!--col-lg-12 BEGIN-->
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-tachometer-alt"></i> Dashboard / View Payments
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
                    <i class="fa fa-tags"></i> View Payments
                </h3>
            </div>
            <!--panel-heading FINISH-->

            <!--panel-body BEGIN-->
            <div class="panel-body">
                <!--table-responsive BEGIN-->
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Invoice No </th>
                                <th> Amount Paid/Sent </th>
                                <th> Payment Method </th>
                                <th> Transaction/Reference No </th>
                                <th> Customer Name </th>
                                <th> Payment Date </th>
                                <th> Delete Payment </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $i=0;

                                $get_payments = "select * from payments";

                                $run_payments = mysqli_query($con,$get_payments);

                                while($row_payments=mysqli_fetch_array($run_payments)){
                                    $payment_id = $row_payments['payment_id'];

                                    $invoice_no = $row_payments['invoice_no'];

                                    $amount = $row_payments['amount'];

                                    $select_payment = $row_payments['select_payment'];
                                    
                                    $ref_no = $row_payments['ref_no'];

                                    $bank= $row_payments['bank'];

                                    $payment_date = $row_payments['payment_date'];

                                    $i++;
                                
                            ?>

                            <tr>
                                <td><?php echo $i; ?></td>

                                <td><?php echo $invoice_no; ?></td>

                                <td><?php echo $amount; ?></td>

                                <td><?php echo $select_payment; ?></td>

                                <td><?php echo $ref_no; ?></td>

                                <td><?php echo $bank; ?></td>

                                <td><?php echo $payment_date; ?></td>

                                <td>
                                    <a href="index.php?delete_payment=<?php echo $payment_id; ?>">
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
        <!--panel panel-default FINISH->
    </div>
    <!--col-lg-12 FINISH-->
</div>
<!--ROW BEGIN-->

<?php } ?>