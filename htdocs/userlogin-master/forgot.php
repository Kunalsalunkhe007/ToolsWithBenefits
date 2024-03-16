<?php
require 'PHPMailer/PHPMailerAutoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check if email is valid and exists in database
  // If email exists, send password to user's email address
  // If email doesn't exist, display error message
  $email = $_POST["email"];
  // Connect to database and check if email exists
  $servername = "Server_name";
  $username = "Username";
  $password = "Password";
  $dbname = "Database_name";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * FROM users WHERE email = '$email'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // Email exists, so send password to user's email address
    $row = $result->fetch_assoc();
    $mod = $row["password"];
    $password = sha1($mod);
    
    // Send email using PHPMailer
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'Your_mail_id';
    $mail->Password = 'Password';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('Your_mail_id', 'Support@ToolsWithBenefits');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = 'Reset Password for toolswithbenefits.rf.gd';
    $mail->Body = "Hi, \nwe got your request regarding reset password for toolswithbenefits.rf.gd, if you made this request so ckick here:
    http://toolswithbenefits.rf.gd/userlogin-master/reset_password.php?email=$email , NOTE THAT DO NOT SHARE THIS LINK WITH ANYONE, IF SHARE YOUR ACCOUNT WILL BE HACKED";
    if($mail->send()) {
      $success_msg = "Your password has been sent to your email address.";
    } else {
      $error_msg = "Failed to send email.";
    }
  } else {
    // Email doesn't exist, so display error message
    $error_msg = "Email not found.";
  }
  $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }
    h1 {
      font-size: 36px;
      text-align: center;
      margin-bottom: 20px;
    }
    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    label {
      font-size: 18px;
      margin-bottom: 10px;
    }
    input[type="email"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 3px;
      font-size: 16px;
      transition: border-color 0.2s ease-in-out;
    }
    input[type="email"]:focus {
      border-color: #3366ff;
    }
    input[type="submit"] {
      width: 100%;
      background-color: #3366ff;
      color: #fff;
      border: none;
      border-radius: 3px;
      font-size: 18px;
      padding: 10px;
      cursor: pointer;
      transition: background-color 0.2s ease-in-out;
    }
    input[type="submit"]:hover {
      background-color:   #2851a3;
}
.alert {
  margin-top: 20px;
  padding: 10px;
  border-radius: 3px;
  font-size: 16px;
  text-align: center;
}
.success {
  background-color: #d4edda;
  color: #155724;
  border: 1px solid #c3e6cb;
}
.error {
  background-color: #f8d7da;
  color: #721c24;
  border: 1px solid #f5c6cb;
}
</style>
</head>
<body>
  <div class="container">
    <h1>Forgot Password</h1>
    <?php if (isset($success_msg)) { ?>
      <div class="alert success"><?php echo $success_msg; ?></div>
    <?php } ?>
    <?php if (isset($error_msg)) { ?>
      <div class="alert error"><?php echo $error_msg; ?></div>
    <?php } ?>
    <form method="post">
      <input type="email" id="email" name="email" placeholder="Enter Your Email Address" required>
      <input type="submit" value="Send Password">
    </form>
  </div>
</body>
</html>
