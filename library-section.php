<?php require('CMS/connection.php');
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
  <div id="my_Modal" class="modal">
  
    <!-- Modal content -->
    <div class="modal-content">
  </div> 
  </div>
  <script src="JAVASCRIPT/modalbox.js"></script>
  </div>
<!-------------ABOUT SECTION------------->
<div class="about-link">
    <p class="wiki-link">
        <a href="library-section.php" id="wiki-1">ABOUT&nbsp;LIBRARY</a>
    </p>
</div>
<div class="intro-link">
    <p>The Central Library of <b>Government College of Engineering Kalahandi</b> is established in the year 2009 to foster literacy of all kinds. Since its inception, the library is providing academic services to Under-Graduate/Post-Graduate students, research scholars, faculty members and staff members of various departments and performing the role of being a lifeline of the institute.<br><br>
        This Bookhouse of GCEK has around <b>16,000 books</b> spanning over the technical fields of Electrical Engineering, Computer Science & Engineering, Civil Engineering and Mechanical Engineering. Besides this, the Bookhouse also has a rich collection of books in the area of Humanities, Basic Science, General studies & Literature. Apart from text books, around <b>1600 Journals</b> are accessible for research activities. The library also houses good volumes of standard reference books. All reputed magazines, newspapers are accessible throughout the year.<br><br> The Library is well equipped with around 12PC’s with a good internet facility, a reprographic section with 1 copier machine & 2 printers. Lot’s of e-resources & information are available in the form of CD-ROMs, DVD-ROMs, online databases, standards, thesis, reports, etc.<br><br>
        Currently, there are 4 working members present in the library including Professor In–Charge who acts as the head of the central library.<br><br>
        In addition to this, the library has a well-arranged seating capacity in the reading room for the students. The books in the library are organized in principled-manner (DDC 23rd edition) in racks having separate codes for each department.<br><br>
        The library of GCEK also developed a Digital Library for the ease of students & faculty members. GCEK Central Library is automated with Integrated library management software KOHA from 2021. This digital library can be used widely inside the campus premises.
    </p> 
</div>
<!-------------ACCORDION SECTION------------->
<div class="wrapper">
     <!-------------ACCORDIAN HEADING 1------------->
     <div class="parent-tab">
        <input type="radio" name="tab" id="tab-1">
        <label for="tab-1">
            <span>BASIC SCIENCE & HUMANITIES SECTION</span>
            <div class="accord-icon"><i class="fas fa-angle-up"></i></i></div>
        </label>
        <div class="content">
            <p>Central Library GCEK Kalahandi has a wide collection of books and reference books related to the field of Basic Science & Humanities. In this section books are according to their given class numbers.<br><b>Class No. ~ </b>003 to 910</p>
        </div>
    </div>
     <!-------------ACCORDIAN HEADING 2------------->
     <div class="parent-tab">
        <input type="radio" name="tab" id="tab-2">
        <label for="tab-2">
            <span>CIVIL ENGINEERING SECTION</span>
            <div class="accord-icon"><i class="fas fa-angle-up"></i></i></div>
        </label>
        <div class="content">
            <p>In the Civil engineering section of Central Library GCE Kalahandi there is a huge collection of Text & Reference Books. The books in this section are kept in an order of their given class number.<br><b>Class No. ~ </b>301.31 to 910.285</p>
        </div>
    </div>
    <!-------------ACCORDIAN HEADING 3------------->
    <div class="parent-tab">
        <input type="radio" name="tab" id="tab-3">
        <label for="tab-3">
            <span>COMPUTER SCIENCE & ENGINEERING SECTION</span>
            <div class="accord-icon"><i class="fas fa-angle-up"></i></div>
        </label>
        <div class="content">
            <p>Varieties of books & reference books based on the field of Computer Science & Engineering are available at GCE Kalahandi. The books in this section are arranged according to their given class numbers.<br><b>Class No. ~ </b>001.64 to 681.2</p>
        </div>
    </div>
    <!-------------ACCORDIAN HEADING 4------------->
    <div class="parent-tab">
        <input type="radio" name="tab" id="tab-4">
        <label for="tab-4">
            <span>ELECTRICAL ENGINEERING SECTION</span>
            <div class="accord-icon"><i class="fas fa-angle-up"></i></div>
        </label>
        <div class="content">
            <p>A large collection of books & reference books on the field of Electrical Engineering are available at the central library of GCE Kalahandi. The books in Electrical Engineering sections are kept according to their given class numbers.<br><b>Class No. ~ </b>004.16 to 681.2</p>
        </div>
    </div>
        
            <!-------------ACCORDIAN HEADING 5------------->
    <div class="parent-tab">
        <input type="radio" name="tab" id="tab-5">
        <label for="tab-5">
            <span>MECHANICAL ENGINEERING SECTION</span>
            <div class="accord-icon"><i class="fas fa-angle-up"></i></i></div>
        </label>
        <div class="content">
            <p>Books and reference books related to the field of Mechanical Engineering are available at Central Library of GCE Kalahandi. The arrangement of the books in this section of Mechanical Engineering is done according to their given class number. <br><b>Class No. ~ </b>519.56 to 681.2</p>
        </div>
    </div>
      
      
        <!-------------ACCORDIAN HEADING 6------------->
        <div class="parent-tab">
        <input type="radio" name="tab" id="tab-6">
        <label for="tab-6">
            <span>REPROGRAPHIC SECTION</span>
            <div class="accord-icon"><i class="fas fa-angle-up"></i></i></div>
        </label>
        <div class="content">
            <p>The Central Library GCE KALAHANDI has a reprographic section which provides easy access to reprographic services & facilities to their students & faculty members, which enables them to reproduce required materials from books and journals. The reprograpic section consists of one Copier Machine & two Printers.</p>
        </div>
    </div>
