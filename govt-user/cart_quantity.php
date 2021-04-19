<?php 
   
require('db_connect.php'); 
$order_details_id=$_POST['order_details_id'];
$order_details_price=$_POST['order_details_price'];
$order_details_quantity=$_POST['order_details_quantity'];

$order_details_total=$order_details_price*$order_details_quantity;
     
if($order_details_quantity<=100)
{
     echo '<script type="text/javascript">
            alert("Quantity Not Less Than 100...?");
            window.location="cart.php";
            </script>';
}
else
{
     $sql2="update order_details set order_details_quantity='$order_details_quantity',order_details_total='$order_details_total'  where order_details_id='$order_details_id'";

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