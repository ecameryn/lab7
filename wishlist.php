<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	
	<body>Wish List of <?php echo $_GET['user'] ; ?>
		<?php 
			$con = mysqli_connect("localhost", "phpuser", "pa55word");
			if (!$con) 
			{
				exit('Connect Error (' . mysqli_connect_errno() . ') '
				   . mysqli_connect_error());
			}
			//set the default client character set 
			mysqli_set_charset($con, 'utf-8');
			
			mysqli_select_db($con, "wishlist");
			$user = mysqli_real_escape_string($con, htmlentities($_GET["user"]));
			$wisher = mysqli_query($con, "SELECT id FROM wishers WHERE name='" . $user . "'");

			if (mysqli_num_rows($wisher) < 1) 
			{
				exit("The person " . htmlentities($_GET["user"]) . " is not found. Please check the spelling and try again");
			}
			$row = mysqli_fetch_row($wisher);
			$wisherID = $row[0];
			mysqli_free_result($wisher);	
		?>
	</body>
</html>