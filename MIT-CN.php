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
    	<h1>MIT-CN</h1>
        <p>JCU masters students study a series of foundation and core subjects to overlay undergraduate learning and put in place the groundwork upon which to build deep specialist knowledge.

This masters by coursework is designed for graduates from Information Technology and Computer Science, or IT professionals who wish to deepen their knowledge in the field. A JCU Master of Information Technology provides advanced critical analysis skills and comprehensive knowledge of tools and technologies with hands-on application for solving relevant problems to make a difference in the world.

For international students, depending on the relevant visa program requirements, this course may be specified on the Department of Immigration and Border Protection ‘skilled occupation’ list. Check the most updated list with the department to confirm.

Available for international students, graduates are eligible to undertake the ACS Professional Year Program helping bridge the gap between study and professional employment.</p>

		<h1> Career opportunities </h1>
        <p> Around 75% of jobs of the future are predicted to require STEM skills. This gives JCU Information Technology postgraduate students the edge to helping solve the technology challenges of the future.

The possibilities for Information Technology postgraduates are virtually endless. Some jobs that will evolve in the technology space don’t even exist yet. The demand for Information Technology skills continues to grow across all industry sectors. JCU students explore future technologies to advise and lead organisational decisions.

JCU’s Master of IT is accredited by the Australian Computer Society (ACS). ACS is the authority responsible for the accreditation of professional ICT education programs in Australia. Graduates are eligible to become an Associate Member of the Society.</p>

		<h1>Majors</h1>
        
        <p>Computing and network</p>
        
        Solve the problems of tomorrow with specialist knowledge in advanced computing, programming, information systems and networking. JCU students learn from world experts in cutting-edge facilities to discover how to create technology solutions to human problems through human-computer interaction, advanced algorithm analysis, and complex data communication principles.
        
        A computer network, or data network, is a digital telecommunications network which allows nodes to share resources. In computer networks, computing devices exchange data with each other using connections (data links) between nodes. These data links are established over cable media such as wires or optic cables, or wireless media such as WiFi.

Network computer devices that originate, route and terminate the data are called network nodes. Nodes are identified by network addresses, and can include hosts such as personal computers, phones, and servers, as well as networking hardware such as routers and switches. Two such devices can be said to be networked together when one device is able to exchange information with the other device, whether or not they have a direct connection to each other. In most cases, application-specific communications protocols are layered (i.e. carried as payload) over other more general communications protocols. This formidable collection of information technology requires skilled network management to keep it all running reliably.

Computer networks support an enormous number of applications and services such as access to the World Wide Web, digital video, digital audio, shared use of application and storage servers, printers, and fax machines, and use of email and instant messaging applications as well as many others. Computer networks differ in the transmission medium used to carry their signals, communications protocols to organize network traffic, the network's size, topology, traffic control mechanism and organizational intent. The best-known computer network is the Internet.
        
        
        
 

         </div> 
         <button class="btn " type="submit" style="margin:0 auto; display:block;" onClick="location.href = 'enquiry.php';">REGISTER</button>
    </div>
	<?php include("include/footer.inc") ?>
</body>
</html>