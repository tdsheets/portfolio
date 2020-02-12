<?php

$dbname = "zip_code_database";
//$zipcode = $_GET['zip'];

include 'database_connect.php';

header('Content-Type: application/json');

$connect = dbconnect();

/* check connection */
if (mysql_connect_errno()) {
   echo "Connection failed";
   exit();
}

$stmt = $connect->prepare("SELECT primary_city, state FROM zipcodes WHERE zip = ?");

mysql_select_db($dbname) or die(mysql_error());

$sql = 'SELECT primary_city, state FROM zipcodes WHERE zip= "45044"';

mysql_stmt_exectue($sql) or die(mysql_error());

//mysql_connect($servername, $username, $password) or die(mysql_error());
//mysql_select_db($dbname) or die(mysql_error());

//$sql = 'SELECT primary_city, state FROM zipcodes WHERE zip=' . //mysql_real_escape_string($zipcode);

//mysql_stmt_execute($sql);

//mysql_fetch($sql);

//echo '{ "cityName" : "The zipcode is ' . $zipcode . '" }';

//connect to database
/*$connect = mysql_connect("mysql", "Tara", "MyLittleMermaid");

//check the connection
if (!$connect) {
   die('Could not connect: ' . mysql_error($connect));
//}*/

/*$dbselect = mysql_select_db($connect, "zip_code_database");
if ($dbselect) {
   echo '{ "cityName" : "Connected Successfully" }';
}
else {
   echo '{ "cityName" : "Did not work" }';
/*$sql = "SELECT * FROM zipcodes WHERE zip = '".$."'";
$result = mysql_query($connect, $sql);

while ($row = mysql_fetch_array($result)) {
    echo '{ "cityName" : "'. $row['primary_city']. '" }';
}*/

mysql_close($connect);





//include 'database_connect.php';

//header('Content-Type: application/json');

//dbconnect();

//check the connection
/*if (mysql_connect_errno())
{
   echo 'Failed to connect to MySQL ' . mysql_connect_error();
}*/

//get the zip code entered from the HTML form
/*$zipcode = $_GET['zipcode'];

//SQL query to pull information from the database
if ($zipcode)
{
    
   //SQL code to find the primary city for the zip code listed in the database
   $sql = 'SELECT primary_city, state FROM zipcodes WHERE zip=' . mysql_real_escape_string($connect, $zipcode);

   //prepare the statement
   if ($stmt = mysql_prepare($connect, $sql))
   {
      //execute statement
      mysql_stmt_execute($stmt);

      //bind the variables
      mysql_stmt_bind_result($stmt, $city, $state);

      //fetch values
      mysql_fetch($stmt);

   }
   else
   {
      echo 'Query failed. <br />';
   }
}

mysql_close($connect);*/
?>