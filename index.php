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
</div>
<!-------------ABOUT SECTION------------->
<div class="about">
  <p class="wiki">
      <a href="library-section.php" id="wiki-1">ABOUT&nbsp;LIBRARY</a>
  </p>
</div>
<div class="intro">
    <p>The Central Library of <b>Government College of Engineering Kalahandi</b> is established in the year 2009 to foster literacy of all kinds. Since its inception, the library is providing academic services to Under-Graduate/Post-Graduate students, research scholars, faculty members and staff members of various departments and performing the role of being a lifeline of the institute. This Bookhouse of GCEK has around <b>16,000 books</b> spanning over the technical fields of Electrical Engineering, Computer Science & Engineering, Civil Engineering and Mechanical Engineering. Besides this, the Bookhouse also has a rich collection of books in the area of Humanities, Basic Science, General studies & Literature. Apart from text books, around <b>1600 Journals</b> are accessible for research activities. The library also houses good volumes of standard reference books. All reputed magazines, newspapers are accessible throughout the year. <a href="library-section.php">Read more</a></p>
</div>
<!-------------NEWS SECTION------------->
<div class="news-sec">
  <div class="news"></div>
  <div class="news-1"></div>
  <div class="news-2"></div>
  <div class="news-3" ><a id="news-4"  href="https://news.google.com/topics/CAAqKggKIiRDQkFTRlFvSUwyMHZNRFp0Y1RjU0JXVnVMVWRDR2dKSlRpZ0FQAQ?hl=en-IN&gl=IN&ceid=IN%3Aen", target="blank"><h2 class="news-heading">CURRENT NEWS</h2></a></div>
  <div class="news-icons" id="icon-news"><a href="https://news.google.com/topics/CAAqKggKIiRDQkFTRlFvSUwyMHZNRFp0Y1RjU0JXVnVMVWRDR2dKSlRpZ0FQAQ?hl=en-IN&gl=IN&ceid=IN%3Aen", target="blank"><i class="col far fa-newspaper"></i></a></div>
  <div class="news-rss" id="rss">
  <script src="JAVASCRIPT/news.js"></script> 
  <script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script> 
  </div>
