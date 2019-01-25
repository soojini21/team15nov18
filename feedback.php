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
    <link rel="stylesheet" href="css/member.css">
    <title>Feedbacks</title>
</head>
<body onLoad="run_first()">
<div class = "container2" style="background-color: #00bfff";>
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
</div>
    
    <div class="container">
    <div class = "row">
    	<div class="col" style="margin:auto;">
    	<form action="feedback_process.php" method="post">
        <div class="mt-3 px-2 member_frm">
        	<h1>Feedback Form For Staff</h1>
            <h2>Give your Feedback about our staffs here</h2>
            <p><i>Fields marked with an asterisk (*) must be entered.</i></p>
             <div class="row">
            	<div class="col">
                <label for="staff_id">*Staff id:</label>
                	<select name="staff_id" id="staff_id" required>
  							<option value="1">1</option>
  							<option value="2">2</option>
  							<option value="3">3</option>
  							<option value="4">4</option>
							
					</select> 
 
                </div>
            </div>
           
            <div class="row">
            	<div class="col">
                	<label for="comment">*Comment:</label>
                    <textarea id="comment" name="comment" rows="4" cols="30" required></textarea>
                </div>
            </div>
            
            
             <div class="row">
            	<div class="col">
                <label for="rating">*Rate here:</label>
                	<select name="rating" id="rating" required>
  							<option value="5">5</option>
  							<option value="4">4</option>
  							<option value="3">3</option>
  							<option value="2">2</option>
							<option value="1">1</option>
					</select> 
 
                </div>
            </div>

            <div class="row">
            	<div class="col">
                	<label>&nbsp;</label>
                    <input type="submit" id="submit" value="Submit" />
                    <input type="reset" id="reset" value="Clear Form" />
                </div>
            </div>
        </div>
        </form>
        <br>
    </div>
    
   <div class="col" style="margin:auto;">
   
   <div style="margin:auto;">
    	<?php
			//make the database connection
		$conn  = db_connect();
		//create and execute a query
		$sql = "SELECT * FROM staff_feedback;";
		$result = $conn -> query($sql);
		$count=0;
		$final_rating=0;
		print "<h2>Average Rating</h2>\n";
		
		while ($field = $result -> fetch_field())
					{
					
  						if(strtoupper($field->name)=='NAME'  || strtoupper($field->name)=='COMMENT' ||strtoupper($field->name)=='RATING' ){
						
						}
						
					} // end while
		while ($row = $result -> fetch_assoc()){
                    //look at each field
                    
				
					
					$rating = $row["rating"];
					$new_rating = (int) "$rating";
					
					$count = $count+1;
					
					$final_rating = $final_rating + $new_rating;
      			    print "<tr>\n";
                    //output
                    
                    
                
						
      			    echo "</tr>\n";
                }// end while
				if ($count>0){
					echo $final_rating/$count;}
				else {
					echo $final_rating;}
				
		?>
    </div>
    
    
	<?php
	
		//make the database connection
		$conn  = db_connect();
		//create and execute a query
		$sql = "SELECT * FROM staff_feedback;";
		$result = $conn -> query($sql);
		
		print "<h1>List of all feedbacks</h1>\n";
		print "<div class=\"table-responsive mt-3\">\n";
		print "<table class=\"table table-striped\">\n";
        echo "<thead>\n";
				//get field names
				echo "<tr>\n";
					while ($field = $result -> fetch_field())
					{
					
  						if(strtoupper($field->name)=='STAFF_ID'  || strtoupper($field->name)=='RATING' ){
						echo "<th>" . strtoupper($field->name) . "</th>\n";
						}
						
					} // end while
      			echo "</tr>\n";
    			echo "</thead>\n";
    			echo "<tbody>\n";
                //get row data as an associative array
                while ($row = $result -> fetch_assoc()){
                    //look at each field
                    $staff_id = $row["staff_id"];
                                        
                    $rating = $row["rating"];
				
					
					
					
					
					
					
					
      			    print "<tr>\n";
                    //output
                    
                    if($rating)
                        echo "<td class=\"align-middle\">$rating</td>\n";
                    

                    if($staff_id)
                        echo "<td class=\"align-middle\">$staff_id</td>\n";
                 	
					 
						
      			    echo "</tr>\n";
                }// end while
		print "</tbody>\n";
        print "</table>\n";        
        echo "</div>\n";
        $conn -> close();
		
		
		
	?>
    
    
    </div>
 
    
    
    </div>
    <div style="margin:auto;">
    <form class="form-inline" action="search.php" style="padding:15px;">
            <input class="form-control mr-sm-2" type="Search" name="key" placeholder="Search for full feedback">
            <button class="btn light my-sm-0" type="submit">Click here</button>
     </form>
    
    
    </div>
    </div>
    
        

   <?php include("include/footer.inc") ?>
  


</body>

</html>


