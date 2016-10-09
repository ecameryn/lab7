<!DOCTYPE html>
<?php
    $dsn = 'mysql:host=localhost;dbname=Wishlist_DB';
    $username = 'phpuser';
    $password = 'pa55word';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
		echo 'Database error!';
        exit();
    }
	
function get_user($user)
{
	global $db;
	$query = "SELECT * FROM wishers
			 WHERE wishers.name = '$user'";	 
	$result = $db->query($query);
	return $result;
}
	$user = get_user($_GET['user']);
?>

<html>
	<head>
		<title></title>
	</head>
	
	
	<body>Wish List of <?php echo $_GET['user'] ; ?>
		<?php 
		
		?>
	</body>
</html>