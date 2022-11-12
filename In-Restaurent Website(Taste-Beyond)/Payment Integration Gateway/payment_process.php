<?php
include('db.php');
if(isset($_POST['payment_id']) && isset($_POST['amount']) && isset($_POST['name'])){
    $payment_id=$_POST['payment_id'];
    $amount=$_POST['amount'];
    $name=$_POST['name'];
    $payment_status="Complete";
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($con,"insert into payment(name,amount,payment_status,payment_id,added_on) values('$name','$amount','$payment_status','$payment_id','$added_on')");
}
?>