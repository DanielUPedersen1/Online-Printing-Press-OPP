<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GPP</title>
</head>

<body>
   <center>
   <?php 
       
       session_start();
       
       $govt_user_username=$_SESSION['uname'];
       
      // echo $govt_user_username;
       
       require('db_connect.php');
       
       $sql="SELECT * FROM `govt_user` WHERE `govt_user_username`='$govt_user_username' ";
       
       $result=mysqli_query($conn,$sql);
       
       $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
       
       
       ?>
   
   
   
    <form action="password_update.php" method="post">
        <table>
            <tr>
                <td colspan="2" align="center"> Change password</td>
                
                <input type="hidden" name="govt_user_id" value="<?php echo $row['govt_user_id']?>">

            </tr>
            <tr>
                <td><lable>Username</lable></td>
                <td><input type="text" name="govt_user_username" value="<?php echo $row['govt_user_username']?>"> </td>
            </tr>
            <tr>
                <td><lable>Old Password</lable></td>
                <td><input type="password" name="oldpassword"></td>
            </tr>
            <tr>
                <td><lable>New Password</lable></td>
                <td><input type="password" name="newpassword"></td>
            </tr>
            <tr>
                <td><lable>Confirm Password</lable></td>
                <td><input type="password" name="cnew_password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
                <td><input type="button" name="button" value="Cancel"></td>
            </tr>
        </table>
    </form>
    </center>
</body>

</html>
