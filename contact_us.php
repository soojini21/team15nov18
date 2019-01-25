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
    <title>Contact Us</title>
</head>
<body onLoad="run_first()">
	<div class = "container2" style="background-color: #00bfff";>
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
</div>
    <br/>
    <div class="container">
    <h2>Search for staff details</h2>
    	<form class="form-inline" action="search_event_admin.php">
            <input class="form-control mr-sm-2" type="Search" name="key1" placeholder="Search">
            <button class="btn light my-sm-0" type="submit">Search</button>
    	</form><br/>
	<p><i>(for our admins, To update your contact details please fill in this <a href="staff_update.php">form</a>)</i></p>
	</div>
    <br/>
    <div class="container">
    	<h3>Our Event Admins: </h3>
    	<div class="row">
            	<p><img src="images\Hieu.jpg" style="max-width: 25%; height:auto; padding-right:10px; padding-bottom:10px ; float:left ; padding-top: 10px" alt="Hieu_pic"/> <b>Trong Hieu Doan</b> <br/>Organized and detail-oriented event planner with more than eight years of experience in planning and executing meetings and events. Expert in selecting and transforming venues to accommodate clients’ needs and building strong relationships with quality vendors.</p>
        </div>
        <div class="row">
            	<p><img src="images\Thanh.jpg" style="max-width: 25%; height:auto; padding-right:10px; padding-bottom:10px ; float:left ; padding-top: 10px" alt="Hieu_pic"/> <b>Nguyen Duc Thanh</b> <br/>Highly motivated Special Events Manager with three years of experience, responsible for the planning, development and direction of community services, special events, and recreation programming for all groups, ages and interest levels.</p>
        </div> 
        <div class="row">
            	<p><img src="images\Duc_Bui.jpg" style="max-width: 25%; height:auto; padding-right:10px; padding-bottom:10px ; float:left ; padding-top: 10px" alt="Hieu_pic"/> <b>Minh Duc Bui</b> <br/>As an Event Manager, my objective is to conceptualize and facilitate events in ways so unique but still affordable for my clients. Having been an Event Manager for over two years, I have gained sufficient expertise in managing events of different occasions ranging from weddings, graduations, birthdays, to seminars and conferences. Throughout my experience, I have established the basic systems and procedures necessary to make the business flow smoothly. My strong foundation in using digital and graphical presentations as well as my strong communication skills is sure way to gain a wide group of clients both local and international.</p>
        </div> 
        <div class="row">
            	<p><img src="images\Duc_Hoang.jpg" style="max-width: 25%; height:auto; padding-right:10px; padding-bottom:10px ; float:left ; padding-top: 10px" alt="Hieu_pic"/> <b>Minh Duc Hoang</b> <br/>Highly energetic and detail-oriented Event Executive with a strong history of client satisfaction and successful event management across a variety of businesses. Adept multitasker able to address a high volume of event processes and concerns with accuracy and efficiency. Strong abilities to manage small and large event teams with facility and courtesy</p>
        </div>    
    </div>
	<?php include("include/footer.inc") ?>
</body>
</html>