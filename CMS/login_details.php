<?php

require('connection.php');
session_start();

if(isset($_POST['login']))
{
    $query = "SELECT * FROM `cmslogin_users` WHERE `userid` = '$_POST[userid]'";
    $result = mysqli_query($con,$query);

    if($result){
        if(mysqli_num_rows($result)==1){
            $result_fetch=mysqli_fetch_assoc($result);
            if($_POST['password'] == $result_fetch['password']){
                $_SESSION['logged_in']=true;
                $_SESSION['userid']=$result_fetch['userid'];
                header("location: index.php");
            }
            else{
                echo"
                <script>
                alert('Incorrect Password');
                window.location.href='login.php';
                </script>";
            }
        }
        else{
            echo"
            <script>
            alert('Incorrect User ID');
            window.location.href='login.php';
            </script>";
        }
    }
    else{
        echo"
        <script>
        alert('Cannot Run Query');
        window.location.href='login.php';
        </script>";
    }
}
?>