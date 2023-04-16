<?php require('connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Login</title>
    <link rel="stylesheet" href="style_cms.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body id="cms_body"> 
    <section class="cms_form" method="POST">
        <div class="container-fluid">
             <div class="row" id="cms_row_id">
    <!------------------------START------------------------------->
                 <div class="col-lg-3">
                 </div>

                 <div class="col-lg-9 px-5 pt-3">
        <!---------------------------LOGO----------------------------------->                
                    <div class="row">
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-4" >
                            <img src="gcek_logo.png" class="img-fluid" id="logo_id" alt=""style="text-align:center;">
                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div>
                    <br>
    <!---------------------------HEADING----------------------------------->
                    <div class="col-lg-8" style="text-align:center;">
                        <h1 class="cms_heading">CENTRAL LIBRARY GCE KALAHANDI CMS LOGIN</h1>
                    </div>
                     <form action="login_details.php" method="POST">
    <!---------------------------USER-ID-------------------------------->
                         <div class="form-row" style="text-align:center;">
                             <div class="col-lg-8">
                                <input name="userid" type="text" placeholder="User Id" class="form-control my-3 p-2" required>
                             </div>
                         </div>
    <!---------------------------PASSWORD--------------------------------->
                         <div class="form-row" style="text-align:center;">
                             <div class="col-lg-8">
                                <input name="password" type="password" placeholder="Password" class="form-control my-3 p-2" required>
                             </div>
                         </div>
    <!------------------------------LOGIN-------------------------------------->                     
                         <div class="form-row" style="text-align:center;">
                             <div class="col-lg-8">
                                <button name="login" value="login" type="submit" id="form_button" class="login1 mt-2 mb-3">LOGIN</button>
                             </div>
                         </div>
                     </form>
    <!------------------------------END-------------------------------------->
                         <div class="col-lg-3">
                         </div>

    </section>
                 </div>
             </div>
        </div>
</body>
</html>