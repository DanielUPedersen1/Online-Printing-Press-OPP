<?php 
require('db_connect.php');

$customer_bill_id=$_REQUEST['id'];

$customer_details_id=$_REQUEST['id2'];

$start=$_REQUEST['o'];

$status="Confirmed";


/*$sql2="SELECT * FROM `customer_details` WHERE customer_details_id='$customer_details_id'";
      $res2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($res2,MYSQLI_ASSOC);

$sql2="SELECT * FROM `customer_details` WHERE customer_details_id='$customer_details_id'";
      $res2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($res2,MYSQLI_ASSOC);



$name=$row2['customer_details_name'];
$contact_no=$row2['customer_details_contact'];
//echo $total;
    
$msg="$name your placed order is been confirmed Of amount Rs. $total (Order No.:$start ) and the products will be delivered within 1 week.";
$data=urlencode($msg);
$sms="http://bhashsms.com/api/sendmsg.php?user=innovics&pass=123456&sender=INVSIT&phone=$contact_no&text=$data&priority=ndnd&stype=normal";
$content = file_get_contents($sms);*/

$sql="update `customer_bill` set `customer_bill_status`='$status' where `customer_bill_id`='$customer_bill_id'";

$res=mysqli_query($conn,$sql);

if($res)
{
    echo '<script type="text/javascript">
	alert("Updated Successfully");
	window.location="customer_order_view.php";
	</script>';
}

?>