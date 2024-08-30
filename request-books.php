<!------------ HEADER SECTION ----------->

<?php include('PARTIALS/header.php') ?>

<!-------------REQUEST BOOKS SECTION------------->
<div class="request-link">
    <p class="wiki-link-1">
      <a href="request-books.php" id="wiki-1">SUGGEST A BOOK</a>
  </p>
</div>
<div class="demand-books">
  <a class="boat"><div class="demand-section"><img class="d-block-w-100" id="demand-sub-1" href="#myModal1" src="CSS/basic-science.jpg"></div></a>
  <a class="boat"><div class="demand-section-1"><img class="d-block-w-100" id="demand-sub-2" href="#myModal2" src="CSS/CE.jpg"></div></a>
  <a class="boat"><div class="demand-section-2"><img class="d-block-w-100" id="demand-sub-3" href="#myModal3" src="CSS/CSE.jpg"></div></a>
  <a class="boat"><div class="demand-section-3"><img class="d-block-w-100" id="demand-sub-4" href="#myModal4"src="CSS/EE.jpg"></div></a>
</div>
<div class="demand-books-1">
  <a class="boat"><div class="demand-section-4"><img class="d-block-w-100" id="demand-sub-5" href="#myModal5" src="CSS/humanity.jpg"></div></a>
  <a class="boat"><div class="demand-section-5"><img class="d-block-w-100" id="demand-sub-6" href="#myModal6" src="CSS/ME.jpg"></div></a>
  <a class="boat"><div class="demand-section-6"><img class="d-block-w-100" id="demand-sub-7" href="#myModal7" src="CSS/General.jpg"></div></a>
  <a class="boat"><div class="demand-section-7"><img class="d-block-w-100" id="demand-sub-8" href="#myModal8" src="CSS/Others.jpg"></div></a>
</div>

<div class="modal" id="myModal1">
  <div class="modal-content">
    <span class="close"></span>
    <div class="modal-body">
      <form id="form_design" action="request_data.php" method="post">
        <input type="text" id="name" name="name" placeholder="  Enter Your Name"><br>
        <input type="email" id="email" name="email" placeholder="  Enter Your email"><br>
        <input type="text" id="title" name="book_title" placeholder="  Title of the book"><br>
        <input type="text" id="author" name="book_author" placeholder="  Author of the book"><br>
        <input type="text" id="publisher" name="book_publisher" placeholder="  Book Publisher Name"><br>
        <input type="text" id="edition" name="book_edition" placeholder="  Book Edition"><br>
        <button class="gradient" id="gradient_submit" type="submit" name="save" value="submit">Submit</button>
      </form>
    </div>
  </div>
</div>
<div class="modal" id="myModal2">
  <div class="modal-content">
    <span class="close"></span>
    <div class="modal-body">
      <form id="form_design" action="request_data.php" method="post">
        <input type="text" id="name" name="name1" placeholder="  Enter Your Name"><br>
        <input type="email" id="email" name="email1" placeholder="  Enter Your email"><br>
        <input type="text" id="title" name="book_title1" placeholder="  Title of the book"><br>
        <input type="text" id="author" name="book_author1" placeholder="  Author of the book"><br>
        <input type="text" id="publisher" name="book_publisher1" placeholder="  Book Publisher Name"><br>
        <input type="text" id="edition" name="book_edition1" placeholder="  Book Edition"><br>
        <button class="gradient" id="gradient_submit" type="submit" name="save1" value="Submit">Submit</button>
      </form>
    </div>
  </div>
</div>
<div class="modal" id="myModal3">
  <div class="modal-content">
    <span class="close"></span>
    <div class="modal-body">
      <form id="form_design" action="request_data.php" method="post">
        <input type="text" id="name" name="name2" placeholder="  Enter Your Name"><br>
        <input type="email" id="email" name="email2" placeholder="  Enter Your email"><br>
        <input type="text" id="title" name="book_title2" placeholder="  Title of the book"><br>
        <input type="text" id="author" name="book_author2" placeholder="  Author of the book"><br>
        <input type="text" id="publisher" name="book_publisher2" placeholder="  Book Publisher Name"><br>
        <input type="text" id="edition" name="book_edition2" placeholder="  Book Edition"><br>
        <button class="gradient" id="gradient_submit" type="submit" name="save2" value="Submit">Submit</button>
      </form>
    </div>
  </div>
