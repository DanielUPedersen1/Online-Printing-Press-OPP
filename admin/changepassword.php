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
       
       $admin_username=$_SESSION['uname'];
       
       require('db_connect.php');
       
       $sql="SELECT * FROM `admin` WHERE `admin_username`='$admin_username' ";
       
       $result=mysqli_query($conn,$sql);
       
       $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
       
       
       ?>
   
   
   
    <form action="password_update.php" method="post">
        <table>
            <tr>
                <td colspan="2" align="center"> Change password</td>
                
                <input type="hidden" name="admin_id" value="<?php echo $row['admin_id']?>">

            </tr>
            <tr>
                <td><lable>Username</lable></td>
                <td><input type="text" name="admin_username" value="<?php echo $row['admin_username']?>"></td>
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
