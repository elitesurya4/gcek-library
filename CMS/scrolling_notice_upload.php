<?php require('connection.php');
session_start();
if(empty($_SESSION['logged_in']) || $_SESSION['logged_in'] == ''){
    header("location: login.php");
    die();
}

if(isset($_POST['scrolling_notice_upload'])){
    $scroll_title = $_POST['scroll_title'];
    $scroll_link = $_FILES['scroll_link']['name'];

    $query = "INSERT INTO scrollingnotice (scroll_title,scroll_link) VALUES ('$scroll_title', '$scroll_link')";
    $query_run = mysqli_query($con4,$query);

    if($query_run){
        move_uploaded_file($_FILES["scroll_link"]["tmp_name"],"NOTICE/".$_FILES["scroll_link"]["name"]);
        $_SESSION['status1'] = "Scrolling Notice Uploaded Successfully";
        header('location:index.php');
    }
    else{
        $_SESSION['status1'] = "Scrolling Notice Not Uploaded";
        header('Location: index.php');
    }

}

?>