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
    <title>Feedback Search</title>
</head>
<body onLoad="run_first()">
	<div class = "container2" style="background-color: #00bfff";>
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
</div>
    <div class="container">
    <?php
    
        //make the database connection
        $conn  = db_connect();

        //get user input
        $key = '';
        if(isset($_GET['key'])) {
            $key = $conn -> real_escape_string($_GET['key']);
        }

		//create and execute a query
		$sql = "SELECT * FROM staff_feedback";
        //note: SQL is case-insensitive by default
        $sql = $sql . " WHERE (staff_id like '%$key%') or (comment like '%$key%') or (rating like '%$key%');";
		$result = $conn -> query($sql);

        //output result
		print "<h1>Full Feedbacks</h1>\n";
		print "<div class=\"table-responsive mt-3\">\n";
		print "<table class=\"table table-striped\">\n";
            print "<thead>\n";
				//get field names
				print "<tr>\n";
					while ($field = $result -> fetch_field())
					{
  						if(strtoupper($field->name)=='COMMENT'  || strtoupper($field->name)=='STAFF_ID' ){
						echo "<th>" . strtoupper($field->name) . "</th>\n";}
					} // end while
      			print "</tr>\n";
    		print "</thead>\n";
    		print "<tbody>\n";
                //get row data as an associative array
                while ($row = $result -> fetch_assoc()){
                    //look at each field
                    $staff_id = $row["staff_id"];
                    $comment = $row["comment"];
                    

      			    print "<tr>\n";
                    //output
                    
                    if($comment)
                        print "<td class=\"align-middle\">$comment</td>\n";
                    else
                        print "<td class=\"align-middle\">&nbsp;</td>\n";;

                    if($staff_id)
                        print "<td class=\"align-middle\">$staff_id</td>\n";
                    else
                        print "<td class=\"align-middle\">&nbsp;</td>\n";

                    

      			    print "</tr>\n";
                }// end while

    		print "</tbody>\n";
        print "</table>\n";
        print "</div>\n";
        $conn -> close();
	?>	
    </div>
	<?php include("include/footer.inc") ?>
</body>
</html>