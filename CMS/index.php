<?php require('connection.php');
session_start();
if(empty($_SESSION['logged_in']) || $_SESSION['logged_in'] == ''){
    header("location: login.php");
    die();
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = mysqli_query($con1,"DELETE FROM `basic_science` WHERE `id` = '$id'");
    $delete = mysqli_query($con1,"DELETE FROM `civil_engg` WHERE `id` = '$id'");
    $delete = mysqli_query($con1,"DELETE FROM `comp_sci_engg` WHERE `id` = '$id'");
    $delete = mysqli_query($con1,"DELETE FROM `electrical_engg` WHERE `id` = '$id'");
    $delete = mysqli_query($con1,"DELETE FROM `humanity` WHERE `id` = '$id'");
    $delete = mysqli_query($con1,"DELETE FROM `mech_engg` WHERE `id` = '$id'");
    $delete = mysqli_query($con1,"DELETE FROM `general` WHERE `id` = '$id'");
    $delete = mysqli_query($con1,"DELETE FROM `others` WHERE `id` = '$id'");

    $delete = mysqli_query($con2,"DELETE FROM `opacmanual` WHERE `id` = '$id'");

    $delete = mysqli_query($con3,"DELETE FROM `noticeboard` WHERE `id` = '$id'");

    $delete = mysqli_query($con4,"DELETE FROM `scrollingnotice` WHERE `id` = '$id'");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library CMS</title>
    <link rel="stylesheet" href="src\style.css">
    <script src="js\script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
<!-------------NAVBAR------------->
      <header>
        <nav class="navbar navbar-expand-lg navbar-dark" id="nav-bar">
            <div class="container-fluid">
                <div href="#" class="navbar-brand">
                    <img src="src\gcek_logo.png" width="70" alt="" class="d-inline-block align-middle">
                    <?php
                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
                        echo"
                        <a class='navbar-brand'>WELCOME ADMIN</a>
                        ";
                    }
                    ?>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
                        echo"
                        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                        <ul class='navbar-nav navbar-float' id='navbar'>
                            <li class='nav-item' id='nav-sign'><a class='nav-link' id='cust_btn1' href='logout.php'><h4>LOG&nbsp;OUT</h4></a></li>
                        </ul>
                        </div> 
                        ";
                    }
                ?>
            </div>
        </nav>
    </header>

<!----------MOBILE-SCREEN-SIDE-BAR------------>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-body">
        <div class="btn-group-vertical" id="theory-btn1">
            <button class="btn btn-secondary" id="side-btn" onclick="btn1_body()">NOTICE SECTION</button>
            <button class="btn btn-secondary" id="side-btn" onclick="btn2_body()">SCROLLING NOTICE</button>
            <button class="btn btn-secondary" id="side-btn" onclick="btn3_body()">SUGGEST BOOKS</button>
            <button class="btn btn-secondary" id="side-btn" onclick="btn4_body()">OPAC MANUAL</button>
        </div>
    </div>
</div>

<!------------SIDEBAR------------>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="theory-cont" style="overflow:hidden;">
            <div id="toolbox" class="justify-content-center">
                <div class="btn-group-vertical" id="theory-btn">
                    <button class="btn btn-secondary" id="side-btn" onclick="btn1_body()">NOTICE SECTION</button>
                    <button class="btn btn-secondary" id="side-btn" onclick="btn2_body()">SCROLLING NOTICE</button>
                    <button class="btn btn-secondary" id="side-btn" onclick="btn3_body()">SUGGEST BOOKS</button>
                    <button class="btn btn-secondary" id="side-btn" onclick="btn4_body()">OPAC MANUAL</button>
                </div>
            </div>
        </div>
        <div class="col-lg-9" id="side-cont">
            <div class="hidden-btn1">
                <span class="material-symbols-outlined" id="hidden-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                menu
                </span>
            </div>

