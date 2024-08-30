<?php require('CONFIG/connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <title>GCEK LIBRARY</title>
  <link rel="icon" href="CSS/tab-icon.png">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" > 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</head>
<!-------------Top Bar------------->
<header>
  <nav class="navbar navbar-inverse" id="bar">
      <div class="container-fluid">
          <ul class="nav navbar-nav navbar-right" id="left-1">
              <li><a href="index.php" class="navbar_link"><span class="material-icons" id="nav-icon">home</span>Home</a></li>
            </ul>
            <ul class="col nav navbar-nav navbar-right" id="left-2">
              <li><a href="https://gcekbpatna.ac.in/" class="navbar_link"><span class="material-icons" id="nav-icon">info</span>About&nbsp;GCEK</a></li>
            </ul>
            <ul class="col"></ul>
            <ul class="col"></ul>
            <ul class="col"></ul>
            <ul class="col"></ul>
            <ul class="col"></ul>
            <ul class="nav navbar-nav navbar-right" id="right-1">
              <li><a href="index.php" class="navbar_link-1"><span class="material-icons" id="nav-icon">public</span>www.library.gcekbpatna.ac.in</a></li>
            </ul>
      </div>
  </nav>
</header>
<!-------------Main Bar------------->
<div class="row"> 
  <div class="bgi">
  <h1 class="header-1">CENTRAL LIBRARY</h1>
  <h2 class="header-2">GOVERNMENT COLLEGE OF ENGINEERING KALAHANDI</h2>
  <h2 class="header-3">Libraries were full of ideas - perhaps the most dangerous and powerful of all weapons</h2>
  <h2 class="header-4">- SARAH J. MAAS</h2>
</div>
</div>
<!-------------Notice Section------------->
<nav class="navbar navbar-inverse" id="scrolling-text">
  <div class="container-fluid" id="cssmarquee">
    <button class="test-btn"><a href="noticeboard.php" class="test-btn2">Notice</a></button>
    <?php
    $sql_scroll = "SELECT * FROM scrollingnotice ORDER BY id LIMIT 1";
    $result_scroll = mysqli_query($con4,$sql_scroll);

    if(mysqli_num_rows($result_scroll)>0)
    {
      while($row_scroll = mysqli_fetch_array(($result_scroll)))
      {
        ?>
        <p><img class="img-fluid" src="CSS/new.gif"><a href = "<?php echo "CMS/src/" . $row_scroll['scroll_link'];?>" target="_blank"><?php echo $row_scroll['scroll_title']; ?></a></p>
        <?php
      }

    }
    ?>
  </div>
</nav>
<!-------------Navigation Section------------->
<div class="navigation-section">
  <button class="nav-btn1"><a href="index.php" class="nav-btn2">Home</a></button>
  <button class="nav-btn1"><a href="library-section.php" class="nav-btn2">Library&nbsp;Section</a></button>
  <button class="nav-btn1"><a href="library-services.php" class="nav-btn2">Library&nbsp;Services</a></button>
  <button class="nav-btn1"><a href="digital-library.php" class="nav-btn2">Digital&nbsp;Library</a></button>
  <button class="nav-btn1" id="nav-btn-1"><a href="staff-members.php" class="nav-btn2">Staff&nbsp;Members</a></button>
  <button class="nav-btn1" id="nav-btn-1"><a href="opac.php" class="nav-btn2">OPAC</a></button>
  <button class="nav-btn1" id="nav-btn-1"><a href="online-registration.php" class="nav-btn2">Online&nbsp;Registration</a></button>
  <button class="nav-btn1" id="nav-btn-1"><a href="e-newspaper.php" class="nav-btn2">e&nbsp;-&nbsp;newspapers</a></button>
  <button class="nav-btn1" id="nav-btn-1"><a href="Student-repository.php" class="nav-btn2">Student&nbsp;Repository</a></button>
  <button class="nav-btn1" id="nav-btn-1"><a href="request-books.php"class="nav-btn2">Suggest&nbsp;Books</a></button>

    <!-- The Modal -->
    <!-- <div id="my_Modal" class="modal"> -->
    <!-- Modal content -->
    <!-- <div class="modal-content"></div>  -->
    <!-- </div> -->
    <!-- <script src="JAVASCRIPT/modalbox.js"></script> -->

</div>
