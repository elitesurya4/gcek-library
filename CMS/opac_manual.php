<?php require('connection.php');
session_start();
if(empty($_SESSION['logged_in']) || $_SESSION['logged_in'] == ''){
    header("location: login.php");
    die();
}

if(isset($_POST['opac_manual_upload'])){
    $opac_manual_file = $_FILES['opac_manual_file']['name'];

    $query = "INSERT INTO opacmanual(opac_manual_file) VALUES ('$opac_manual_file')";
    $query_run = mysqli_query($con2,$query);

    if($query_run){
        move_uploaded_file($_FILES["opac_manual_file"]["tmp_name"],"src/".$_FILES["opac_manual_file"]["name"]);
        $_SESSION['status'] = "File Uploaded Successfully";
        header('Location: index.php');
    }
    else{
        $_SESSION['status'] = "File Not Uploaded";
        header('Location: index.php');
    }
}

?>