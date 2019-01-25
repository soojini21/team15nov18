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
    <link rel="stylesheet" href="css/index.css">
    <script src="js/time.js"></script>
    <script src="js/search_home.js"></script>
  
  
  
    <title>Home - James Cook University Brisbane</title>
</head>
<body onLoad="run_first()">
<div class = "container2" style="background-color: #00bfff";>
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
</div>
   
<div class="container-fluid" style="background-color:#e6e6e6;">
	<div class="row">
   		<div class="col-3" style="margin:auto;">
        	<img src="images/leftvideo.jpg" class = "img-fluid" style="margin:auto;">
       		<p>“Studying at James Cook University Brisbane is one of the best choices I have made.</p>
            <p>Not only do I enjoy my course but I am confident that the learning opportunities offered throughout my course are preparing me to be a valuable graduate.</p>
            <p>I have found Brisbane city to be a wonderful place to study and enjoy lifestyle balance."</p>
  		</div>
          
     <div class="col-6">
   		<video width="100%" height="600px" autoplay muted loop id="myVideo">
  			<source src="images/banner_video.mp4.mp4" type="video/mp4">
		</video>
     </div>
        
     <div class="col-3" style="margin:auto;";>
        <div class ="row" style="background-image:url('images/upeventimg1.jpg');background-size: 100% auto;">
        	<div class ="col">
        	<div class="bgimg">
  				
    				<a href="https://www.jcu.edu.au/events/2019/february/jcu-musculoskeletal-workshop"><h2 style="color:#ff3377; padding:10px;">COMING SOON</h2></a>
                    
                    <p id="demo" style="font-size:30px; color:blue; padding: 10px;" ></p>
    			</div>	
                <div class ="col">
      			
 <?php
	
		//make the database connection
		$conn  = db_connect();
		//create and execute a query
		$sql = "SELECT * FROM events;";
		$result = $conn -> query($sql);
        echo "<thead>\n";
				//get field names
				echo "<tr>\n";
					while ($field = $result -> fetch_field())
					{
					
  						if(strtoupper($field->name)=='EVENT_NAME'  || strtoupper($field->name)=='EVENT_COST'){
						
						}
						
					} // end while
      			echo "</tr>\n";
    			echo "</thead>\n";
    			echo "<tbody>\n";
                //get row data as an associative array
                while ($row = $result -> fetch_assoc()){
                    //look at each field
                    $name = $row["event_name"];
                                        
                    $cost = $row["event_cost"];
					
				

      			    print "<tr>\n";
                    //output
                    
                    if($name && $cost=='free')
                        echo "<p><b><font color='white' size = '4pt'>$name</font></b></p>";
						echo "<br>";
                    	

                    if($cost && $cost=='free')
                        echo "<font color='white' size='4pt'  >$cost</font>";
                    

                

      			    echo "</tr>\n";
                }// end while
		print "</tbody>\n";
     
        $conn -> close();
?>
</div>
        </div>
        </div>
        
        <hr>
        
        <div class="row" style="background-image:url('images/upeventimg2.jpg');background-size: 100% auto;">
        <div class="col">
        <div class="bgimg">
        
    				<a href="https://www.jcu.edu.au/events/2019/february/lf-power-memorial-lecture-2019"><h2 style="color:white; padding:10px;">COMING SOON</h2></a>
                    
                    <p id="demo2" style="font-size:30px; color:white; padding: 10px;" ></p>
                    </div>
                    <div class="col">
       
 <?php
	
		//make the database connection
		$conn  = db_connect();
		//create and execute a query
		$sql = "SELECT * FROM events;";
		$result = $conn -> query($sql);
        echo "<thead>\n";
				//get field names
				echo "<tr>\n";
					while ($field = $result -> fetch_field())
					{
					
  						if(strtoupper($field->name)=='EVENT_NAME'  || strtoupper($field->name)=='EVENT_COST'){
						
						}
						
					} // end while
      			echo "</tr>\n";
    			echo "</thead>\n";
    			echo "<tbody>\n";
                //get row data as an associative array
                while ($row = $result -> fetch_assoc()){
                    //look at each field
                    $name = $row["event_name"];
                                        
                    $cost = $row["event_cost"];
					
					

      			    print "<tr>\n";
                    //output
                    
                    if($name && $cost=='200$')
                        echo "<p><b><font color='white' size = '4pt'>$name</font></b></p>";
						echo "<br>";
                    	//echo "<p> <font color=blue>One line simple string in blue color</font> </p>";

                    if($cost && $cost=='200$')
                        echo "<font color='white' size='4pt'  >$cost</font>";
                

      			    echo "</tr>\n";
                }// end while
		print "</tbody>\n";
     
        $conn -> close();
?>
     </div>
      	</div>
        	</div>
   				</div>
