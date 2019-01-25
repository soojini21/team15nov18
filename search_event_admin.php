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
    <title>Staff Search</title>
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
        $key1 = '';
        if(isset($_GET['key1'])) {
            $key1 = $conn -> real_escape_string($_GET['key1']);
        }

		//create and execute a query
		$sql = "SELECT * FROM staff";
        //note: SQL is case-insensitive by default
        $sql = $sql . " WHERE (Fname like '%$key1%') or (Lname like '%$key1%') or (Email like '%$key1%');";
		$result = $conn -> query($sql);

        //output result
		print "<h1>Admin list:</h1>\n";
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
                    $id = $row["staff_id"];
                    $fname= $row["Fname"];
                    $lname = $row["Lname"];
                    $email = $row["Email"];
					$event_name = $row["event_name"];
      			    print "<tr>\n";
                    //output
                    if($id)
                        print "<td class=\"align-middle\">$id</td>\n";
                    else
                        print "<td class=\"align-middle\">&nbsp;</td>\n";;

                    if($fname)
                        print "<td class=\"align-middle\">$fname</td>\n";
                    else
                        print "<td class=\"align-middle\">&nbsp;</td>\n";
                    if($lname)
                        print "<td class=\"align-middle\">$lname</td>\n";
                    else
                        print "<td class=\"align-middle\">&nbsp;</td>\n";
                    if($email)
                        print "<td class=\"align-middle\">$email</td>\n";
                    else
                        print "<td class=\"align-middle\">&nbsp;</td>\n";
					if($event_name)
                        print "<td class=\"align-middle\">$event_name</td>\n";
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