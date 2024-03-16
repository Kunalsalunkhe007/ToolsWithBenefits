<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Registration | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <style>
		body {
			background-color: #f8f9fa;
			font-family: Arial, sans-serif;
		}

		h1 {
			font-size: 36px;
			margin-bottom: 30px;
			text-align: center;
		}

		form {
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
			margin: 0 auto;
			max-width: 500px;
			padding: 30px;
		}

		label {
			display: block;
			font-weight: bold;
			margin-bottom: 5px;
		}

		input[type="text"],
		input[type="email"],
		input[type="password"] {
			border-radius: 5px;
			border: none;
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
			font-size: 16px;
			margin-bottom: 20px;
			padding: 10px;
			width: 400px;
		}

		input[type="submit"] {
			background-color: #007bff;
			border: none;
			border-radius: 5px;
			color: #fff;
			cursor: pointer;
			font-size: 16px;
			margin-top: 20px;
			padding: 10px;
			width: 100%;
		}

		input[type="submit"]:hover {
			background-color: #0069d9;
		}

		@media (max-width: 576px) {
			form {
				padding: 15px;
                
			}

			h1 {
				font-size: 24px;
				margin-bottom: 20px;
			}

			input[type="text"],
			input[type="email"],
			input[type="password"] {
				font-size: 14px;
				margin-bottom: 15px;
                width: 300px;
				padding: 8px;
			}

			input[type="submit"] {
				font-size: 14px;
				margin-top: 15px;
				padding: 8px;
			}
		}
	</style>
</head>
<body>

<div>
	<?php
	
	?>	
</div>

<div>
	<form action="registration.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-12">
					<h1>Registration</h1>
					<p>Fill Whole Form</p>
					<hr class="mb-3">
					<label for="firstname"><b>First Name</b></label>
					<input class="form-control" id="firstname" type="text" name="firstname" required>

					<label for="lastname"><b>Last Name</b></label>
					<input class="form-control" id="lastname"  type="text" name="lastname" required>

					<label for="email"><b>Email Address</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>

					<!-- <label for="phonenumber"><b>Phone Number</b></label>
					<input class="form-control" id="phonenumber"  type="text" name="phonenumber" required> -->

					<label for="password"><b>Password</b></label>
					<input class="form-control" id="password"  type="password" name="password" minlength="8" required>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
                    <a href="../login.php">Go to Login</a>
				</div>
			</div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>
</body>
</html>