</div>
</div>
   
   <div class="container">
    	<div class="row">
        	<div class="col">
        		<div class="mt-3 px-2" >
                     <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  						<div class="carousel-inner">
    						<div class="carousel-item active">
     							 <img class="d-block w-100" src="images/event_1.jpg" alt="First slide">
    						</div>
    					<div class="carousel-item">
      							<img class="d-block w-100" src="images/event_brisbane_1.jpg" alt="Second slide">
    					</div>
    					<div class="carousel-item">
      							<img class="d-block w-100" src="images/event_brisbane_2.jpg" alt="Third slide">
    					</div>
  						</div>
  							<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
  							</a>
  							<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
  							</a>
					</div>
            	</div>
        	</div>
            <div class="col">
            	<div class="mt-3 px-2" >
                    <h1 style="margin:10%;"><b>Join with us</b></h1>
                    <p>There are hundred of activities in Brisbane and our university</p>
     	
<a href="events.php">
  <img src="images/arrow.jpg" style="float:right">
</a>
            	</div>
            </div>
    	</div>
        
   
        <div class="row">
        	<div class="col">
            	<div class="mt-3 px-2" >
                    <h1 style="margin:10%;"><b>Apply member!!</b></h1>
                    <p>There are hundred of activities in Brisbane and our university</p>
     	
<a href="Login.php">
  <img src="images/arrow.jpg" style="float:right">
</a>
            	</div>
            </div>
            
            <div class="col">
        		<div class="mt-3 px-2" >
                     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/loginimg1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/loginimg2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/loginimg3.jpg" alt="Third slide">
    </div><div class="carousel-item">
      <img class="d-block w-100" src="images/loginimg4.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            	</div>
        	</div>
        
        
        </div>
        
       <h1><b>News and Opinions</b></h1>
        
        <div class="row">
        	<div class="col">
        		<div class="mt-3 px-2">
                <p>January 2019</p>
                <a href="https://www.jcub.edu.au/jcu-brisbane-bike-club-ride-january-2019/"><img src = "images/news1.jpg"></a>
                       <h2>JCU Brisbane Bike Club</h2>
                       
                       <p>Last weekend the JCU Brisbane Bike Club ventured off on their first ride of 2019. Here is Doctor Ian Kirkwood’s report:</p>
                       <p>Great Eastern Fly In @ Evans Head NSW</p>
                       <p>The weather looked great and our expectations of a fun day were very high when we met at McDonald’s Springwood on Sunday morning. By the time we were on our bikes to head out  there were 4 JCUB students, Doctor Ian, the Joblinx manager, Leanna Tucker and her husband, and some of Dr Ian’s friends. <span style="display: none;" id="expand-text1">
                            We rode for 2 hours to the airfield at Evans Head with a brief stop along the way where 3 more riders joined us. By the time we arrived, there were nearly 20 bikes of varying sizes, makes, and levels of performance. There was even a three-wheeled trike in the group.</span>
                            <a id="expand-click" href="javascript:;" style="text-decoration: none;"
                               onClick="show_text('expand-click', 'expand-text1', 'inline')">Read more ...</a>
                        </p>

                        
            	</div>
        	</div>
            <div class="col">
            	<div class="mt-3 px-2">
                <p>14 January 2019</p>
                <a href="https://www.jcub.edu.au/academic-excellence-scholarships-sp22/"><img src = "images/news2.jpg"></a>
                       <h2>Academic Excellence Scholarships SP22</h2>
                       
                       <p>James Cook University Brisbane Campus is proud to recognise and reward students who achieve excellence in their studies. Each trimester we acknowledge those students that have achieved academic excellence and give both recognition and monetary reward for their continued efforts. Congratulations to all the reward recipients and thank you to everyone who attended the ceremony last week.</p>
               

                        
            	</div>
            </div>
            <div class="col">
        		<div class="mt-3 px-2">
                <p>21 December 2018</p>
                <a href="https://www.jcub.edu.au/surfing-lesson-excursion/"><img src = "images/news3.jpg"></a>
                       <h2>Surfing Lesson Excursion</h2>
                       
                       <p>The Health and Fitness Club recently held a ‘Surfing Lessons for Beginners’ field trip at Main Beach on the Gold Coast. This was a very popular and successful outing with over 50% of our students mastering the art of standing up on a surfboard!</p>
                       
                       <p>Do you also want to learn to surf? <span style="display: none;" id="expand-text2">
                            Remember to tell your club presidents what field trips you want to attend next trimester so they can plan ahead of time.

Thank you to the JCU Brisbane Student Association for funding this initiative, the Health and Fitness Club for organising it and to everyone who attended.</span>
                            <a id="expand-click" href="javascript:;" style="text-decoration: none;"
                               onClick="show_text('expand-click', 'expand-text2', 'inline')">Read more ...</a>
                        </p>

                        
            	</div>
        	</div>
        </div>
        
     </div>
 <?php include("include/footer.inc") ?>
</body>
</html>

        