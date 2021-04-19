<?php session_start(); ?>
<?php 
require('db_connect.php');


    $product_id=$_POST['product_details_id'];

    $quantity=$_POST['product_details_quantity'];

    $product_details_price=$_POST['product_details_price'];
    
    $username=$_SESSION['govtuser'];

    $sql="select * from govt_user where govt_user_username='$username'";
    
    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    $govt_user_id=$row['govt_user_id'];

    $total=$quantity*$product_details_price;
    
    //$reqdate=$_POST['order_details_reqdate'];

    $order_date=date('d-m-Y');

   // $status="pending";

    $sql="select * from order_details where product_details_id='$product_id' and govt_user_id='$govt_user_id' and order_details_status='cartinsert'";
    $result=mysqli_query($conn,$sql);
    $rows=mysqli_num_rows($result);
    if($rows>0)
     {
     echo '<script type="text/javascript">
	   alert("product already exists in cart");
	   window.location="cart.php";
	 </script>';
         
      }
else{

    $sql1="INSERT INTO `order_details`(`product_details_id`, `govt_user_id`, `order_details_quantity`, `order_details_price`, `order_details_total`,`order_details_date`,`order_details_status`) VALUES ('$product_id','$govt_user_id','$quantity','$product_details_price','$total','$order_date','cartinsert')";

    $result1=mysqli_query($conn,$sql1);
    
    if($result1)
   {
	echo '<script type="text/javascript">
	alert("Added To Cart");
	//window.location="stationary.php";
    window.location=document.referrer;
	</script>';
   } 
}
?>