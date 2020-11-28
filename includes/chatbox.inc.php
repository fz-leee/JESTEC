<?php 
  if (isset($_POST["submitMessage"])) {

      // First we get the form data from the URL

      // $sender = userid;
      $recipient = $_POST["recipient"];
      $subject = $_POST["subject"];
      $message = $_POST["message"];

      $sql = "INSERT INTO messages (recipient, subject, message) VALUES (?, ?, ?);";

      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../author.php?error=stmtfailed");
        exit();
      }


      mysqli_stmt_bind_param($stmt, "sss", $recipient, $subject, $message);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      mysqli_close($conn);
      header("location: ../author.php");
      alert("working fine");
      exit();
    }