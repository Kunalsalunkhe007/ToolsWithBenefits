<?php
session_start();

if (!isset($_SESSION['userlogin'])) {
  // If not, redirect to the login page
  header("Location: login.php");
  exit(); // Stop executing the rest of the code
}

// Check if the logout parameter is set
if (isset($_GET['logout'])) {
  // If so, destroy the session and redirect to the login page
  session_destroy();
  unset($_SESSION);
  header("Location: login.php");
  exit(); // Stop executing the rest of the code
}

$servername = "Servername";
$username = "Username";
$password = "Password";
$dbname = "Database_Name";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $image_url = $_POST['new'];
  $user_id = $_SESSION['userlogin']['id'];

  // Check if the URL is valid and does not exceed 255 characters
  if (filter_var($image_url, FILTER_VALIDATE_URL) && strlen($image_url) <= 255) {
    $sql = "UPDATE users SET image='$image_url' WHERE id=$user_id";

    if ($conn->query($sql) === TRUE) {
      echo "<div class='alert success'>Image updated successfully!</div>";
    } else {
      echo "<div class='alert error'>Error while updating image: " . $conn->error . "</div>";
    }
  } else {
    echo "<div class='alert error'>Invalid URL or URL exceeds 255 characters</div>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Change Profile Picture</title>
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
    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 3px;
      font-size: 16px;
      transition: border-color 0.2s ease-in-out;
    }
    input[type="text"]:focus {
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
    <h1>Change Profile Picture</h1>
    <form method="post">
      <label for="new">New Profile Picture URL:</label>
      <input type="text" id="new" name="new" placeholder="Enter new profile picture URL" required>
      
      <h4 style="color:red;">WARNING:  Insert Only Image Address URL, If you put another url, it will can't show your profile Pic</h4>
      <br><br>
      <input type="submit" value="Update Profile Picture">
    </form>
  </div>
  
</body>
</html>
