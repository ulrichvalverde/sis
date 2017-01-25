<?php

if(isset($_POST['register'])) {
    $studentNo = $_POST['sid'];
	$lastName = $_POST['ln'];
	$firstName = $_POST['fn'];
	$emailAddress = $_POST['email'];
	$password = $_POST['pwd'];
	$birthDate = $_POST['bday'];
}

else {
	echo 'Wrong!';
}

?>

<html>

<head>
<title> </title>

		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/stylestyle.css" rel="stylesheet" />

</head>

<body>

<div class="page-header" id="heather">
  
</div>

		

		<div class="container" id="diffcontainer">
			<h1 class="text-center">Student Registration</h1>
			<div class="col-lg-offset-4 col-lg-4">
				<div class="well">

<?php

echo "Thank you for your registration, " . $firstName . " " . $lastName . "!<br/><br/>" . 'ID number: ' . $studentNo . '. <br/><br/> Email address: ' . $emailAddress . ".<br/><br/> Birthday: " . $birthDate . ".<br/><br/> The time is " . date('c');

?>

</div>
</div>
</div>


</body>
</html>
