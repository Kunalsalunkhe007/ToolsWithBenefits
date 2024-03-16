<?php 

session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: login.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}

    // Retrieve user information from the database
    include 'config.php';
    $username = $_SESSION['userlogin'];
    $query = "SELECT firstname, lastname, email FROM users WHERE username=:username";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':username', $username, PDO::PARAM_STR);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $firstname = $row["firstname"];
    $lastname = $row["lastname"];
    $email = $row["email"];
?>

<p>Welcome <?php echo $firstname . " " . $lastname; ?>!</p>
<p>Your email is <?php echo $email; ?></p>

<a href="index.php?logout=true">Logout</a>
