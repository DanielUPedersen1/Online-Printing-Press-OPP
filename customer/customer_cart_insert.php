<?php session_start(); ?>
<?php 
require('db_connect.php');


    $product_id=$_POST['product_details_id'];

    $quantity=$_POST['product_details_quantity'];

    $product_details_price=$_POST['product_details_price'];
    
    $username=$_SESSION['customer'];

    $sql="select * from customer_details where customer_details_username='$username'";
    
    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    $customer_id=$row['customer_details_id'];
//echo $product_id;
//echo $customer_id;

    $total=$quantity*$product_details_price;

    $order_date=date('d-m-Y');

    //$status="Pending";

    $sql="select * from customer_order where product_details_id='$product_id' and customer_details_id='$customer_id' and customer_order_status='cartinsert' ";
    $result=mysqli_query($conn,$sql);
    $rows=mysqli_num_rows($result);
    if($rows>0)
     {
     echo '<script type="text/javascript">
	   alert("Product Already Exists In Cart");
	   //history.back();
      window.location="cart.php";
	 </script>';
         
      }
else{

    $sql1="INSERT INTO `customer_order`(`product_details_id`, `customer_details_id`, `customer_order_quantity`, `customer_order_price`, `customer_order_total`,`customer_order_date`,`customer_order_status`) VALUES ('$product_id','$customer_id','$quantity','$product_details_price','$total','$order_date','cartinsert')";

    $result1=mysqli_query($conn,$sql1);
    
    if($result1)
   {
	echo '<script type="text/javascript">
	alert("Added To Cart");
	window.location="books.php";
	</script>';
   } 
}
?>