<!-----------BUTTON-1--------------->            
<div id="side-body1">
    <h3 class="side-head"><b>NOTICE SECTION</b></h3>
    <hr>
    <div class = "container-fluid">
        <div class = "row row-height">
          <div class = "col side1">
            <p id="body1">
                <?php
                if(isset($_SESSION['status']) && $_SESSION != ''){
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?php echo $_SESSION['status'];?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <?php
                    unset($_SESSION['status']);
                }
                ?>
            <form action="noticeboard_upload.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                    <input name="notice_title" type="text" class="form-control" id="title" placeholder="Enter Title of the Notice">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="date" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                    <input name="notice_date" type="date" class="form-control" id="date">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="inputGroupFile01" class="col-sm-2 col-form-label">Notice File</label>
                    <div class="col-sm-10">
                    <input name="notice_file" type="file" class="custom-file-input" id="inputGroupFile01">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                    <button name="notice_file_upload" type="submit" class="btn btn-success">Upload</button>
                    </div>
                </div>
            </form>
            <br>

            <section id="noticeboard_sec">
            <table id="noticeboard" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>SL. NO.</th>
                        <th>TITLE</th>
                        <th>DATE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $display_query = "SELECT * FROM noticeboard";

                    $results = mysqli_query($con3,$display_query);
                    $count = mysqli_num_rows($results);

                    if($count>0){
                        while($data_row = mysqli_fetch_array($results,MYSQLI_ASSOC)){
                            ?>
                        <tr>
                            <td><?php echo $data_row['id']; ?></td>
                            <td><?php echo $data_row['notice_title']; ?></td>
                            <td><?php echo $data_row['notice_date']; ?></td>
                            <td>

                                <a href='<?php echo "NOTICE/" . $data_row['notice_file'];?>' class="btn btn-info" type="button" target="blank">VIEW</a>
                                <?php
                                echo "<a href='index.php?id=$data_row[id]' class='btn btn-danger' type='button'>DELETE</a>"
                                ?>
                            </td>

                        </tr>
                        <?php
                        }
                    }
                    ?>
                <tbody>
            </table>
            <script>
                $(document).ready(function() {
                $('#noticeboard').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                } );
            } );
            </script>
            </section>


            </p>
          </div>
        </div>
    </div>
</div>

<!-----------BUTTON-2--------------->            
<div id="side-body2">
    <h3 class="side-head"><b>SCROLLING NOTICE</b></h3>
    <hr>
    <div class = "container-fluid">
        <div class = "row row-height">
          <div class = "col side2">
            <p class="note note-light text-danger">
                <strong>Note:</strong> This scrolling notice is limit to one scolling notice only. Click the delete button before uploading a new scrolling notice. If there is no scrolling notice available then directly upload a new scrolling notice. View the file by clicking the view button.
            </p>
            <p id="body2">
            <?php
                if(isset($_SESSION['status1']) && $_SESSION != ''){
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?php echo $_SESSION['status1'];?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <?php
                    unset($_SESSION['status1']);
                }
                ?>
            <form action="scrolling_notice_upload.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                    <input name="scroll_title" type="text" class="form-control" id="title" placeholder="Enter Title of the Scrolling Notice">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="inputGroupFile01" class="col-sm-2 col-form-label">Notice File</label>
                    <div class="col-sm-10">
                    <input name="scroll_link" type="file" class="custom-file-input" id="inputGroupFile01">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                    <button id="scroll_submit_btn" name="scrolling_notice_upload" type="submit" class="btn btn-success">Upload</button>
                    </div>
                </div>
            </form>
            <br>

            <section id="noticeboard_sec">
            <table id="scrolling_notice" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>SL. NO.</th>
                        <th>TITLE</th>
                        <th>FILE NAME</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $display_query = "SELECT * FROM scrollingnotice";

                    $results = mysqli_query($con4,$display_query);
                    $count = mysqli_num_rows($results);

                    if($count>0){
                        while($data_row = mysqli_fetch_array($results,MYSQLI_ASSOC)){
                            ?>
                        <tr>
                            <td><?php echo $data_row['id']; ?></td>
                            <td><?php echo $data_row['scroll_title']; ?></td>
                            <td><?php echo $data_row['scroll_link']; ?></td>
                            <td>

                                <a href='<?php echo "NOTICE/" . $data_row['scroll_link'];?>' class="btn btn-info" type="button" target="blank">VIEW</a>
                                <?php
                                echo "<a href='index.php?id=$data_row[id]' class='btn btn-danger' type='button'>DELETE</a>"
                                ?>
                            </td>

                        </tr>
                        <?php
                        }
                    }
                    ?>
                <tbody>
            </table>
            <script>
                $(document).ready(function() {
                $('#scrolling_notice').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                } );
            } );
            </script>
            </section>
            </p>
          </div>
        </div>
    </div>
</div>

