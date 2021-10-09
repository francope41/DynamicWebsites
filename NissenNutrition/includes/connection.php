<?php

	$dbhost = 'localhost';
	$dbuser = 'nissen_admin';
	$dbpass = '3gl/QRDM55H/-tzh';
	$db = 'nissen_nutrition';
	
	/**********************************************************************
	Host name = (use the server IP address)
	Database name = (cpanelUsername_databaseName)
	Database username = (cpanelUsername_databaseUsername)
	Database password = (the password you entered for that database user)
	TCP or UDP, either is fine.
	***********************************************************************/
	
	
	//create connection
	//mysqli_connect(host,username,password,dbname);
	$conn = new mysqli($dbhost,$dbuser,$dbpass, $db);
	
	//mysqli_connect(host,username,password,dbname);
	//$conn = mysqli_connect($dbhost,$dbuser,$dbpass, $db); //$conn ALSO KNOWN AS $LINK IN MANY EXAMPLES
	//mysql_select_db($db); <-old way
	
	// Check connection
//	if (mysqli_connect_errno()) {
//		echo "Failed to connect to MySQL: " . mysqli_connect_error();
//	}
//	echo 'Connected successfully';
//	mysqli_select_db($db);
//	mysqli_close($conn);  //? requires 2 parameters???? 
?>
