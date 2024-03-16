<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['userlogin'])) {
  // Redirect to login page
  header("Location: ../login.php");
  exit();
}

// Connect to the MySQL database
$host = "Server_name";
$username = "Username";
$password = "Password";
$dbname = "Database_Name";

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the user ID and email
$user_id = $_SESSION['userlogin']['id'];
$email = $_SESSION['userlogin']['email'];

// Replace . and @ with _ in the email to get the table name
$table_name = str_replace(array('.', '@'), '_', $email);

// Get the current file name and extension
$file_name = $_FILES['File']['name'];
$file_extension = pathinfo($file_name, PATHINFO_EXTENSION);

// Concatenate the file name and extension
//$file_name_with_extension = $file_name . '.' . $file_extension;

// Insert the file name and extension into a new row in the email table
$sql = "INSERT INTO `$table_name` (filename) VALUES ('$file_name')";

if (mysqli_query($conn, $sql)) {
  echo "File uploaded successfully.";
} else {
  echo "Error inserting into database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