</div>
<div class="modal" id="myModal4">
  <div class="modal-content">
    <span class="close"></span>
    <div class="modal-body">
      <form id="form_design" action="request_data.php" method="post">
        <input type="text" id="name" name="name3" placeholder="  Enter Your Name"><br>
        <input type="email" id="email" name="email3" placeholder="  Enter Your email"><br>
        <input type="text" id="title" name="book_title3" placeholder="  Title of the book"><br>
        <input type="text" id="author" name="book_author3" placeholder="  Author of the book"><br>
        <input type="text" id="publisher" name="book_publisher3" placeholder="  Book Publisher Name"><br>
        <input type="text" id="edition" name="book_edition3" placeholder="  Book Edition"><br>
        <button class="gradient" id="gradient_submit" type="submit" name="save3" value="Submit">Submit</button>
      </form>
    </div>
  </div>
</div>
<div class="modal" id="myModal5">
  <div class="modal-content">
    <span class="close"></span>
    <div class="modal-body">
      <form id="form_design" action="request_data.php" method="post">
        <input type="text" id="name" name="name4" placeholder="  Enter Your Name"><br>
        <input type="email" id="email" name="email4" placeholder="  Enter Your email"><br>
        <input type="text" id="title" name="book_title4" placeholder="  Title of the book"><br>
        <input type="text" id="author" name="book_author4" placeholder="  Author of the book"><br>
        <input type="text" id="publisher" name="book_publisher4" placeholder="  Book Publisher Name"><br>
        <input type="text" id="edition" name="book_edition4" placeholder="  Book Edition"><br>
        <button class="gradient" id="gradient_submit" type="submit" name="save4" value="Submit">Submit</button>
      </form>
    </div>
  </div>
</div>
<div class="modal" id="myModal6">
  <div class="modal-content">
    <span class="close"></span>
    <div class="modal-body">
      <form id="form_design" action="request_data.php" method="post">
        <input type="text" id="name" name="name5" placeholder="  Enter Your Name"><br>
        <input type="email" id="email" name="email5" placeholder="  Enter Your email"><br>
        <input type="text" id="title" name="book_title5" placeholder="  Title of the book"><br>
        <input type="text" id="author" name="book_author5" placeholder="  Author of the book"><br>
        <input type="text" id="publisher" name="book_publisher5" placeholder="  Book Publisher Name"><br>
        <input type="text" id="edition" name="book_edition5" placeholder="  Book Edition"><br>
        <button class="gradient" id="gradient_submit" type="submit" name="save5" value="Submit">Submit</button>
      </form>
    </div>
  </div>
</div>
<div class="modal" id="myModal7">
  <div class="modal-content">
    <span class="close"></span>
    <div class="modal-body">
      <form id="form_design" action="request_data.php" method="post">
        <input type="text" id="name" name="name6" placeholder="  Enter Your Name"><br>
        <input type="email" id="email" name="email6" placeholder="  Enter Your email"><br>
        <input type="text" id="title" name="book_title6" placeholder="  Title of the book"><br>
        <input type="text" id="author" name="book_author6" placeholder="  Author of the book"><br>
        <input type="text" id="publisher" name="book_publisher6" placeholder="  Book Publisher Name"><br>
        <input type="text" id="edition" name="book_edition6" placeholder="  Book Edition"><br>
        <button class="gradient" id="gradient_submit" type="submit" name="save6" value="Submit">Submit</button>
      </form>
    </div>
  </div>
</div>
<div class="modal" id="myModal8">
  <div class="modal-content">
    <span class="close"></span>
    <div class="modal-body">
      <form id="form_design" action="request_data.php" method="post">
        <input type="text" id="name" name="name7" placeholder="  Enter Your Name"><br>
        <input type="email" id="email" name="email7" placeholder="  Enter Your email"><br>
        <input type="text" id="title" name="book_title7" placeholder="  Title of the book"><br>
        <input type="text" id="author" name="book_author7" placeholder="  Author of the book"><br>
        <input type="text" id="publisher" name="book_publisher7" placeholder="  Book Publisher Name"><br>
        <input type="text" id="edition" name="book_edition7" placeholder="  Book Edition"><br>
        <button class="gradient" id="gradient_submit" type="submit" name="save7" value="Submit">Submit</button>
      </form>
    </div>
  </div>
</div>
<script src="JAVASCRIPT/lightbox.js"></script>
<!-----------FOOTER SECTION----------->

<?php include('PARTIALS/footer.php')?>