<?php
	# write your comment here
	// write your other comment here
	/*
		write your comment here
	*/
	$studentNo = "";
	$lastName = "";
	$firstName = "";
	$emailAddress = "";
	$password = "";
	$birthDate = null;
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Student Registration</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">Student Registration</h1>
			<div class="col-lg-offset-4 col-lg-4">
				<div class="well">
					<form method="GET" action="welcome.php"
						class="form-horizontal">

						<div class="form-group">
							<div class="col-lg-12">
								<input type="text" name="sid"
									class="form-control" placeholder="ID Number" required />
							</div>
						</div>

						<div class="form-group">
							<div class="col-lg-12">
								<input type="text" name="fn"
									class="form-control" placeholder="First Name" required />
							</div>
						</div>

						<div class="form-group">
							<div class="col-lg-12">
								<input type="text" name="ln"
									class="form-control" placeholder="Last Name" required />
							</div>
						</div>


						<div class="form-group">
							<div class="col-lg-12">
								<input type="email" name="email"
									class="form-control" placeholder="Email Address" required />
							</div>
						</div>

						<div class="form-group">
							<div class="col-lg-12">
								<input type="password" name="pwd"
									class="form-control" placeholder="Password" required />
							</div>
						</div>

						<div class="form-group">
							<div class="col-lg-12">
								<input type="date" name="bday"
									class="form-control" required />
							</div>
						</div>

						<div class="form-group">
							<div class="col-lg-offset-4 col-lg-8">
								<button name="register"
									class="btn btn-success">
									Register
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</body>
</html>