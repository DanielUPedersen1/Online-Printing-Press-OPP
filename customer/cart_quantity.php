<?php 
   
require('db_connect.php'); 
$customer_details_id=$_POST['customer_order_id'];
$customer_order_price=$_POST['customer_order_price'];
$customer_order_quantity=$_POST['customer_order_quantity'];

$customer_order_total=$customer_order_price*$customer_order_quantity;
     
if($customer_order_quantity<=100)
{
     echo '<script type="text/javascript">
            alert("Quantity Not Less Than 100...?");
            window.location="cart.php";
            </script>';
}
else
{
     $sql2="update customer_order set customer_order_quantity='$customer_order_quantity',customer_order_total='$customer_order_total'  where customer_order_id='$customer_details_id'";

        $res2=mysqli_query($conn,$sql2);





        if(! $res2 )
        {
            //die('Could not enter data: ' . mysqli_error($conn));

            echo '<script type="text/javascript">
            alert("Quantity Not Updated");
            window.location="cart.php";
            </script>';
        }
        else 
        {
            echo '<script type="text/javascript">
            alert("Quantity Updated");
            window.location="cart.php";
            </script>';
        }
    
}



?>