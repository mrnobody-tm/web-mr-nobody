<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql213.epizy.com');
define('DB_USERNAME', 'epiz_28246091');
define('DB_PASSWORD', '56apIXhIazvm');
define('DB_NAME', 'epiz_28246091_db');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
echo"OK";
?>