<html>
<head>
<title> MySQL-PHP Connection</title>
</head>
<body bgcolor="" >
<?php

echo "<h1 >  MYSQL-PHP Connection</h1>";
echo "<h3>  HR Database </h3>";
 //  Connection variables:
   $dbhost = 'localhost';
   $username = "root";     // user name of mysql 
   $password = "";         // password
   $dbname = "BloodDonation";    // databse name 
    // create connection
        $con = new mysqli($dbhost, $username, $password, $dbname);
      
	  // check connection
	  if($con->connect_errno > 0 ){
	    die("unable to connect to the database[" . $con->connect_error . "]");
	  }
	       echo "Connected successfully" ;
	?>
	</body>
</html>