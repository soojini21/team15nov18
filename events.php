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
    <script src="js/event_register.js"></script>
    <script src="js/read_more.js"></script>
    <title>Events</title>
</head>
<body onLoad="run_first()">
	<div class = "container2" style="background-color: #00bfff";>
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
</div>
    <br/>
    <div class="container">
    <h2>Search JCU events lists</h2>
    	<form class="form-inline" action="search_event.php">
            <input class="form-control mr-sm-2" type="Search" name="key" placeholder="Search">
            <button class="btn light my-sm-0" type="submit">Search</button>
    	</form>
	<br/>
	</div>
    <div class="container">
    	<div class="row">
        	<div class="col">
            	<div class="bg-light mt-3 px-2">
            		<div style="font-style: normal; font-weight: 600;">
            			9 Feb 2019  |  Cairns   | College of Medicine and Dentistry 
        			</div>
                    <div style="margin:7px 0 -15px 0;">
            			<a href="https://www.jcu.edu.au/events/2019/february/jcu-musculoskeletal-workshop" style="font-weight: bold; font-size:18px; margin:20px 0;line-height:1.2;" target="_blank">JCU Musculoskeletal Workshop</a><br/>
                        <p><img src="images\event1.jpg" style="max-width: 25%; padding-right:10px; padding-bottom:10px ; float:left ; padding-top: 10px" alt="event1">This highly practical full-day workshop will teach helpful techniques in diagnosis and therapy of common musculoskeletal conditions. It aims to cover many aspects of musculoskeletal medicine from basic anatomy and radiological interpretation to pain management, soft tissue injection training and rehabilitation.</p>
                        <p>Participants will have the benefit of reviewing through cadaveric prosection the muscles and joints of the shoulder, knee, hip and spine. Training in radiological assessment, strapping and soft tissue injection will be provided by expert faculty. Finally, rehabilitation and long-term management options will be reviewed and evaluated.</p><br/>
                        <h4>Registration</h4>
                        	<ul>
                            	<li>This workshop is capped at 40 participants</li>
                                <li>Please note that travel and accommodation are not included in the registration fee.</li>
                                <li>This workshop has RACGP CPD and ACRRM PDP points. RACGP Activity Number: 129684. ACRRM Activity Number: 12667</li>
                                <li><p>Please click<a href="event_resgister.php" target="_blank"> here</a> for registration</p></li>
                            </ul>
        			</div>
            	</div>
        	</div>
    	</div>
    	<div class="row">
        	<div class="col">
            	<div class="bg-light mt-3 px-2">
            		<div style="font-style: normal; font-weight: 600;">
            			11 Feb 2019 | Townsville | College Of Science, Technology And Engineering 
        			</div>
                    <div style="margin:7px 0 -15px 0;">
            			<a href="https://www.jcu.edu.au/events/2019/february/lf-power-memorial-lecture-2019" style="font-weight: bold; font-size:18px; margin:20px 0;line-height:1.2;" target="_blank">LF Power Memorial Lecture 2019</a><br/>
                        <img src="images\event2.jpg" style="max-width: 25%; padding-right:10px; padding-bottom:10px ; float:left ; padding-top: 10px" alt="event2">
                        <h4>Guest Speaker Sir Fraser Stoddart</h4>
                   		<p>2016 Nobel Laureate in Chemistry</p>
                        <p>Board of Trustees Professor of Chemistry, Northwestern University</p>
                        <p>Register<a href="event_resgister.php" target="_blank"> here</a></p>
                   		<h4>About the Lecture</h4>
                        
                        <p>Associate Professor Leslie Frederick Power (BCom, BSc, PhD) is remembered by his former colleagues and students for his many contributions to James Cook University and for his special interest in student affairs. A broad interest in physical science led him to a ﬁrst class honours degree in Chemistry at the University of Queensland in 1962. In the same year he became one of the ﬁrst academic staff to be appointed at the University College of Townsville - later to become James Cook University of North Queensland.</p><span style="display: none;" id="expand-text3">
                     	<p>He served on the ﬁrst council of the University and was Dean of the Faculty of Science. At the time of his death he was acting Head of the Department of Chemistry and Biochemistry. The L. F. Power Memorial Lecture is an invited lecture in honour of the memory of Les Power.</p>
                        <h4>About the Speaker</h4>
                        <p>The academic career of Sir Fraser Stoddart, who was born in Edinburgh, Scotland, can be traced from the Athens of the North to the Windy City beside Lake Michigan with interludes on the edge of the Canadian Shield beside Lake Ontario, in the Socialist Republic of South Yorkshire, on the Plains of Cheshire beside the Wirral, in the Midlands of the Heartland of Albion, and in the City of the Angels beside the Peaceful Sea. Sir Fraser is known for his pursuing chemistry beyond the molecule, which, combined with his interest in templation, has led to the template directed synthesis, based on molecular recognition and self-assembly processes, of a wide range of mechanically interlocked molecules, bistable variants of which have found their way into molecular electronic devices and drug delivery systems. Sir Fraser has authored over 1000 publications and he has given over 1000 invited lectures. He has mentored more than 400 graduate students  and postdoctoral fellows during more than four decades as a professor, scholar and researcher in chemistry. Many of them are now engaged successfully in scholarly pursuits of their own, in academia, in publishing, in industry, in commerce, and in government.</p>
                        <p>Professor Stoddart was appointed by Her Majesty Queen Elizabeth II as a Knight Bachelor in her 2007 New Year’s Honors list for services to chemistry and molecular nanotechnology. In the same year, he won the King Faisal International Prize in Science, the Albert Einstein World Award in Science, the Feynman Prize in Nanotechnology, and the Tetrahedron Prize for Creativity in Organic Chemistry. In 2010, he was the recipient of a Royal Medal, granted by Her Majesty Queen Elizabeth II and presented to him by Prince Philip, Duke of Edinburgh. He is a Fellow of the Royal Society (1994) and a Member of both the American Academy of Arts and Sciences (2012) and the National Academy of Sciences (2014). In 2016, he received The Nobel Prize in Chemistry.</p></span>
                        <a id="expand-click" href="javascript:;" style="text-decoration: none;"
                               onClick="show_text('expand-click', 'expand-text3', 'inline')">Read more ...</a>
                               
                        <p><b>More information: </b><a href="https://events.jcu.edu.au/LFPowerLecture">https://events.jcu.edu.au/LFPowerLecture</a></p>
        			</div>
            	</div>
        	</div>
        </div>
        <div class="row">
        	<div class="col">
            	<div class="bg-light mt-3 px-2">
            		<div style="font-style: normal; font-weight: 600;">
            			21 Mar 2019 | Cairns 
        			</div>
                    <div style="margin:7px 0 -15px 0;">
            			<a href="https://www.jcu.edu.au/events/2019/march/introduction-to-endnote2" style="font-weight: bold; font-size:18px; margin:20px 0;line-height:1.2;" target="_blank">Harmony Day</a><br/>
                        <p><img src="images\event3.jpg" style="max-width: 25%; padding-right:30px; padding-bottom:10px ; float:left ; padding-top: 10px" alt="event3">Celebrate JCU’s cultural diversity with music, food, dance, entertainment and activities.</p>
                        <p>At JCU, everyone belongs.</p>
                        <h4>More information:</h4>
                        <p>For more information, check out the JCU Student Life Facebook page <a href="https://www.facebook.com/jcustudentlife" target="_blank">here</a></p><br/>
                        <p>Register for this event <a href="event_resgister.php" target="_blank">here</a></p>
        			</div>
            	</div>
        	</div>
    	</div>
    </div>
    
	<?php include("include/footer.inc") ?>
</body>
</html>