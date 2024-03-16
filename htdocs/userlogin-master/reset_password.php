<?php
session_start();

if (isset($_SESSION['userlogin'])) {

  header("Location: ./ToolsWithBenefits/ind.php");

}

$servername = "Servername";
$username = "Username";
$password = "Password";
$dbname = "Database_name";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}

if(isset($_GET['email']))

{

    $token = $_GET['email'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $new_password = sha1($_POST['new']);

  $confirm_password = sha1($_POST['conf']);

  //$email = $_POST['email'];

  if ($new_password === $confirm_password) {

    $sql = "UPDATE users SET password='$new_password' WHERE email='$token'";

    if ($conn->query($sql) === TRUE) {

      echo "<div class='alert success'>Password updated successfully!</div>";

    } else {

      echo "<div class='alert error'>Error updating password: " . $conn->error . "</div>";

    }

  } else {

    echo "<div class='alert error'>New and confirm passwords do not match!</div>";

  }

}

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

    input[type="password"] {

      width: 100%;

      padding: 10px;

      margin-bottom: 20px;

      border: 1px solid #ccc;

      border-radius: 3px;

      font-size: 16px;

      transition: border-color 0.2s ease-in-out;

    }

    input[type="password"]:focus {

      border-color: #3366ff;

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

    <h1>Reset Password</h1>

    <form method="post">

      



      <input type="password" id="new" name="new" placeholder="Create New Password" required>



      <input type="password" id="conf" name="conf" placeholder="Enter Confirm Password" required>



      <input type="submit" value="Change Password">

    </form>

  </div>

  

</body>

</html>

