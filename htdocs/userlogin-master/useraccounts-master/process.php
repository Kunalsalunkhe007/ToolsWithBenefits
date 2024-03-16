<?php

// database credentials
$servername = "Server_name";
$username = "Username";
$password = "Password";
$dbname = "Database_Name";

try {
  // create database connection
  $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if (isset($_POST)) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    // sanitize email address for use as table name
    $sanitizedEmail = str_replace(['@', '.'], ['_', '_'], $email);
    $tableName = $sanitizedEmail;
    $columnNames = array('firstname', 'lastname', 'email', 'password', 'filename');

    // create new table if it does not exist
    $sql = "CREATE TABLE IF NOT EXISTS `$tableName` (";
    foreach ($columnNames as $columnName) {
      if ($columnName == 'email') {
        $sql .= $columnName . " VARCHAR(255) UNIQUE, ";
      } else {
        $sql .= $columnName . " VARCHAR(255), ";
      }
    }
    $sql = rtrim($sql, ', '); // Remove trailing comma
    $sql .= ")";

    $stmt = $db->prepare($sql);
    $result = $stmt->execute();
    
    if ($result) {
      // insert data into the newly created table
      $sql = "INSERT INTO `$tableName` (firstname, lastname, email, password, filename) VALUES(?,?,?,?,?)";
      $stmtinsert = $db->prepare($sql);
      $result = $stmtinsert->execute([$firstname, $lastname, $email, $password, '']);
      if ($result) 
      {
        echo 'Successfully saved to user-specific table.';
      } 
      else 
      {
        echo 'There were errors while saving the data to user-specific table.';
      }

      // insert data into the users table
      $sql = "INSERT INTO `users` (firstname, lastname, email, password) VALUES(?,?,?,?)";
      $stmtinsert = $db->prepare($sql);
      $result = $stmtinsert->execute([$firstname, $lastname, $email, $password]);
      if ($result) 
      {
        echo 'Successfully saved to users table.';
      } else 
      {
        echo 'There were errors while saving the data to users table.';
      }
    } 
    else 
    {
      echo 'There were errors while creating the table.';
    }
  } 
  else 
  {
    echo 'No data';
  }
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
