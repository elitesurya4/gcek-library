<?php
$servername = "localhost";
$username = "root";
$password = "";
$librarygcek_cms = "librarygcek_cms";
$librarygcek_suggestbooks = "librarygcek_suggestbooks";
$librarygcek_opacmanual = "librarygcek_opacmanual";
$librarygcek_noticeboard = "librarygcek_noticeboard";
$librarygcek_scrollingnotice = "librarygcek_scrollingnotice";




    $con=mysqli_connect($servername,$username,$password,$librarygcek_cms);
    $con1=mysqli_connect($servername,$username,$password,$librarygcek_suggestbooks);
    $con2=mysqli_connect($servername,$username,$password,$librarygcek_opacmanual);
    $con3=mysqli_connect($servername,$username,$password,$librarygcek_noticeboard);
    $con4=mysqli_connect($servername,$username,$password,$librarygcek_scrollingnotice);

    if(mysqli_connect_error()){
        echo"<script>alert('cannot connect to the database');</script>";
        exit();
    }
?>