</div>
<!-----------FOOTER SECTION----------->
<footer>
    <div class="row" id="footer-row">
        <div class="col" id="footer-col">
            <h3>GCEK LIBRARY GOOGLE MAP</h3>
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15004.951177114173!2d83.10630481057814!3d19.914381742444927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a24ef3382020aa3%3A0x6720328dfbfd451a!2sGovernment%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1640851692727!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col" id="footer-col-1">
            <h3>CONTACT US</h3>
            <p>CENTRAL LIBRARY<br>GCE KALAHANDI<br>AT/PO- Bandopala, Bhawanipatna<br>Dist- Kalahandi<br>Odisha<br>Pin- 766002</p>
            <div class="email-id">
                <a href="mailto:librarian@gcekbpatna.ac.in">librarian@gcekbpatna.ac.in</a>
            </div>
            <!-- <div class="email-id">
                <a href="mailto:info@gcekbpatna.ac.in">info@gcekbpatna.ac.in</a>
            </div> -->
            <p>+91 9692383708</p>
        </div>
        <div class="col" id="footer-link">
            <h3>LINKS</h3>
            <a href="index.php">Home</a><br>
            <a href="library-section.php">Library&nbsp;Section</a><br>
            <a href="library-services.php">Library&nbsp;Services</a><br>
            <a href="digital-library.php">Digital Library</a><br>
            <a href="staff-members.php">Staff&nbsp;Members</a><br>
            <a href="opac.php">OPAC</a><br>
            <a href="online-registration.php">Online&nbsp;Registration</a><br>
            <a href="e-newspaper.php">e&nbsp;-&nbsp;newspapers</a><br>
            <a href="Student-repository.php">Student&nbsp;Repository</a><br>
            <a href="request-books.php">Suggest Books</a><br>
        </div>
        <div class="col" id="footer-social">
            <h3>SOCIAL MEDIA</h3>
            <div class="social-icons">
                <i class="fab fa-facebook"></i>
                <a href="https://www.instagram.com/gcek.library/" target="blank"><i class="fab fa-instagram"></i></a>
                <i class="fab fa-youtube"></i>
                <i class="fab fa-google"></i>
                <div class="footer-cookies">

                  <?php
                $query = "SELECT * FROM opacmanual";
                $query_run = mysqli_query($con2,$query);
                ?>
                <?php
                if(mysqli_num_rows($query_run)>0){
                  foreach($query_run as $row)
                  {
                    ?>
                    <div class="download-btn"><a href="#" class="download-btn1"><i class="fa fa-download"></i></a><a class="download-btn2" id="download-btn3" href="<?php echo "CMS/src/" . $row['opac_manual_file'];?>">OPAC&nbsp;Manual</a></i></div>
                    <?php
                  }
                }
                ?>

                <div class="privacy"><a class="privacy2" id="privacy3" href="privacy.html">Privacy&nbsp;Policy</a></div>
                <div class="disclaimer"><a class="boat" id="My"><h4 class="disclaimer2" id="disclaimer3" href="#myModal10">Disclaimer</h4></a></div>
                </div>
                <!-- <div class="page-viewers"><div class="visitor"><h6>VIEWERS&nbsp;:</h6></div><div class="visitor-counter"><i class="fa fa-eye" id="visitor-eye"></i></div><div class="website-counter" id="count"></div></div>
                <script src="JAVASCRIPT/visitors.js"></script> -->
            </div>
        </div>
        <div class="modal" id="myModal10">
          <div class="modal-content">
            <div class="modal-body">
             <p class="disclaimer_content">A collection of publicly accessible, institutionally provided, donated, or publisher-managed contents may be found at CENTRAL LIBRARY GCE KALAHANDI. The vast majority of these contents are hosted by and accessed via the appropriate sources. The appropriate organisation is responsible for the authenticity, relevance, completeness, accuracy, reliability, and suitability of these contents; CENTRAL LIBRARY GCE KALAHANDI has no obligation or liability in this regard.</p>
             <span class="close" id="disclaimer_close"><button id="dis_close">OK</button></span>
            </div>
          </div>
          <script src="JAVASCRIPT/lightbox.js"></script>  
        </div>
        <hr class="footer-hr">
    <p class="copyright" id="copy">Copyrights © <script> document.write(new Date().getFullYear());</script> GOVERNMENT COLLEGE OF ENGINEERING KALAHANDI</p>
    <p class="copyright-1" id="copy-1">Website Designed & Developed by <a href="https://elitesurya4.github.io/portfolio/" id="suryanshu" target="blank">Suryanshu Patnaik </a> & <a href="https://s-2001-star.github.io/portfolio/" id="suprita" target="blank">Suprita Panda</a> (ELECTRICAL BATCH OF 2019-23) - All Rights Reserved</p>    </div>
  </footer> 
  </body>
  </html>