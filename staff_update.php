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
    <link rel="stylesheet" href="css/member.css">
    <title>Update staff Information</title>
</head>
<body onLoad="run_first()">
	<div class = "container2" style="background-color: #00bfff";>
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
</div>
    <div class="container">
    	<form action="staff_update_process.php" method="post" id="mainForm1" name="mainForm1">
        <div class="bg-light mt-3 px-2 member_frm" style="border-radius: 5px; border: #0000ff solid thick">
        	<h1>Details update form</h1>
            <h2>Please enter your updated details</h2>
            <p><i>Please enter <b>your unique Staff ID</b> and updated information (if you enter incorrect staff ID your information can't be updated)</i></p>
            <div class="row">
            	<div class="col">
                	<label style="width:120px;" for="staff_id">*Staff ID:</label>
                    <input type="text" id="staff_id" name="staff_id" size="30" maxlength="50" required />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label style="width:120px;" for="fname">First Name:</label>
                    <input type="text" id="fname" name="fname" size="30" maxlength="50" required />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label style="width:120px;" for="lname">Last Name:</label>
                    <input type="text" id="lname" name="lname" size="30" maxlength="50" required/>
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label style="width:120px;" for="email">Email:</label>
                	<input type="text" id="email" name="email" size="30" maxlength="50" required />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label style="width:120px;" for="event">Event:</label>
                	<select name = "event">
    					<option value="JCU Musculoskeletal Workshop">JCU Musculoskeletal Workshop</option>
    					<option value="LF Power Memorial Lecture 2019">LF Power Memorial Lecture 2019</option>
                        <option value="Harmony Day">Harmony Day</option>
 					</select>
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label>&nbsp;</label>
                    <input type="submit" id="submit" value="Submit" />
                </div>
            </div>
        </div>
        </form>
    </div>
	<?php include("include/footer.inc") ?>
</body>
</html>


