<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/nav_ravi.js"></script>
    <script src="js/read_more_ravi.js"></script>
    	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <style>
body  {
  background-image: url("bg.jpg");
  background-repeat: no-repeat;
  background-color: #cccccc;
  opacity: 1;
}
</style>

</head>
<body onLoad="run_first()">
	<div class = "container2" style="background-color: #00bfff";>
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
</div>
    <div class="container">
    	<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form class="contact2-form validate-form"  action="enquiry_process.php" method="post">
					<span class="contact2-form-title">
						REGISTER
					</span>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input class="input2" type="text" name="name" id="name" placeholder="Enter Your Name">
						<span class="focus-input2"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input2" type="text" name="email"  id="email" placeholder="Enter Your Email">
						<span class="focus-input2"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Message is required">
						<textarea class="input2" name="register" id="register" placeholder="Enter Message"></textarea>
						<span class="focus-input2"></span>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="btn" type="submit" id="submit" value="Submit">
								register for the subjects you are looking for
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
    </div>
	<?php include("include/footer.inc") ?>
</body>
</html>