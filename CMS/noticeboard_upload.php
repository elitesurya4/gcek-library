<?php require('connection.php');
session_start();
if(empty($_SESSION['logged_in']) || $_SESSION['logged_in'] == ''){
    header("location: login.php");
    die();
}

if(isset($_POST['notice_file_upload'])){
    $notice_title = $_POST['notice_title'];
    $notice_date = $_POST['notice_date'];
    $notice_file = $_FILES['notice_file']['name'];

    $query = "INSERT INTO noticeboard (notice_title,notice_date,notice_file) VALUES ('$notice_title', '$notice_date', '$notice_file')";
    $query_run = mysqli_query($con3,$query);

    if($query_run){
        move_uploaded_file($_FILES["notice_file"]["tmp_name"],"NOTICE/".$_FILES["notice_file"]["name"]);
        $_SESSION['status'] = "Notice Uploaded Successfully";
        header('location:index.php');
    }
    else{
        $_SESSION['status'] = "Notice Not Uploaded";
        header('Location: index.php');
    }

}

?>