</div>
<!-------------QUICK LINKS SECTION------------->
<div class="quick-sec">
<div class="quick"></div>
<div class="quick-1"></div>
<div class="quick-2"></div>
<div class="quick-3"><a class="boat" id="My"><h2 href="#myModal9" id="quick-heading">QUICK LINKS</h2></a></div>
<div class="quick-icons" id="icon-quick"><i class="fas fa-globe"></i></div>
<div class="modal" id="myModal9">
  <div class="modal-content">
    <span class="close">&times;</span>
      <a class="modal-heading" id="modal-head_id"><i class="fa fa-book" id="book-logo"></i><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e-&nbsp;RESOURCES</a>
      <br>
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">VIDWAN EXPERT DATABASE & NATIONAL<br>RESEARCHER'S NETWORK:</a><br><a href="https://vidwan.inflibnet.ac.in/" class="scroll-link" id="scroll-link_id">https://vidwan.inflibnet.ac.in/</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">NPTEL:</a><br><a href="https://nptel.ac.in/" class="scroll-link" id="scroll-link_id">https://nptel.ac.in</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">SPOKEN TUTORIAL:</a><br><a href="https://spoken-tutorial.org/" class="scroll-link" id="scroll-link_id">https://spoken-tutorial.org</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">NATIONAL DIGITAL LIBRARY:</a><br><a href="https://ndl.iitkgp.ac.in/" class="scroll-link" id="scroll-link_id">https://ndl.iitkgp.ac.in</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">WORLD LECTURE PROJECT:</a><br><a href="https://world-lecture-project.org/" class="scroll-link" id="scroll-link_id">https://world-lecture-project.org</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">COURSERA:</a><br><a href="https://www.coursera.org/" class="scroll-link" id="scroll-link_id">https://www.coursera.org</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">UNACADEMY:</a><br><a href="https://unacademy.com/" class="scroll-link" id="scroll-link_id">https://unacademy.com</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">ONLINE COURSES:</a><br><a href="https://www.onlinecourses.com/" class="scroll-link" id="scroll-link_id">https://www.onlinecourses.com</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">DIGITAL DEFYND:</a><br><a href="https://digitaldefynd.com/" class="scroll-link" id="scroll-link_id">https://digitaldefynd.com</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">WORLD e-BOOK LIBRARY:</a><br><a href="http://community.worldlibrary.in/" class="scroll-link" id="scroll-link_id">http://community.worldlibrary.in</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">MANY BOOKS (NOVELS & STORIES):</a><br><a href="https://manybooks.net/" class="scroll-link" id="scroll-link_id">https://manybooks.net</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">MIT OPEN COURSEWARE:</a><br><a href="https://ocw.mit.edu/" class="scroll-link" id="scroll-link_id">https://ocw.mit.edu</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">DIRECTORY OF OPEN ACCESS JOURNALS (DOAJ):</a><br><a href="https://www.doaj.org/" class="scroll-link" id="scroll-link_id">https://www.doaj.org</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">ARXIV:</a><br><a href="https://arxiv.org/" class="scroll-link" id="scroll-link_id">https://arxiv.org</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">LECTURE NOTES:</a><br><a href="https://lecturenotes.in/" class="scroll-link" id="scroll-link_id">https://lecturenotes.in</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">OPEN EDUCATION CONSORTIUM:</a><br><a href="https://www.oeconsortium.org/" class="scroll-link" id="scroll-link_id">https://www.oeconsortium.org</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">OPEN CULTURE:</a><br><a href="https://www.openculture.com/" class="scroll-link" id="scroll-link_id">https://www.openculture.com</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">TEACHER PORTAL (CLASSROOM RESOURCES):</a><br><a href="http://www.teachersofindia.org/" class="scroll-link" id="scroll-link_id">http://www.teachersofindia.org</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">OPEN TEXTBOOKS FOR K12 (SIYAVULA):</a><br><a href="https://www.siyavula.com/" class="scroll-link" id="scroll-link_id">https://www.siyavula.com</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">YALE UNIVERSITY:</a><br><a href="https://oyc.yale.edu/" class="scroll-link" id="scroll-link_id">https://oyc.yale.edu</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">OPEN MICHIGAN:</a><br><a href="https://open.umich.edu/" class="scroll-link" id="scroll-link_id">https://open.umich.edu</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">NATIONAL KNOWLEDGE NETWORK:</a><br><a href="https://nkn.gov.in/" class="scroll-link" id="scroll-link_id">https://nkn.gov.in</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">INFOPORT:</a><br><a href="https://infoport.inflibnet.ac.in/" class="scroll-link" id="scroll-link_id">https://infoport.inflibnet.ac.in</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">A-VIEW:</a><br><a href="http://aview.in/" class="scroll-link" id="scroll-link_id">http://aview.in</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">LEGAL INFORMATION INSTITUTE OF INDIA:</a><br><a href="http://liiofindia.org/" class="scroll-link" id="scroll-link_id">http://liiofindia.org</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">SHODHGANGA-A RESERVOIR OF INDIAN THESES:</a><br><a href="https://shodhganga.inflibnet.ac.in/" class="scroll-link" id="scroll-link_id">https://shodhganga.inflibnet.ac.in</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">TRAINING AND COURSES BY TATA STEEL:</a><br><a href="http://www.capabilitydevelopment.org/" class="scroll-link" id="scroll-link_id">http://www.capabilitydevelopment.org</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">LIBRIVOX - AUDIO BOOKS:</a><br><a href="https://librivox.org/" class="scroll-link" id="scroll-link_id">https://librivox.org</a>
      <hr id="modal-hr">
      <i class="fa fa-book-open" id="book-icon"></i><a class="scroll-1_modal" id="scroll-1-id" target="blank">OPEN ACCESS THESIS & DISSERTATIONS:</a><br><a href="https://oatd.org/" class="scroll-link" id="scroll-link_id">https://oatd.org</a>
      <script src="JAVASCRIPT/lightbox.js"></script>  