<!-----------BUTTON-3--------------->            
<div id="side-body3">
    <h3 class="side-head"><b>SUGGEST BOOKS</b></h3>
    <hr>
    <div class = "container-fluid">
        <div class = "row row-height">
          <div class = "col side3">
            <p id="body3">
            <section id="basic_science_sec">
            <h1>BASIC SCIENCE</h1>
            <table id="basic_science" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>SL. NO.</th>
                        <th>NAME</th>
                        <th>EMAIL ID</th>
                        <th>BOOK TITLE</th>
                        <th>BOOK AUTHOR</th>
                        <th>BOOK PUBLISHER</th>
                        <th>BOOK EDITION</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
                        $sql = "SELECT * FROM basic_science";
                        $result = $con1->query($sql);

                        if(!$result){
                            die("Invalid query: " . $con1->error);
                        }

                        while($row = $result->fetch_assoc()){
                            echo "<tr>
                                    <td>" . $row["id"] . "</td>
                                    <td>" . $row["name"] . "</td>
                                    <td>" . $row["email"] . "</td>
                                    <td>" . $row["book_title"] . "</td>
                                    <td>" . $row["book_author"] . "</td>
                                    <td>" . $row["book_publisher"] . "</td>
                                    <td>" . $row["book_edition"] . "</td>
                                    <td><a class='btn btn-danger' href='index.php?id=$row[id]'>Delete</a></td>
                                </tr>";       
                        }
                    }
                    ?>
                <tbody>
            </table>
            <script>
                $(document).ready(function() {
                $('#basic_science').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                } );
            } );
            </script>
            </section>

            <section id="civil_engg_sec">
            <h1>CIVIL ENGINEERING</h1>
            <table id="civil_engg" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>SL. NO.</th>
                        <th>NAME</th>
                        <th>EMAIL ID</th>
                        <th>BOOK TITLE</th>
                        <th>BOOK AUTHOR</th>
                        <th>BOOK PUBLISHER</th>
                        <th>BOOK EDITION</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
                        $sql = "SELECT * FROM civil_engg";
                        $result = $con1->query($sql);

                        if(!$result){
                            die("Invalid query: " . $con1->error);
                        }

                        while($row = $result->fetch_assoc()){
                            echo "<tr>
                                    <td>" . $row["id"] . "</td>
                                    <td>" . $row["name"] . "</td>
                                    <td>" . $row["email"] . "</td>
                                    <td>" . $row["book_title"] . "</td>
                                    <td>" . $row["book_author"] . "</td>
                                    <td>" . $row["book_publisher"] . "</td>
                                    <td>" . $row["book_edition"] . "</td>
                                    <td><a class='btn btn-danger' href='index.php?id=$row[id]'>Delete</a></td>
                                </tr>";       
                        }
                    }
                    ?>
                <tbody>
            </table>
            <script>
                $(document).ready(function() {
                $('#civil_engg').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                } );
            } );
            </script>
            </section>

            <section id="computer_sci_engg_sec">
            <h1>COMPUTER SCIENCE & ENGINEERING</h1>
            <table id="computer_sci_engg" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>SL. NO.</th>
                        <th>NAME</th>
                        <th>EMAIL ID</th>
                        <th>BOOK TITLE</th>
                        <th>BOOK AUTHOR</th>
                        <th>BOOK PUBLISHER</th>
                        <th>BOOK EDITION</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
                        $sql = "SELECT * FROM comp_sci_engg";
                        $result = $con1->query($sql);

                        if(!$result){
                            die("Invalid query: " . $con1->error);
                        }

                        while($row = $result->fetch_assoc()){
                            echo "<tr>
                                    <td>" . $row["id"] . "</td>
                                    <td>" . $row["name"] . "</td>
                                    <td>" . $row["email"] . "</td>
                                    <td>" . $row["book_title"] . "</td>
                                    <td>" . $row["book_author"] . "</td>
                                    <td>" . $row["book_publisher"] . "</td>
                                    <td>" . $row["book_edition"] . "</td>
                                    <td><a class='btn btn-danger' href='index.php?id=$row[id]'>Delete</a></td>
                                </tr>";       
                        }
                    }
                    ?>
                <tbody>
            </table>
            <script>
                $(document).ready(function() {
                $('#computer_sci_engg').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                } );
            } );
            </script>
            </section>

            <section id="electrical_engg_sec">
            <h1>ELECTRICAL ENGINEERING</h1>
            <table id="electrical_engg" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>SL. NO.</th>
                        <th>NAME</th>
                        <th>EMAIL ID</th>
                        <th>BOOK TITLE</th>
                        <th>BOOK AUTHOR</th>
                        <th>BOOK PUBLISHER</th>
                        <th>BOOK EDITION</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
                        $sql = "SELECT * FROM electrical_engg";
                        $result = $con1->query($sql);

                        if(!$result){
                            die("Invalid query: " . $con1->error);
                        }

                        while($row = $result->fetch_assoc()){
                            echo "<tr>
                                    <td>" . $row["id"] . "</td>
                                    <td>" . $row["name"] . "</td>
                                    <td>" . $row["email"] . "</td>
                                    <td>" . $row["book_title"] . "</td>
                                    <td>" . $row["book_author"] . "</td>
                                    <td>" . $row["book_publisher"] . "</td>
                                    <td>" . $row["book_edition"] . "</td>
                                    <td><a class='btn btn-danger' href='index.php?id=$row[id]'>Delete</a></td>
                                </tr>";       
                        }
                    }
                    ?>
                <tbody>
            </table>
            <script>
                $(document).ready(function() {
                $('#electrical_engg').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                } );
            } );
            </script>
            </section>

            <section id="humanity_sec">
            <h1>HUMANITY</h1>
            <table id="humanity" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>SL. NO.</th>
                        <th>NAME</th>
                        <th>EMAIL ID</th>
                        <th>BOOK TITLE</th>
                        <th>BOOK AUTHOR</th>
                        <th>BOOK PUBLISHER</th>
                        <th>BOOK EDITION</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
                        $sql = "SELECT * FROM humanity";
                        $result = $con1->query($sql);

                        if(!$result){
                            die("Invalid query: " . $con1->error);
                        }

                        while($row = $result->fetch_assoc()){
                            echo "<tr>
                                    <td>" . $row["id"] . "</td>
                                    <td>" . $row["name"] . "</td>
                                    <td>" . $row["email"] . "</td>
                                    <td>" . $row["book_title"] . "</td>
                                    <td>" . $row["book_author"] . "</td>
                                    <td>" . $row["book_publisher"] . "</td>
                                    <td>" . $row["book_edition"] . "</td>
                                    <td><a class='btn btn-danger' href='index.php?id=$row[id]'>Delete</a></td>
                                </tr>";       
                        }
                    }
                    ?>
                <tbody>
            </table>
            <script>
                $(document).ready(function() {
                $('#humanity').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                } );
            } );
            </script>
            </section>

            <section id="mech_engg_sec">
            <h1>MECHANICAL ENGINEERING</h1>
            <table id="mech_engg" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>SL. NO.</th>
                        <th>NAME</th>
                        <th>EMAIL ID</th>
                        <th>BOOK TITLE</th>
                        <th>BOOK AUTHOR</th>
                        <th>BOOK PUBLISHER</th>
                        <th>BOOK EDITION</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
                        $sql = "SELECT * FROM mech_engg";
                        $result = $con1->query($sql);

                        if(!$result){
                            die("Invalid query: " . $con1->error);
                        }

                        while($row = $result->fetch_assoc()){
                            echo "<tr>
                                    <td>" . $row["id"] . "</td>
                                    <td>" . $row["name"] . "</td>
                                    <td>" . $row["email"] . "</td>
                                    <td>" . $row["book_title"] . "</td>
                                    <td>" . $row["book_author"] . "</td>
                                    <td>" . $row["book_publisher"] . "</td>
                                    <td>" . $row["book_edition"] . "</td>
                                    <td><a class='btn btn-danger' href='index.php?id=$row[id]'>Delete</a></td>
                                </tr>";       
                        }
                    }
                    ?>
                <tbody>
            </table>
            <script>
                $(document).ready(function() {
                $('#mech_engg').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                } );
            } );
            </script>
            </section>

            <section id="general_sec">
            <h1>GENERAL</h1>
            <table id="general" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>SL. NO.</th>
                        <th>NAME</th>
                        <th>EMAIL ID</th>
                        <th>BOOK TITLE</th>
                        <th>BOOK AUTHOR</th>
                        <th>BOOK PUBLISHER</th>
                        <th>BOOK EDITION</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
                        $sql = "SELECT * FROM general";
                        $result = $con1->query($sql);

                        if(!$result){
                            die("Invalid query: " . $con1->error);
                        }

                        while($row = $result->fetch_assoc()){
                            echo "<tr>
                                    <td>" . $row["id"] . "</td>
                                    <td>" . $row["name"] . "</td>
                                    <td>" . $row["email"] . "</td>
                                    <td>" . $row["book_title"] . "</td>
                                    <td>" . $row["book_author"] . "</td>
                                    <td>" . $row["book_publisher"] . "</td>
                                    <td>" . $row["book_edition"] . "</td>
                                    <td><a class='btn btn-danger' href='index.php?id=$row[id]'>Delete</a></td>
                                </tr>";       
                        }
                    }
                    ?>
                <tbody>
            </table>
            <script>
                $(document).ready(function() {
                $('#general').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                } );
            } );
            </script>
            </section>

            <section id="others_sec">
            <h1>OTHERS</h1>
            <table id="others" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>SL. NO.</th>
                        <th>NAME</th>
                        <th>EMAIL ID</th>
                        <th>BOOK TITLE</th>
                        <th>BOOK AUTHOR</th>
                        <th>BOOK PUBLISHER</th>
                        <th>BOOK EDITION</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
                        $sql = "SELECT * FROM others";
                        $result = $con1->query($sql);

                        if(!$result){
                            die("Invalid query: " . $con1->error);
                        }

                        while($row = $result->fetch_assoc()){
                            echo "<tr>
                                    <td>" . $row["id"] . "</td>
                                    <td>" . $row["name"] . "</td>
                                    <td>" . $row["email"] . "</td>
                                    <td>" . $row["book_title"] . "</td>
                                    <td>" . $row["book_author"] . "</td>
                                    <td>" . $row["book_publisher"] . "</td>
                                    <td>" . $row["book_edition"] . "</td>
                                    <td><a class='btn btn-danger' href='index.php?id=$row[id]'>Delete</a></td>
                                </tr>";       
                        }
                    }
                    ?>
                <tbody>
            </table>
            <script>
                $(document).ready(function() {
                $('#others').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                } );
            } );
            </script>
            </section>
            </p>
          </div>
        </div>
    </div>
