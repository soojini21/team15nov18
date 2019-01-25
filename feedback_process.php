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
    <title>Feedback Process</title>
</head>
<body onLoad="run_first()">
<div class = "container2" style="background-color: #00bfff";>
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
</div>
<?php
if(isset($_POST['staff_id'], $_POST['rating'], $_POST['comment'])) {
    //make the database connection
    $conn  = db_connect();
    $staff_id = $conn -> real_escape_string($_POST['staff_id']);
    
    $comment = $conn -> real_escape_string($_POST['comment']);
	$rating = $conn -> real_escape_string($_POST['rating']);
    //create an insert query
    $sql = "insert into staff_feedback (staff_id, comment, rating) 
			VALUES ('$staff_id', '$comment','$rating')";
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




