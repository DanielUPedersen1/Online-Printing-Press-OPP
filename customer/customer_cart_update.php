<?php 
   
require('db_connect.php'); 
$customer_details_id=$_REQUEST['customer_details_id'];
$customer_order_id=$_REQUEST['customer_order_id'];
$sgst=$_REQUEST['sgst'];
$cgst=$_REQUEST['cgst'];
$total=$_REQUEST['total'];
$status="orderplaced";
$customer_bill_date=date('d-m-Y');



$start = 'GPP';
$characters = array_merge(range('0','9'));
for ($i = 0; $i < 6; $i++) {
    $rand = mt_rand(0, count($characters)-1);
    $start .= $characters[$rand];
}


        $sql1 = "UPDATE customer_order SET 
         customer_order_sgst='$sgst',
         customer_order_cgst='$cgst',
         customer_order_finalamount='$total',customer_order_status='$status',customer_order_no='$start'


         Where customer_details_id='$customer_details_id' and customer_order_status='cartinsert' and customer_order_date='$customer_bill_date' ";

        $result1 = mysqli_query($conn,$sql1);

        

 $sql2="SELECT * FROM `customer_details` WHERE customer_details_id='$customer_details_id'";
      $res2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($res2,MYSQLI_ASSOC);

$total=$sgst+$cgst;

$name=$row2['customer_details_name'];
$contact_no=$row2['customer_details_contact'];
    
$msg="$name Your Order Placed Successfully Of Amount Rs. $total (Order No.:$start ) . We Will Send Confirmation Message of Your Product.";
$data=urlencode($msg);
$sms="http://bhashsms.com/api/sendmsg.php?user=innovics&pass=123456&sender=INVSIT&phone=$contact_no&text=$data&priority=ndnd&stype=normal";
$content = file_get_contents($sms);



$sql3="INSERT INTO `customer_bill`(`customer_details_id`, `customer_bill_date`, `customer_bill_status`,`bill_order_no`) VALUES ('$customer_details_id','$customer_bill_date','Pending','$start')";

        $res3=mysqli_query($conn,$sql3);


        if(! $result1 && $res2 && $res3)
        {
            //die('Could not enter data: ' . mysqli_error($conn));

            echo '<script type="text/javascript">
            alert("order not placed");
            window.location="cart.php";
            </script>';
        }
        else 
        {
            echo '<script type="text/javascript">
            alert("order placed successfully");
            window.location="cart.php";
            </script>';
        }
    
/*}*/

//header('location:admin_view.php');

?>