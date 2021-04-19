<?php session_start(); ?>

<?php

    include('db_connect.php');

    $admin_id=$_POST['admin_id'];

    $username=$_POST['admin_username'];

    $oldpassword=$_POST['oldpassword'];

    $newpassword=$_POST['newpassword'];

    $cnew_password=$_POST['cnew_password'];

    if($newpassword==$cnew_password)
    {
        $sql = "SELECT * FROM login WHERE login_username ='".$_SESSION['uname']."' and login_password='".$oldpassword."'";
        //echo $sql;

        $res = mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
        $login_id=$row['login_id'];
        //echo $login_id;

        if(mysqli_num_rows($res)>0)
        {
            $sql1 = "UPDATE login SET login_password = '".$cnew_password."',login_username='".$username."' WHERE login_id ='".$login_id."'";
            $res1 = mysqli_query($conn,$sql1);

            $sql2=" UPDATE `admin` SET `admin_username`='$username',`admin_password`='$cnew_password' WHERE `admin_id`='$admin_id' ";

            $res2 = mysqli_query($conn,$sql2);

            $_SESSION['uname']=$username;

        ?>
            <script>
            alert('Successfully Updated Your Password');
            window.location="index.php";
            </script>
        <?php
        }
        else
        {
        ?>
            <script>
            alert('Old Password Is Incorrect');
            window.location="changepassword.php";
            </script>
        <?php
        }
}
else
{
?>
        <script>
        alert('New Password And Confirm Password Does Not Match');
        window.location="changepassword.php";
        </script>
<?php
}

?>
