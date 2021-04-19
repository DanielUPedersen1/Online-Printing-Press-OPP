<!DOCTYPE html>
<html lang="en">
<head>
<title>customer_order</title>
<meta charset="utf-8">
</head>
<body>

<div>

<?php 

require("db_connect.php"); 

$customer_order_id=$_REQUEST['id'];

//echo $id;

$sql="select * from customer_order where customer_order_id='$customer_order_id'";

$result = mysqli_query($conn,$sql);

//$count=1;

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>

<form action="customer_order_update.php" method="post" enctype="multipart/form-data">
<table  border="0" class="" align="center" height="" width="">
<tr style="text-align:center; ">
<td colspan="2">customer_order Edit Form</td>
</tr>

<tr><td><label>Customer_order_id</label></td>
<td><input type="text" placeholder="Customer_order_id" value="<?php echo $row['customer_order_id'] ; ?>" name="customer_order_id" id="customer_order_id" required="required"  /></td></tr>
<tr><td><label>Product_details_id</label></td>
<td><input type="text" placeholder="Product_details_id" value="<?php echo $row['product_details_id'] ; ?>" name="product_details_id" id="product_details_id" required="required"  /></td></tr>
<tr><td><label>Customer_details_id</label></td>
<td><input type="text" placeholder="Customer_details_id" value="<?php echo $row['customer_details_id'] ; ?>" name="customer_details_id" id="customer_details_id" required="required"  /></td></tr>
<tr><td><label>Customer_order_quantity</label></td>
<td><input type="text" placeholder="Customer_order_quantity" value="<?php echo $row['customer_order_quantity'] ; ?>" name="customer_order_quantity" id="customer_order_quantity" required="required"  /></td></tr>
<tr><td><label>Customer_order_price</label></td>
<td><input type="text" placeholder="Customer_order_price" value="<?php echo $row['customer_order_price'] ; ?>" name="customer_order_price" id="customer_order_price" required="required"  /></td></tr>
<tr><td><label>Customer_order_total</label></td>
<td><input type="text" placeholder="Customer_order_total" value="<?php echo $row['customer_order_total'] ; ?>" name="customer_order_total" id="customer_order_total" required="required"  /></td></tr>
<tr><td><label>Customer_order_sgst</label></td>
<td><input type="text" placeholder="Customer_order_sgst" value="<?php echo $row['customer_order_sgst'] ; ?>" name="customer_order_sgst" id="customer_order_sgst" required="required"  /></td></tr>
<tr><td><label>Customer_order_cgst</label></td>
<td><input type="text" placeholder="Customer_order_cgst" value="<?php echo $row['customer_order_cgst'] ; ?>" name="customer_order_cgst" id="customer_order_cgst" required="required"  /></td></tr>
<tr><td><label>Customer_order_finalamount</label></td>
<td><input type="text" placeholder="Customer_order_finalamount" value="<?php echo $row['customer_order_finalamount'] ; ?>" name="customer_order_finalamount" id="customer_order_finalamount" required="required"  /></td></tr>
<tr><td><label>Customer_order_date</label></td>
<td><input type="text" placeholder="Customer_order_date" value="<?php echo $row['customer_order_date'] ; ?>" name="customer_order_date" id="customer_order_date" required="required"  /></td></tr>
<tr><td><label>Customer_order_status</label></td>
<td><input type="text" placeholder="Customer_order_status" value="<?php echo $row['customer_order_status'] ; ?>" name="customer_order_status" id="customer_order_status" required="required"  /></td></tr>

<tr><td colspan="2"><input type="submit"  name="submit" id="submit" value="Update" />   <input type="button"   name="button" id="button" value="Cancel" onclick="window.location.href='customer_order_view.php'" />
</td></tr></table>
</form>

</div>

</body>

</html>