<?php

   require("db_connect.php");

  $product_details_image=$_FILES["product_details_image"]["name"];
  $target=$_FILES["product_details_image"]["tmp_name"];
  $imageFileType = pathinfo($product_details_image,PATHINFO_EXTENSION); //getting image extension
  if($imageFileType == "jpg" || $imageFileType == "JPG" || $imageFileType == "JPEG" || $imageFileType == "jpeg" || $imageFileType == "png" || $imageFileType == "PNG" 
  || $imageFileType == "gif" || $imageFileType == "GIF" ) 
  {
      if($imageFileType == "jpg" || $imageFileType == "JPG" || $imageFileType == "JPEG" || $imageFileType == "jpeg")
    {
      $src=imagecreatefromjpeg($target);
    } 
    if($imageFileType == "png" || $imageFileType == "PNG" )
    {
      $src=imagecreatefrompng($target);
    } 
    if($imageFileType == "gif" || $imageFileType == "GIF" )
    {
      $src=imagecreatefromgif($target);
    } 
    list($width_min,$height_min)=getimagesize($target); //fetching original image width and height  
    $newwidth_min=$width_min; //set compressing image width
    $newheight_min=$height_min; //equation for compresses image height
    $tmp_min=imagecreatetruecolor($newwidth_min,$newheight_min); //create frame for compress image
    imagecopyresampled($tmp_min,$src,0,0,0,0,$newwidth_min,$newheight_min,$width_min,$height_min); //compressing image
    imagejpeg($tmp_min,"photos/".$product_details_image,80);  
  }


//$product_details_id=$_POST['product_details_id'];
$product_category_id=$_POST['product_category_id'];
$form_details_id=$_POST['form_details_id'];
$product_details_name=$_POST['product_details_name'];
$product_details_quantity=$_POST['product_details_quantity'];
$product_details_description=$_POST['product_details_description'];
$product_details_price=$_POST['product_details_price'];
/*$product_details_image=$_POST['product_details_image'];*/

if($product_category_id=="" && $form_details_id=="")
{
   echo '<script type="text/javascript">
	alert("Please select any one of the option");
	window.location="product_details_form.php";
	</script>';
}
else
{
        $sql = "INSERT INTO `product_details` (`product_category_id`,`form_details_id`,`product_details_name`,`product_details_quantity`,`product_details_description`,`product_details_price`,`product_details_image`) VALUES ('$product_category_id','$form_details_id','$product_details_name','$product_details_quantity','$product_details_description','$product_details_price','$product_details_image')";

        $result = mysqli_query($conn,$sql);

        if(! $result)
        {
            //die('Could not enter data: ' .mysqli_error()); 
            echo '<script type="text/javascript">
            alert("Record Not Added");
            window.location="product_details_view.php";
            </script>';
        }
        else 
        {
            echo '<script type="text/javascript">
            alert("Record Added Successfully");
            window.location="product_details_view.php";
            </script>';
        }
        //header('location:index.php');
}
?>