
<div class = "container2" style="background-color: #00bfff";>
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
</div>
<?php
//must appear BEFORE the <html> tag
session_start();
unset($_SESSION['valid_user']);
unset($_SESSION['fname']);
header("Location: login .php");
?>

</html>
