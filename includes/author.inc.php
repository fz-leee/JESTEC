<?php
if (isset($_POST["submit"])) {

  // First we get the form data from the URL

  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $authorsEmail = $_POST["authorsEmail"];
  $affiliation = $_POST["affiliation"];
  $manuscriptTitle = $_POST["manuscriptTitle"];
  $title = $_POST["title"];
  $abstract = $_POST["abstract"];

  require_once "dbh.inc.php";
  require_once 'functions.inc.php';




  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];
  // We could also have shortened this by writing:
  // $fileName = $file['name'];
  // Since we grabbed the core file at the start...

  // Here we get the file extension of the uploaded file
  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  // Here WE decide which file types we will allow
  $allowed = array('jpg', 'jpeg', 'png', 'pdf');


#file name with a random number so that similar dont get replaced
  $pname = rand(1000,10000)."-".$_FILES["file"]["name"];

#temporary file name to store file
  $tname = $_FILES["file"]["tmp_name"];

#upload directory path
  $uploads_dir = '../images';
#TO move the uploaded file to specific location
  move_uploaded_file($tname, $uploads_dir.'/'.$pname);
  $sql = "INSERT INTO fileup (title,img) VALUES ('$fileName','$fileName')";
  createManuscript($conn, $firstName, $lastName, $authorsEmail, $affiliation, $manuscriptTitle, $title, $abstract);

    }