</div>

<!-----------BUTTON-4--------------->            
<div id="side-body4">
    <h3 class="side-head"><b>OPAC MANUAL</b></h3>
    <hr>
    <div class = "container-fluid">
        <div class = "row row-height">
          <div class = "col side4">
          <p class="note note-light text-danger">
                <strong>Note:</strong> Before uploading a new opac user manual. First click the delete button to delete the old one and reupload the new opac user manual by clicking the update button. View the file by clicking the view button.
            </p>
            <p id="body4">
            <?php
            if(isset($_SESSION['status']) && $_SESSION != ''){
                ?>

                <div class="alert alert-success" role="alert">
                Hey! <?php echo $_SESSION['status']; ?>
                </div>
                <?php
                unset($_SESSION['status']);
            }
            ?>
            <form action="opac_manual.php" method="POST" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">TITLE</th>
                        <th scope="col">SELECT FILE</th>
                        <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Opac Manual</td>
                        <td><input name="opac_manual_file" type="file" class="custom-file-input" id="inputGroupFile01"></td>
                        <td>
                            <button type="submit" name="opac_manual_upload" class='btn btn-success' href=''>Update</button>

                            <?php
                            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
                                $sql = "SELECT * FROM opacmanual";
                                $result = $con2->query($sql);

                                if(!$result){
                                    die("Invalid query: " . $con2->error);
                                }

                                while($row = $result->fetch_assoc()){
                                    echo " <a class='btn btn-danger' href='index.php?id=$row[id]'>Delete</a>";
                                }
                            }
                            ?>
                            <?php
                            if(mysqli_num_rows($result)>0){
                                foreach($result as $row) {
                                    ?>
                                    <a class='btn btn-info' href='<?php echo "src/" . $row['opac_manual_file'];?>' target="blank">View</a>
                            <?php
                                }
                            }
                            ?>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            </p>
          </div>
        </div>
    </div>
</div>

<!--------------END------------>
        </div>
    </div>
</div>
<!------------FOOTER------------>
<footer class="text-center text-lg-start" id="footer-section">
    <div class="container-fluid text-center pt-4 pb-0">
  <section class="pt-0" id="internal-footer">
    <div class="row d-flex">
      <div class="col">
        <div class="">
          <p><a class="text-white" href="https://gcekbpatna.ac.in/">Copyrights © <script> document.write(new Date().getFullYear());</script> GOVERNMENT COLLEGE OF ENGINEERING KALAHANDI</a> - All Rights Reserved<br><br></p>
        </div>
      </div>
    </div>
  </section>
  
  </footer> 
</body>
</html>