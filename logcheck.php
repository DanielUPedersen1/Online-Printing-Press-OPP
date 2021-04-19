<?php  session_start();?>
<?php

    require('db_connection.php');

    $login_username=$_POST['login_username'];
    $login_password=$_POST['login_password'];

    $sql="SELECT * FROM login WHERE login_username='$login_username' and login_password='$login_password'";

    $result=mysqli_query($conn,$sql);

    if($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        $login_type=$row['login_type'];

        

        if($login_type=='admin')
        {
            $_SESSION['admin']=$login_username;
            header('location:admin/index.php');
        }
        else if($login_type=='govtuser')
        {
            $_SESSION['govtuser']=$login_username;
            
            header('location:govt-user/index.php');
        }
        else if($login_type=='customer')
        {
            $_SESSION['customer']=$login_username;
            
            header('location:customer/index.php');
        }
    }
    else
    {
        echo "<script>
            alert('Invalid Username and Password');
            window.location='index.php';
            </script>";
    }


?>
