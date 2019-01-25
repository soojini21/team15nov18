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
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>
    <script src="js/event_register.js"></script>
    <title>Event Register</title>
</head>
<body onLoad="run_first()">
<div class = "container2" style="background-color: #00bfff";>
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
</div>
<?php
if(isset($_POST['fname'], $_POST['lname'], $_POST['email'],$_POST['event'])) {
    //make the database connection
    $conn  = db_connect();
    $fname = $conn -> real_escape_string($_POST['fname']);
    $lname = $conn -> real_escape_string($_POST['lname']);
    $email = $conn -> real_escape_string($_POST['email']);
	$event = $conn -> real_escape_string($_POST['event']);
    //create an insert query
    $sql = "insert into event_register(first_name, last_name, email, event_name) 
			VALUES ('$fname', '$lname', '$email','$event')";
    //execute the query
    if($conn -> query($sql))
    {
        echo "<div class=\"container\">";
        echo "<p>Thank you very much.</p>";
        echo "</div>";
    }
    $conn -> close();
}
else {
    die("Input error");
}
?>
<?php include("include/footer.inc") ?>
</body>
</html>




