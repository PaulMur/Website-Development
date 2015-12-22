#!/usr/local/bin/php
<?php
//Set the maximum memory for the application
ini_set('memory_limit', '2048M');
//open the email
$fh = fopen("php://stdin", "r");
$email_msg = '';
//read the whole email including email headers
while (!feof($fh)) {
	$email_msg .= fread($fh, 1024);
}
//close email read
fclose($fh);
//delete all in string before "USERNAME"
$new_str = substr($email_msg, ($pos = strpos($email_msg, "Username")) !== false ? $pos + 1 : 0);
//clear out string
$email_msg = '';
//trim the string
$trimmed = trim($new_str, " ");
//split into array at these points
$message = preg_split('@:|</?br/>|=|\n|</?br/>@',$trimmed);
//Variable export 
var_export($message);
///////////////DATABASE CONNECTION AND RETRIEVAL//////////////////////////
//Variables
$server = "localhost";
$username = "mihost_buco";
$serverpassword = "84216123";
//Create connection
$conn = mysqli_connect("localhost","mihost_buco","84216123","mihost_buco_promo");
//get unique code
$query1 = mysqli_query($conn, "SELECT CODE FROM vouchers WHERE NAME IS NULL LIMIT 1");
$row = mysqli_fetch_array($query1,MYSQLI_ASSOC);
$uniquecode = $row["CODE"];
//update that row
$sql_update = 'UPDATE vouchers SET NAME="' . $message[1] . '",CELNUM ="' . $message[3] . '",EMAIL="' . $message[6] . '",DATETIME="' . date('Y-m-d H:i:s') . '",GENDER="' . $message[8] . 
'" WHERE CODE ="' . $uniquecode . '"';
if (mysqli_query($conn, $sql_update) === TRUE) {
	echo "Record updated";
} else {
	echo "ERROR UPDATING" . mysqli_error($conn);
}
//close database
mysqli_close($conn);
////////////////////DATABASE END//////////////////////////////////////////
//message that is going to be sent
$item = "Thank you" . $message[1] . " your unique special code is " . $uniquecode;
//Clickatel section
$user = "mihost";
$password = "2ibo%4iHe!ri~";
$api_id = "3470954";
$baseurl ="http://api.clickatell.com";
$linkpdf = $item;
$text = urlencode($linkpdf);
	
$trimphone = trim($message[3], " ");

$to = $trimphone;

$debug = $message[1] . " " . $message[3] . "databse debug: " . $uniquecode . " " . $debugdbconn . "DATE TIME: " . date('Y-m-d H:i:s');

$subject = "Piped email debug output";
$mailto = "paul@adloc8tor.com";

mail($mailto, $subject, "Piped Debug: ".$debug);


 
// auth call
$url = "$baseurl/http/auth?user=$user&password=$password&api_id=$api_id";
 
// do auth call
$ret = file($url);
 
// explode our response. return string is on first line of the data returned
$sess = explode(":",$ret[0]);
if ($sess[0] == "OK") {
 
    $sess_id = trim($sess[1]); // remove any whitespace
    $url = "$baseurl/http/sendmsg?session_id=$sess_id&to=$to&text=$text";
 
    // do sendmsg call
    $ret = file($url);
    $send = explode(":",$ret[0]);

    if ($send[0] == "ID") {
        echo "successnmessage ID: ". $send[1];
    } else {
        echo "send message failed";
    }
} else {
    echo "Authentication failure: ". $ret[0];
}
?>