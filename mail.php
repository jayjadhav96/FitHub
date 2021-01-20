<?php



    if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $subject = $_POST['subject'];
      $mailFrom = $_POST['email'];
      $message = $_POST['message'];

      $_SESSION['name'] = $var_name;

      $mailTo = "name@mail.com";
      $headers = "From: $mailFrom";
      // $subject = "Mail there!";
      $txt = "You have recieved an e-mail from: $name \n";
      $txt .= "Message: $message \n";
      // $txt .= "Phone: $phone";


      mail($mailTo, $subject, $txt, $headers);
      header("Location: success.php?mailsend");
  }

  ?>
