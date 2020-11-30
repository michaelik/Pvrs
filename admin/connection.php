<?php
error_reporting(E_ALL);//report all error.
#constant is a fixed value that can't be modified/manipulated....define() indicate constant.
define('DB_SERVER', 'localhost');# the name of my local server.
define('DB_USERNAME', 'root');#the username of my local server.
define('DB_PASSWORD', '');#non-password is set for my server.
#my server's database.
define('DB_DATABASE', 'allocate');
#the connection is created and store in a variable $con.
$con = @mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die("can't create a connection".mysqli_error());
?>