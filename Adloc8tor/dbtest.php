<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
///////////////DATABASE CONNECTION AND RETRIEVAL//////////////////////////
//Variables
$server = "localhost";
$username = "mihost_buco";
$serverpassword = "84216123";
$dbname = "mihost_buco_promo";
//Create connection
$conn = mysql_connect('localhost', 'mihost_buco', '84216123');
$db_selected = mysql_select_db('mihost_buco_promo', $conn);

//SQL Q 1
$sql1 = "SELECT CODE FROM vouchers WHERE NAME IS NULL LIMIT 1";
//get unique code
$uniquecode = mysql_query( $sql1, $conn );
//result

//SQL Q 2
$sql2 = "UPDATE vouchers set NAME=" . $message[1] . ",CELLNUM=" . $message[3] . ", EMAIL=" . $message[5] . ",DATETIME=" . date('Y-m-d H:i:s') . " WHERE CODE =" . $uniquecode;
//update that row
$debugdbconn = mysql_query( $sql2, $conn );
//close database
mysql_close($conn);
////////////////////DATABASE END//////////////////////////////////////////
echo $conn;

echo "<br />";

echo $uniquecode . " " . $debugdbconn;
?>