</div> 
</div>
<div class="scrolling-news" id="scroll-id">
  <marquee scroll-delay="300" direction="up" class="marq">
  <a class="scroll-1" id="scroll-1_id" target="blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VIDWAN EXPERT DATABASE<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&<br>&nbsp;&nbsp;&nbsp;NATIONAL RESEARCHER'S NETWORK:</a><br><a href="https://vidwan.inflibnet.ac.in/" class="scroll-2" id="scroll-2_id" >https://vidwan.inflibnet.ac.in/</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">NPTEL:</a><br><a href="https://nptel.ac.in/" class="scroll-2" id="scroll-2_id" >https://nptel.ac.in</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">SPOKEN TUTORIAL:</a><br><a href="https://spoken-tutorial.org/" class="scroll-2" id="scroll-2_id" >https://spoken-tutorial.org</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">NATIONAL DIGITAL LIBRARY:</a><br><a href="https://ndl.iitkgp.ac.in/" class="scroll-2" id="scroll-2_id" >https://ndl.iitkgp.ac.in</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">WORLD LECTURE PROJECT:</a><br><a href="https://world-lecture-project.org/" class="scroll-2" id="scroll-2_id" >https://world-lecture-project.org</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">COURSERA:</a><br><a href="https://www.coursera.org/" class="scroll-2" id="scroll-2_id" >https://www.coursera.org</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">UNACADEMY:</a><br><a href="https://unacademy.com/" class="scroll-2" id="scroll-2_id" >https://unacademy.com</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">ONLINE COURSES:</a><br><a href="https://www.onlinecourses.com/" class="scroll-2" id="scroll-2_id" >https://www.onlinecourses.com</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">DIGITAL DEFYND:</a><br><a href="https://digitaldefynd.com/" class="scroll-2" id="scroll-2_id" >https://digitaldefynd.com</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">WORLD e-BOOK LIBRARY:</a><br><a href="http://community.worldlibrary.in/" class="scroll-2" id="scroll-2_id" >http://community.worldlibrary.in</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">MANY BOOKS (NOVELS & STORIES):</a><br><a href="https://manybooks.net/" class="scroll-2" id="scroll-2_id" >https://manybooks.net</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">MIT OPEN COURSEWARE:</a><br><a href="https://ocw.mit.edu/" class="scroll-2" id="scroll-2_id" >https://ocw.mit.edu</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">OPEN ACCESS RESEARCH (DOAJ):</a><br><a href="https://www.doaj.org/" class="scroll-2" id="scroll-2_id" >https://www.doaj.org</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">ARXIV:</a><br><a href="https://arxiv.org/" class="scroll-2" id="scroll-2_id" >https://arxiv.org</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">LECTURE NOTES:</a><br><a href="https://lecturenotes.in/" class="scroll-2" id="scroll-2_id" >https://lecturenotes.in</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">OPEN EDUCATION CONSORTIUM:</a><br><a href="https://www.oeconsortium.org/" class="scroll-2" id="scroll-2_id" >https://www.oeconsortium.org</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">OPEN CULTURE:</a><br><a href="https://www.openculture.com/" class="scroll-2" id="scroll-2_id" >https://www.openculture.com</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">TEACHER PORTAL (CLASSROOM RESOURCES):</a><br><a href="http://www.teachersofindia.org/" class="scroll-2" id="scroll-2_id" >http://www.teachersofindia.org</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">OPEN TEXTBOOKS FOR K12 (SIYAVULA):</a><br><a href="https://www.siyavula.com/" class="scroll-2" id="scroll-2_id" >https://www.siyavula.com</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">YALE UNIVERSITY:</a><br><a href="https://oyc.yale.edu/" class="scroll-2" id="scroll-2_id" >https://oyc.yale.edu</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">OPEN MICHIGAN:</a><br><a href="https://open.umich.edu/" class="scroll-2" id="scroll-2_id" >https://open.umich.edu</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">NATIONAL KNOWLEDGE NETWORK:</a><br><a href="https://nkn.gov.in/" class="scroll-2" id="scroll-2_id" >https://nkn.gov.in</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">INFOPORT:</a><br><a href="https://infoport.inflibnet.ac.in/" class="scroll-2" id="scroll-2_id" >https://infoport.inflibnet.ac.in</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">A-VIEW:</a><br><a href="http://aview.in/" class="scroll-2" id="scroll-2_id" >http://aview.in</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">LEGAL INFORMATION INSTITUTE OF INDIA:</a><br><a href="http://liiofindia.org/" class="scroll-2" id="scroll-2_id" >http://liiofindia.org</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">SHODHGANGA-A RESERVOIR OF INDIAN THESES:</a><br><a href="https://shodhganga.inflibnet.ac.in/" class="scroll-2" id="scroll-2_id" >https://shodhganga.inflibnet.ac.in</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">TRAINING AND COURSES BY TATA STEEL:</a><br><a href="http://www.capabilitydevelopment.org/" class="scroll-2" id="scroll-2_id" >http://www.capabilitydevelopment.org</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">LIBRIVOX - AUDIO BOOKS:</a><br><a href="https://librivox.org/" class="scroll-2" id="scroll-2_id" >https://librivox.org</a>
  <hr id="hr-size">
  <a class="scroll-1" id="scroll-1_id" target="blank">OPEN ACCESS THESIS & DISSERTATIONS:</a><br><a href="https://oatd.org/" class="scroll-2" id="scroll-2_id" >https://oatd.org</a>
  </marquee>
