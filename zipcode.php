<!DOCTYPE html>
<html>
<head>
    <title>Zip Code Look-Up</title>
    <meta charset="utf-8" />
    <script src="jquery-2.0.3.min.js"></script>
</head>
<body id="zip">
    <div id="defaultHeader">
        <a href="index.html"><img src="coolsquarepics/TaraDSheetsLogo.png" alt="Tara Dionne Sheets" height="55" /></a>
    </div>
<h1>Zip Code Look-up</h1>
<?php

//connect to database
$connect = mysqli_connect("mysql", "Tara", "MyLittleMermaid", "zip_code_database");

//check the connection
if (mysqli_connect_errno())
{
   echo 'Failed to connect to MySQL ' . mysqli_connect_error();
}
//include 'database_connect.php';

//header('Content-Type: application/json');

//dbconnect();*/

//check the connection
/*if (mysql_connect_errno())
{
   echo 'Failed to connect to MySQL ' . mysql_connect_error();
}*/

//get the zip code entered from the HTML form
$zipcode = $_GET['zipcode'];

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

mysql_close($connect);
?>

<form action="zipcode.php" method="get">
   <table>
      <tr>
         <td><label>Enter the zip code you want to look up:</label></td>
         <td><input type="text" id="zip" name="zipcode" size="30" tabindex="1" /></td>
      </tr>
      <tr>
         <td colspan="2"><input type="submit" value="Submit" tabindex="2" /></td>
      </tr>
      <tr>
         <td><label>City:</label></td>
         <td><input type="text" name="cityResult" id="result" size="30" tabindex="-1" disabled="disabled" value="
             <?php 
                  if ($city AND $state)
                  {
                     echo $city . ', ' . $state;
                  } ?>" /></td>
      </tr>
   </table>
</form>
<nav id="footer">
        <p>
            <a href="index.html">Tara D. Sheets</a>
        </p>
        <a href="about.html">About Me |&nbsp;</a>
        <a href="experience.html">Experience |&nbsp;</a>
        <a href="gallery1.html">Graphics & Apps |&nbsp;</a>
        <a href="contact.html">Contact</a>
    </nav>
</body>
</html>