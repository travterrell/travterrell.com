<?php
// CONTACT FORM VALIDATION CODE
// define variables and set to empty values
$nameErr = $emailErr = $messageErr = "";
$name = $email = $message = "";
$feedback = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "E-mail is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["message"])) {
    $messageErr = "Message is required";
  } else {
    $message = test_input($_POST["message"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$message)) {
      $messageErr = "Invalid message";
    }
    if (strlen($message) > 320) {
      $messageErr = "Message too long. Please shorten.";
    }
  }

  if (isset($_POST["reset"])) {
    $messageErr = "Reset was clicked";
  }

  // this is the mail function with paramenters to send email.  Email sends ONLY if there are no errors
  $to = "travterrell@gmail.com";
  $from = $email;
  $subject = "TravTerrell.com Inquiry";
  // $name is already set from validation above
  $email_message = "From: {$name}\n\n".$message;
  $headers = "From: {$from}";
  if ($nameErr == "" && $emailErr == "" && $messageErr == "") {
    if (mail($to,$subject,$email_message,$headers)) {
      $feedback = "<span class='success'>SUCCESS!</span> Thanks for the e-mail!";
    } else {
      $feedback = "<span class='error'>ERROR.</span> Your e-mail didn't send. Please try again.";
    }
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>TravTerrell.com</title>
    <link rel="icon" type="image/png" href="../assets/images/travicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>

  <body>

    <div class="container-fluid">

      <div class="row nav">
        <div class="col-sm-2" id="navlogo">
          <img id="logo" src="../assets/images/travlogo.png" alt="© 2017 TravTerrell.com - All Rights Reserved.">
        </div>
        <div class="col-sm-10" id="navlinks">
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </div>
      </div>

      <div class="content">
        <div class="row">
          <div class="col-sm-12">
            <img class="heading" src="../assets/images/contact.png" alt="contact">
          </div>
        </div>
        <div class="row contact">
          <div class="col-sm-12">
        <p>For inquiries drop me a note below:</p>
        <p id="feedback"><?php echo $feedback ?></p>
        <br>
        <div id="contact_form">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
            Name:<span style="color: #ede00a; margin-left: 20px;"><?php echo $nameErr?></span><br>
            <input type="text" name="name"><br>
            E-mail Address:<span style="color: #ede00a; margin-left: 20px;"><?php echo $emailErr?></span><br>
            <input type="text" name="email"><br>
            Message:<span style="color: #ede00a; margin-left: 20px;"><?php echo $messageErr?></span><br>
            <textarea id="message" name="message"></textarea>
            <br>
            <div id="form_buttons">
              <input class="button" name="send" type="submit" value="Send"/>
              <input class="button" name="reset" type="reset" value="Reset"/>
            </div>
          </form>
        </div>
      </div>
    </div>

        <div class="row">
         <div class="col-sm-12" id="footer">
           <p>© <?php echo date("Y");?> TravTerrell.com - All Rights Reserved.</p>
         </div>
       </div>
    </div>

  </div>

  </body>

</html>
