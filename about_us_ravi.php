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
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
	.mySlides {display:none;}
	</style>
</head>
<body >
	<div class = "container2" style="background-color: #00bfff";>
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
</div>
<div class="container">
<h2 class="w3-center"></h2>

<div class="w3-content w3-display-container">
  <img class="mySlides" src="images/sl1.jpg" style="width:100%">
  <img class="mySlides" src="images/sl2.jpg" style="width:100%">
  <img class="mySlides" src="images/sl3.jpg" style="width:100%">
 
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

<div class="row">
        	<div class="col">
        		<div class="bg-light mt-3 px-2" style="border-radius: 5px; border: #0000ff solid thick">
                        <h1>why jcu</h1>
                         
                        <p class="fusion-title title sep-underline sep-solid fusion-title-size-three fusion-border-below-title" style="border-bottom-color:#ffffff;margin-top:0px;margin-bottom:10px;"><em>Class</em>JCU is recognised around the world for its expertise in marine biology, environmental studies, tropical health, and tourism. Our professional 				coursework programs are accredited by industry and professional associations and many professionals are guest lecturers for our postgraduate programs. Over the past five years, JCU academics have won 31 national awards for teaching excellence from the Australian Teaching and Learning Council – more than many larger universities.JCU is a leader in teaching and research addressing the critical challenges facing the Tropics, worldwide.JCU is ranked in the top 2% of universities in the pre-eminent global rankings system, the Academic Ranking of World Universities.Recently ranked by Times Higher Education (THE) in the ‘Top 150 Universities under 50’.First in the world for citations in the field of coral reef ecology and is in the top three in its fields of research strength in ecology and environment, plant and animal sciences and geosciences.JCU is internationally recognised for its leadership in tourism teaching and research.</p>

                        <h2>About Bribsane</h2>
                        <img height="100%" width="100%" src="art.jpg"/>
                        <p>Brisbane’s comparatively low living expenses and tuition costs, are all factors that make Brisbane one of the most liveable cities in the world.James Cook University Brisbane Campus is a modern high rise building, centrally located in the Central Business District (CBD) on Queen Street.Students have access to study space, computer stations, high speed internet and WiFi, leisure and activity rooms, all within walking distance of the riverfront, Queen Street’s main shopping mall, city library and the many shops, parks and cafes that our beautiful city has to offer.The campus is easily accessible via the many forms of public transport which is discounted for students.</p>

                        <h2>student services</h2>
                        <p>Student Services is your ‘one stop shop’ for all university related enquiries. Whether it’s fee payment, timetable enquiries, course or subject changes, transport information and any other general assistance – we’re here to help. We’ll be here from the start of your journey guiding you through enrolments and Orientation week, all the way through to Graduation and obtaining your final academic transcript.

</p>
            	</div>
        	</div>
            <div class="col">
            	<div class="bg-light mt-3 px-2" style="border-radius: 5px; border: #0000ff solid thick">
                        <h1>student association</h1>
                        <img height="100%" width="100%" src="images/studentassociation.jpg"/>

                        <p>The JCU Brisbane Student Association is a team of student leaders who form a bridge of communication between the students and JCU Brisbane staff. The JCU Brisbane Student Association has been instrumental in bringing about significant changes around the campus through the following objectives:
<ul>
<li>To be the voice and to act on behalf of JCU Brisbane students to ensure that education continues to be accessible and equitable to all.</li>
<li>To promote educational, social, cultural, and recreational student activities.</li>
<li>To provide discussion and debates about matters of student interest through which we can help improve all student facilities and services.</li>
<li>To provide engaging clubs and social groups students can join for extracurricular activities.</li></ul></p>

                        <h2>student lounge</h2>
                        <img height="100%" width="100%" src="images/studentlounge.jpg"/>
                        <p>The Student Lounge is the best place to hang out on campus! Drop by between classes, during lunch breaks or after hours to enjoy the snooker table, foosball table, air hockey, multiple televisions, couches and XBox 360 consoles! The lounge also has a separate kitchen equipped with fridge and microwave facilities as well as a large dining area where you can enjoy your meal with friends</p>

                        <p style="display: none;" id="expand-p">we also have many games provided for the students. Apart from games, student can relax, they can take a break from studeies and have fun in the student lounge. for pool and table tennis we also have tournaments were students can enroll and keep their minds busy with other things apart from studies. <span style="display: none;" id="expand-text"> we have free fruit delievered each week at the library on level 2. we can take a break with fresh cup of coffee.</span> 
                        <a id="expand-p-click" href="javascript:;" style="text-decoration: none;"
                           onClick="show_text('expand-p-click', 'expand-p', 'block')">Read more ...</a> </p>
 
                        <h2>Prayer Room</h2>
                        <p>James Cook University Brisbane embraces the religious and spiritual diversity of our community.  We recognise that some faiths require religious observance such as prayer and other ceremonial activities during university hours. <span style="display: none;" id="expand-text"> To support this we have a Multi Faith Prayer Room.It is located on level 5 of the campus and is open to both JCU Brisbane students and staff. This room is designed to be a welcoming and accessible space for people of all faiths and traditions. it is located in Level 5 and the Opening Hours are Monday to Friday 7:30am – 6:30pm.Australia has a multicultural population with a diverse range of religions and spiritual beliefs.</span>
                            <a id="expand-click" href="javascript:;" style="text-decoration: none;"
                               onClick="show_text('expand-click', 'expand-text', 'inline')">Read more ...</a>
                        </p>
            	</div>
            </div>
</div>
</div>
 <?php include("include/footer.inc") ?>
<body>
</body>
</html>