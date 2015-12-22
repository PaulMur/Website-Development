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
$conn = mysqli_connect($server, $username, $serverpassword);
//Check connection
if ($conn->connect_error) {
	die("Connection failed to database: " . $conn->connect_error);
}
echo "Databse connected to successfully!!";
//get unique code
$uniquecode = mysqli_query($conn, "SELECT CODE FROM vouchers WHERE NAME IS NULL LIMIT 1");
//update that row
$debugdbconn = mysqli_query($conn, "UPDATE vouchers set NAME=" . $message[1] . ",CELLNUM=" . $message[3] . ", EMAIL=" . $message[5] . ",DATETIME=" . date('Y-m-d H:i:s') . " WHERE CODE =" . $uniquecode);
//close database
$conn->close();
//show code
echo $uniquecode . $debugdbconn;
////////////////////DATABASE END//////////////////////////////////////////
//message that is going to be sent
$item = "Thank you " . $message[1] . " your unique special code is " . $uniquecode;
//Clickatel section
$user = "mihost";
$password = "2ibo%4iHe!ri~";
$api_id = "3470954";
$baseurl ="http://api.clickatell.com";
$linkpdf = $item;
$text = urlencode($linkpdf);
	
$trimphone = trim($message[3], " ");

$to = $trimphone;

$debug = $message[1] . " " . $message[3] . "databse debug: " . $uniquecode . " " . $debugdbconn;

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