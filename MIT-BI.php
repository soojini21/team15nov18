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
    <script src="js/nav.js_ravi"></script>
    <script src="js/read_more.js_ravi"></script>
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
    	<div class="bg-light mt-3 px-2" style="border-radius: 5px; border: #000000 solid thick; font:serif"; >
    	<h1>MIT-BI</h1>
        <p>JCU masters students study a series of foundation and core subjects to overlay undergraduate learning and put in place the groundwork upon which to build deep specialist knowledge.

This masters by coursework is designed for graduates from Information Technology and Computer Science, or IT professionals who wish to deepen their knowledge in the field. A JCU Master of Information Technology provides advanced critical analysis skills and comprehensive knowledge of tools and technologies with hands-on application for solving relevant problems to make a difference in the world.

For international students, depending on the relevant visa program requirements, this course may be specified on the Department of Immigration and Border Protection ‘skilled occupation’ list. Check the most updated list with the department to confirm.

Available for international students, graduates are eligible to undertake the ACS Professional Year Program helping bridge the gap between study and professional employment.</p>

		<h1> Career opportunities </h1>
        <p> Around 75% of jobs of the future are predicted to require STEM skills. This gives JCU Information Technology postgraduate students the edge to helping solve the technology challenges of the future.

The possibilities for Information Technology postgraduates are virtually endless. Some jobs that will evolve in the technology space don’t even exist yet. The demand for Information Technology skills continues to grow across all industry sectors. JCU students explore future technologies to advise and lead organisational decisions.

JCU’s Master of IT is accredited by the Australian Computer Society (ACS). ACS is the authority responsible for the accreditation of professional ICT education programs in Australia. Graduates are eligible to become an Associate Member of the Society.</p>

		<h1>Majors</h1>
        
        <p>Business Informatics</p>
        
        Students develop highly sought after integrated knowledge that combines information technology, management, and business intelligence.World-class lecturers who are committed to student success help JCU master’s students build on undergraduate knowledge.The Business Informatics major provides an in-depth understanding of data analysis and decision modelling, business intelligence and data mining, enterprise database systems, and advanced databases and applications.This major is offered in Singapore and Brisbane for international students only. I shows similarities to information systems (IS), which is a well established discipline originating from North America. However, there are a few differences that make business informatics a unique own discipline:
<ul>
<li>Business informatics includes information technology, like the relevant portions of applied computer science, to a larger extent than information systems does.</li>
<li>Business informatics includes significant construction and implementation oriented elements. I.e. one major focus lies in the development of solutions for business problems rather than the ex post investigation of their impact.</li></ul>
Information systems (IS) focuses on empirically explaining phenomena of the real world. IS has been said to have an "explanation-oriented" focus in contrast to the "solution-oriented" focus that dominates BI. IS researchers make an effort to explain phenomena of acceptance and influence of IT in organizations and the society applying an empirical approach. In order to do that usually qualitative and quantitative empirical studies are conducted and evaluated. In contrast to that, BI researchers mainly focus on the creation of IT solutions for challenges they have observed or assumed.

Tight integration between research and teaching following the Humboldtian ideal is another goal in business informatics. Insights gained in actual research projects become part of the curricula quite fast because most researchers are also lecturers at the same time.The pace of scientific and technological progress in BI is quite rapid, therefore subjects taught are under permanent reconsideration and revision.In its evolution, the BI discipline is fairly young. Therefore, significant hurdles have to be overcome in order to further establish its vision
        
        

         </div> 
         <button class="btn " type="submit" style="margin:0 auto; display:block;" onClick="location.href = 'enquiry.php';">REGISTER</button>
    </div>
	<?php include("include/footer.inc") ?>
</body>
</html>