</div>
</div>
<!-------------GALLERY SECTION------------->
<div class="gallery-sec">
  <div class="gallery">
    <p class="wiki">
        <a href="#" id="wiki-1">GALLERY</a>
    </p>
  </div>
  <div class="img-sec">
    <div class="carousel slide" data-ride="carousel" id="slider">
      <div class="carousel-inner" id="slider-container">
          <div class="images">
              <img class="d-block w-100" src="CSS/GALLERY1.jpg" alt="Image">
          </div>
          <div class="images">
              <img class="d-block w-100" src="CSS/GALLERY2.jpg" alt="Image">
          </div>
          <div class="images">
              <img class="d-block w-100" src="CSS/GALLERY3.jpg" alt="Image">
          </div>
          <div class="images">
              <img class="d-block w-100" src="CSS/GALLERY4.jpg" alt="Image">
          </div>
          <div class="images">
              <img class="d-block w-100" src="CSS/GALLERY5.jpg" alt="Image">
          </div>
          <div class="images">
              <img class="d-block w-100" src="CSS/GALLERY6.jpg" alt="Image">
          </div>
          <div class="images">
              <img class="d-block w-100" src="CSS/GALLERY7.jpg" alt="Image">
          </div>
          <div class="prev-button" onclick="plusSlide(-1)">
              <span class="fas fa-angle-left"></span>
          </div>
          <div class="next-button" onclick="plusSlide(1)">
              <span class="fas fa-angle-right"></span>
          </div>
    
          <div class="bottom-slider">
              <div class="btm_slider" onclick="currentSlide(1)"></div>
              <div class="btm_slider" onclick="currentSlide(2)"></div>
              <div class="btm_slider" onclick="currentSlide(3)"></div>
              <div class="btm_slider" onclick="currentSlide(4)"></div>
              <div class="btm_slider" onclick="currentSlide(5)"></div>
              <div class="btm_slider" onclick="currentSlide(6)"></div>
              <div class="btm_slider" onclick="currentSlide(7)"></div>
          </div>
      </div>
    </div>
  </div>
  <script src="JAVASCRIPT/gallery.js"></script>
</div>
<!-------------RULES & REGULATIONS SECTION------------->
<div class="rules">
  <p class="wiki">
      <a href="library-services.php" id="wiki-1">LIBRARY&nbsp;RULES&nbsp;&&nbsp;REGULATIONS</a>
  </p>
</div>
<div class="bullet">
  <p class="rules-bullet">
    <i class="far fa-hand-point-right"><a class="rule-point" id="rule-id">Library will be open from 09:00 AM to 05:00 PM.</a></i><br>
    <i class="far fa-hand-point-right"><a class="rule-point" id="rule-id">Student should not tamper the barcode present in the cover page of the book.</a></i><br>
    <i class="far fa-hand-point-right"><a class="rule-point" id="rule-id">Each member shall be issued a barcoded Library Identity card which is non-transferable.</a></i><br>
    <i class="far fa-hand-point-right"><a class="rule-point" id="rule-id">Students can issue books only against the Institute Library Card.</a></i><br>
    <i class="far fa-hand-point-right"><a class="rule-point" id="rule-id">Students will be the responsible for any kind of damages and loss of books or other items issued. They will be required to recover all costs associated with repair/replacement of such items.</a></i><br>
    <i class="far fa-hand-point-right"><a class="rule-point" id="rule-id">All users should create their account in the library server to keep a track on their issue/return.</a></i><br>
  </p>
  <div class="read-more"><a href="library-services.php" class="click-here">Click here Read more</a></div>
</div>
<!-----------FOOTER SECTION----------->

</body>
</html>