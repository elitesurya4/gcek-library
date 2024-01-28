<?php
$servername="localhost";
$username="root";
$password="";
$database_name="librarygcek_suggestbooks";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

// --------------------basic_science--------------------
if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $book_title = $_POST['book_title'];
    $book_author = $_POST['book_author'];
    $book_publisher = $_POST['book_publisher'];
    $book_edition = $_POST['book_edition'];

    $sql_query = "INSERT INTO basic_science(name,email,book_title,book_author,book_publisher,book_edition)
    VALUES ('$name','$email','$book_title','$book_author','$book_publisher','$book_edition')";

    if (mysqli_query($conn,$sql_query))
    {
        echo '<script type="text/javascript">'; 
        echo 'alert("Request Details submitted sucessfully");'; 
        echo 'window.location.href = "request-books.php";';
        echo '</script>';
    }

    else{
        echo '<script>alert("Oops!!");</script>';
    }
    mysqli_close($conn);
}

// --------------------civil_engg--------------------
if(isset($_POST['save1']))
{
    $name = $_POST['name1'];
    $email = $_POST['email1'];
    $book_title = $_POST['book_title1'];
    $book_author = $_POST['book_author1'];
    $book_publisher = $_POST['book_publisher1'];
    $book_edition = $_POST['book_edition1'];

    $sql_query = "INSERT INTO civil_engg(name,email,book_title,book_author,book_publisher,book_edition)
    VALUES ('$name','$email','$book_title','$book_author','$book_publisher','$book_edition')";

    if (mysqli_query($conn,$sql_query))
    {
        echo '<script type="text/javascript">'; 
        echo 'alert("Request Details submitted sucessfully");'; 
        echo 'window.location.href = "request-books.php";';
        echo '</script>';
    }

    else{
        echo '<script>alert("Oops!!");</script>';
    }
    mysqli_close($conn);
}

// --------------------comp_sci_engg--------------------
if(isset($_POST['save2']))
{
    $name = $_POST['name2'];
    $email = $_POST['email2'];
    $book_title = $_POST['book_title2'];
    $book_author = $_POST['book_author2'];
    $book_publisher = $_POST['book_publisher2'];
    $book_edition = $_POST['book_edition2'];

    $sql_query = "INSERT INTO comp_sci_engg(name,email,book_title,book_author,book_publisher,book_edition)
    VALUES ('$name','$email','$book_title','$book_author','$book_publisher','$book_edition')";

    if (mysqli_query($conn,$sql_query))
    {
        echo '<script type="text/javascript">'; 
        echo 'alert("Request Details submitted sucessfully");'; 
        echo 'window.location.href = "request-books.php";';
        echo '</script>';
    }

    else{
        echo '<script>alert("Oops!!");</script>';
    }
    mysqli_close($conn);
}

// --------------------electrical_engg--------------------
if(isset($_POST['save3']))
{
    $name = $_POST['name3'];
    $email = $_POST['email3'];
    $book_title = $_POST['book_title3'];
    $book_author = $_POST['book_author3'];
    $book_publisher = $_POST['book_publisher3'];
    $book_edition = $_POST['book_edition3'];

    $sql_query = "INSERT INTO electrical_engg(name,email,book_title,book_author,book_publisher,book_edition)
    VALUES ('$name','$email','$book_title','$book_author','$book_publisher','$book_edition')";

    if (mysqli_query($conn,$sql_query))
    {
        echo '<script type="text/javascript">'; 
        echo 'alert("Request Details submitted sucessfully");'; 
        echo 'window.location.href = "request-books.php";';
        echo '</script>';
    }

    else{
        echo '<script>alert("Oops!!");</script>';
    }
    mysqli_close($conn);
}

// --------------------humanity--------------------
if(isset($_POST['save4']))
{
    $name = $_POST['name4'];
    $email = $_POST['email4'];
    $book_title = $_POST['book_title4'];
    $book_author = $_POST['book_author4'];
    $book_publisher = $_POST['book_publisher4'];
    $book_edition = $_POST['book_edition4'];

    $sql_query = "INSERT INTO humanity(name,email,book_title,book_author,book_publisher,book_edition)
    VALUES ('$name','$email','$book_title','$book_author','$book_publisher','$book_edition')";

    if (mysqli_query($conn,$sql_query))
    {
        echo '<script type="text/javascript">'; 
        echo 'alert("Request Details submitted sucessfully");'; 
        echo 'window.location.href = "request-books.php";';
        echo '</script>';
    }

    else{
        echo '<script>alert("Oops!!");</script>';
    }
    mysqli_close($conn);
}

// --------------------mech_engg--------------------
if(isset($_POST['save5']))
{
    $name = $_POST['name5'];
    $email = $_POST['email5'];
    $book_title = $_POST['book_title5'];
    $book_author = $_POST['book_author5'];
    $book_publisher = $_POST['book_publisher5'];
    $book_edition = $_POST['book_edition5'];

    $sql_query = "INSERT INTO mech_engg(name,email,book_title,book_author,book_publisher,book_edition)
    VALUES ('$name','$email','$book_title','$book_author','$book_publisher','$book_edition')";

    if (mysqli_query($conn,$sql_query))
    {
        echo '<script type="text/javascript">'; 
        echo 'alert("Request Details submitted sucessfully");'; 
        echo 'window.location.href = "request-books.php";';
        echo '</script>';
    }

    else{
        echo '<script>alert("Oops!!");</script>';
    }
    mysqli_close($conn);
}

// --------------------general--------------------
if(isset($_POST['save6']))
{
    $name = $_POST['name6'];
    $email = $_POST['email6'];
    $book_title = $_POST['book_title6'];
    $book_author = $_POST['book_author6'];
    $book_publisher = $_POST['book_publisher6'];
    $book_edition = $_POST['book_edition6'];

    $sql_query = "INSERT INTO general(name,email,book_title,book_author,book_publisher,book_edition)
    VALUES ('$name','$email','$book_title','$book_author','$book_publisher','$book_edition')";

    if (mysqli_query($conn,$sql_query))
    {
        echo '<script type="text/javascript">'; 
        echo 'alert("Request Details submitted sucessfully");'; 
        echo 'window.location.href = "request-books.php";';
        echo '</script>';
    }

    else{
        echo '<script>alert("Oops!!");</script>';
    }
    mysqli_close($conn);
}

// --------------------others--------------------
if(isset($_POST['save7']))
{
    $name = $_POST['name7'];
    $email = $_POST['email7'];
    $book_title = $_POST['book_title7'];
    $book_author = $_POST['book_author7'];
    $book_publisher = $_POST['book_publisher7'];
    $book_edition = $_POST['book_edition7'];

    $sql_query = "INSERT INTO others(name,email,book_title,book_author,book_publisher,book_edition)
    VALUES ('$name','$email','$book_title','$book_author','$book_publisher','$book_edition')";

    if (mysqli_query($conn,$sql_query))
    {
        echo '<script type="text/javascript">'; 
        echo 'alert("Request Details submitted sucessfully");'; 
        echo 'window.location.href = "request-books.php";';
        echo '</script>';
    }

    else{
        echo '<script>alert("Oops!!");</script>';
    }
    mysqli_close($conn);
}
?>