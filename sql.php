<?php
	$host = "localhost";
	$username = "dkulikowski";
	$password = "dupadupa";
	$dbname = "dkulikowski_szkola";
	
	$mariadb = new mysqli($host, $username, $password, $dbname);
	
	if($mariadb->connect_error)
	{
		die("connection failed");
		
	}
	else
	{
		die("connection succes");
		
	}
	

	$sql = "INSERT INTO votes (user_id, vote) VALUES (70, 'Adam')";

	if($mariadb->query($sql)===FALSE)
	{
	echo "Error: ".$mariadb->error;
	}
	else
	{
	echo "inserting succeed";
	}



	$mariadb->close();
?>
