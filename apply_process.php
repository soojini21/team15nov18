<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
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
    <script src="js/nav_alex.js"></script>
    <script src="js/read_more_alex.js"></script>
    <script src="js/member_alex.js"></script>
    <link rel="stylesheet" href="Apply.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Application form</title>
	<style>
		.row {
			margin: 3em 1em;
		}
		.col label {
			
			width: 18%;
		}
		
		/* For extra small: */
    	body {font-size: 10px; line-height: 1.8em;}
		h1 { font-size: 28px;}
		h2 { font-size: 20px;}
		
		/* For small: */
		@media only screen and (min-width: 576px){ 
  			body { font-size: 14px;}
			h1 { font-size: 32px;}
			h2 { font-size: 24px;}
		
		/* For medium: */
		@media only screen and (min-width: 968px){
  			body { font-size: 16px;} 
			h1 { font-size: 60px;}
			h2 { font-size: 32px;}
		
		
		
	</style>
</head>
<body onLoad="run_first()">




	<div class="container">
		<div class="bg-info mt-4 px-3 member_frm" style="border-radius: 5px; border: #000000 solid thick">

<?php
if(isset($_POST['fname'], $_POST['lname'],$_POST['age'], $_POST['country'], $_POST['university'], $_POST['gpa'], $_POST['email'], $_POST['password'])) {
    //make the database connection
    $conn  = db_connect();
    $fname = $conn -> real_escape_string($_POST['fname']);
	$lname = $conn -> real_escape_string($_POST['lname']);
	$age = $conn -> real_escape_string($_POST['age']);
	$country = $conn -> real_escape_string($_POST['country']);
	$university = $conn -> real_escape_string($_POST['university']);
	//$degree = $_POST['degree'];
	$gpa = $conn -> real_escape_string($_POST['gpa']);
    $email = $conn -> real_escape_string($_POST['email']);
    $password = $conn -> real_escape_string($_POST['password']);
    //create an insert query
    $sql = "insert into applications (fname, lname, age, country, university, gpa, email, password) 
			VALUES ('$fname', '$lname', $age, '$country', '$university', '$gpa', '$email', '$password')";
    //execute the query
    if($conn -> query($sql))
    {	
        echo "<div class=\"container\">";
        echo "<h2> Dear $fname, your application was submitted successfully.</h1>";
        echo "<p> You can <a href=\"login .php\"> Login now</a></p>";
        echo "</div>";
    }
    $conn -> close();
}
else {
    die("Input error");
}
?>

		</div>
	</div>

</body>
</html>




