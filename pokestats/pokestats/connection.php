<?php
/*define('DB_HOST','shareddb-q.hosting.stackcp.net');
define('DB_USER','pokestats-3131374d59');
define('DB_PASS','op9hi0efzy');
define('DB_NAME','pokestats-3131374d59');

// Establish database connection.
try
{
$con = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}*/


$con = mysqli_connect("shareddb-q.hosting.stackcp.net","pokestats-3131374d59","op9hi0efzy","pokestats-3131374d59");

if(!$con)
{
	echo "Database connection failed...";
}

?>
