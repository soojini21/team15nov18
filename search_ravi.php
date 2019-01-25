<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>campussearch</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

  <!-- Loading main css file -->
  <link rel="stylesheet" href="style/style.css">

</head>
  
<body onLoad="run_first()"><br>
<div class = "container2" style="background-color: #00bfff";>
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
</div>

	<div class ="site-container">
    	<!------------------- Header Part ------------------->
    	
        
        <!------------------- Contain Part ------------------->
    	<main class="main-content">
        	<div class="container">
            		
    	<?php
    
        	//make the database connection
        	$conn  = db_connect();

        	//get user input
        	$key= $_POST['key_rav'];
        	if(isset($_POST['key_rav'])) {
            	$key = $conn -> real_escape_string($_POST['key_rav']);
        	}

			//create and execute a query
			$sql = "SELECT * FROM campus";
        	//note: SQL is case-insensitive by default
        	//$sql = $sql . " WHERE (Title like '%$key%') or (Director like '%$key%') or (Storyline like '%$key%');";
			$sql = $sql . " WHERE name like '%$key%';";
			$result = mysqli_query($conn,$sql);

       
                //get row data as an associative array
                while ($row = mysqli_fetch_assoc($result)){
                    //look at each field
                    $id = $row["id"];
                    $name = $row["name"];
                    $location= $row["location"];
                    $contact = $row["contact"];
					$image = $row["image"];
					
					
					
					echo '<img src='.$image.' "style= width="30%"; height="200">';
                }// end while

    		print "</tbody>\n";
        print "</table>\n";
        print "</div>\n";
        $conn -> close();
	?>	
    </div>
    <!------------------- Footer Part ------------------->
<?php include("include/footer.inc") ?>
</body>
</html>>