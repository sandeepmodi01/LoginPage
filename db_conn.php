<?php
    $sname="localhost";
	$username="root";
	$password="";
	$db_name="test_db";
	
	$conn= mysqli_connect($sname,$username,$password,$db_name);
	if(!$conn)
        echo "Connection Failed";
		//die("Sorry we failed to connect".mysql_connect_error());
?>