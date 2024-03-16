<!DOCTYPE html>
<html>
<head>
  <title>My Table</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    /* Add some padding to the table cells */
    td {
      padding: 0.75rem;
    }

    /* Add a border to the table */
    table {
      border-collapse: collapse;
      border: 1px solid #ddd;
      width: 100%;
    }

    /* Add a gray background color to even rows */
    tbody tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    /* Add a white background color to odd rows */
    tbody tr:nth-child(odd) {
      background-color: #ffffff;
    }

    /* Add rounded corners to the table */
    .table-wrapper {
      border-radius: 0.25rem;
      overflow: hidden;
    }

    /* Add some custom styles to make the table look awesome */
    .table-wrapper table {
      margin-bottom: 0;
    }

    .table-wrapper thead th {
      border-top: none;
      background-color: #f8f9fa;
      color: #6c757d;
      text-transform: uppercase;
      font-weight: 500;
      font-size: 0.9rem;
    }

    .table-wrapper tbody td {
      border-top: none;
      font-size: 0.85rem;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-8">

      <?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['userlogin'])) {
  // Redirect to login page
  header("Location: ../login.php");
  exit();
}

// Connect to the MySQL database
$host = "hostname";
$username = "username";
$password = "password";
$dbname = "database_name";

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the user ID and email
$user_id = $_SESSION['userlogin']['id'];
$user_email = $_SESSION['userlogin']['email'];

// Replace . and @ in the email with _ to get the table name
$table_name = str_replace(array(".", "@"), "_", $user_email);

// Check if the table exists
$sql = "SHOW TABLES LIKE '$table_name'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
  // If the table doesn't exist, show an error
  echo "Error: Table not found in database.";
} else {
  // If the table exists, retrieve the filenames from the filename column
  $sql = "SELECT filename FROM $table_name";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 0) {
    // If the user doesn't have any files uploaded, show an error
    echo "Error: No files found for this user.";
  } else {
    // If the user has files uploaded, output them in a table
    echo '<div class="table-wrapper"><h2>Recent Uploads</h2><div class="table-responsive"><table class="table table-bordered table-striped">';
    echo '<thead><tr><th>SR No.</th><th>FILE</th></tr></thead>';
    $i = 1;
    $files = array();
    while ($row = mysqli_fetch_assoc($result)) {
      $filename = $row['filename'];
      $files[] = $filename;
    }
    $files = array_reverse($files);
    foreach ($files as $filename) {
      echo '<tr><td>' . $i . '</td><td>' . $filename . '</td></tr>';
      $i++;
    }
    echo '</table></div></div>';
  }
}

mysqli_close($conn);
?>


</body>
</html>
