<?php session_start(); ?>
<?php

require("db_connect.php");

$customer_details_id=$_POST['customer_details_id'];
$customer_details_name=$_POST['customer_details_name'];
$customer_details_contact=$_POST['customer_details_contact'];
$customer_details_address=$_POST['customer_details_address'];
$customer_details_email=$_POST['customer_details_email'];





$customer_details_password=$_POST['customer_details_password'];

$sql1= "SELECT * FROM login WHERE login_username ='".$_SESSION['uname']."' and login_password='".$customer_details_password."'";
        //echo $sql;

        $res1 = mysqli_query($conn,$sql1);

if(mysqli_num_rows($res1)>0)
{
        $sql = 'UPDATE `customer_details` SET 
     `customer_details_name`='."'$customer_details_name'".',
     `customer_details_contact`='."'$customer_details_contact'".',
     `customer_details_address`='."'$customer_details_address'".',
     `customer_details_email`='."'$customer_details_email'".'

     Where customer_details_id="'.$customer_details_id.'"';

    $result = mysqli_query($conn,$sql);

    if(! $result )
    {
        //die('Could not enter data: ' . mysqli_error($conn));

        echo '<script type="text/javascript">
        alert("Record Not Updated");
        window.location="profile.php";
        </script>';
    }
    else 
    {
        echo '<script type="text/javascript">
        alert("Record Updated Successfully");
        window.location="profile.php";
        </script>';
    }
    
}
else
{
    echo '<script type="text/javascript">
        alert("Password Incorrect We Can Not Update");
        window.location="profile.php";
        </script>';
    
    
}




//header('location:customer_details_view.php');

?>