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
    <title>Event Search</title>
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
		$sql = "SELECT * FROM events";
        //note: SQL is case-insensitive by default
        $sql = $sql . " WHERE (event_name like '%$key%') or (event_date like '%$key%') or (event_cost like '%$key%');";
		$result = $conn -> query($sql);

        //output result
		print "<h1>Events</h1>\n";
		print "<div class=\"table-responsive mt-3\">\n";
		print "<table class=\"table table-striped\">\n";
            print "<thead>\n";
				//get field names
				print "<tr>\n";
					while ($field = $result -> fetch_field())
					{
  						print "<th>" . strtoupper($field->name) . "</th>\n";
					} // end while
      			print "</tr>\n";
    		print "</thead>\n";
    		print "<tbody>\n";
                //get row data as an associative array
                while ($row = $result -> fetch_assoc()){
                    //look at each field
                    $event_name= $row["event_name"];
                    $date = $row["event_date"];
                    $cost = $row["event_cost"];
      			    print "<tr>\n";
                    //output
                    if($event_name)
                        print "<td class=\"align-middle\">$event_name</td>\n";
                    else
                        print "<td class=\"align-middle\">&nbsp;</td>\n";

                    if($date)
                        print "<td class=\"align-middle\">$date</td>\n";
                    else
                        print "<td class=\"align-middle\">&nbsp;</td>\n";

                    if($cost)
                        print "<td class=\"align-middle\">$cost</td>\n";
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