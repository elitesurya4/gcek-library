<?php

    $con=mysqli_connect("localhost","root","","librarygcek_cms");
    $con1=mysqli_connect("localhost","root","","librarygcek_suggestbooks");
    $con2=mysqli_connect("localhost","root","","librarygcek_opacmanual");

    if(mysqli_connect_error()){
        echo"<script>alert('cannot connect to the database');</script>";
        exit();
    }
?>