<?php
// Start the session
session_start();

// Check if the user is logged in
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

// Connect to the MySQL database
$conn = mysqli_connect("Server", "username", "password", "database_name");

// Check if the connection was successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the email of the logged-in user
$email = "";
$user_id = $_SESSION['userlogin']['id']; // Assuming that the user ID is stored in the session
$sql = "SELECT email, firstname, lastname, image FROM users WHERE id = $user_id"; // Assuming that the users table contains columns named "email", "firstname", and "lastname"
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
  $row = mysqli_fetch_assoc($result);
  $email = $row['email'];
  $firstname = $row['firstname'];
  $lastname = $row['lastname'];
  $image = $row['image'];
}

$image = !empty($image) ? $image : 'https://img.freepik.com/premium-vector/cute-australian-shepherd-dog-avatar-cartoon_357749-252.jpg?w=2000';

// Close the MySQL connection
mysqli_close($conn);
?>



<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
    background-color: #f9f9fa
}

.padding {
    padding: 20px !important
}

.user-card-full {
    overflow: hidden;
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    border: none;
    margin-bottom: 30px;
}

.m-r-0 {
    margin-right: 0px;
}

.m-l-0 {
    margin-left: 0px;
}

.user-card-full .user-profile {
    border-radius: 5px 5px 5px 5px;
}

.bg-c-lite-green {
        background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
    background: linear-gradient(to right, #ee5a6f, #f29263);
}

.user-profile {
    padding: 20px 0;
}

.card-block {
    padding: 1.25rem;
}

.m-b-25 {
    margin-bottom: 25px;
}

.img-radius {
    border-radius: 5px;
}


 
h6 {
    font-size: 14px;
}

.card .card-block p {
    line-height: 25px;
}

@media only screen and (min-width: 1400px){
p {
    font-size: 14px;
}
 
}

.card-block {
    padding: 1.25rem;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.m-b-20 {
    margin-bottom: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.card .card-block p {
    line-height: 25px;
}

.m-b-10 {
    margin-bottom: 10px;
}

.text-muted {
    color: #919aa3 !important;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.f-w-600 {
    font-weight: 600;
}

.m-b-20 {
    margin-bottom: 20px;
}

.m-t-40 {
    margin-top: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.m-b-10 {
    margin-bottom: 10px;
}

.m-t-40 {
    margin-top: 20px;
}

.user-card-full .social-link li {
    display: inline-block;
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}




</style>
</head>
<body>

<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-xl-6 col-md-12">

                                                <div class="card user-card-full">
                                                    <div class="row m-l-0 m-r-0">
                                                        <div class="col-sm-4 bg-c-lite-green user-profile">
                                                            <div class="card-block text-center text-white">
                                                                <div class="m-b-25">
                                                                <img src="<?php echo $image; ?>" class="rounded-circle" style="width: 150px;" alt="Avatar" />

                                                                   
                                                                </div>
                                                                
                                                                <p class="m-b-10 f-w-600"><a href="image_upload.php" class="list-group-item"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></p>
                                                                
                                                                
                                                                <h6 class="f-w-600"><?php echo $firstname . ' ' . $lastname; ?></h6>
                                                                <p>User</p>
                                                                <a href="thankyou.php" target="blank"><button type="button" class="btn btn-outline-dark" >Donate US <i class="fa fa-heart" aria-hidden="true"></i></button></a>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="card-block">
                                                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <p class="m-b-10 f-w-600">Email</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $email; ?></h6>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Activity</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Recent Uploaded Files</p>
                                                                        <button type="button" class="btn btn-outline-primary"><a class="recents" href="recent.php" style="text-decoration: none; color: black;"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Recents</a></button>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Log-Out</p>
                                                                        
                                                                        <button type="button" class="btn btn-outline-danger"><a class="logout" href="ind.php?logout=true" style="text-decoration: none; color: black;"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></button>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             </div>
                                                </div>
                                            </div>
                                            
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>