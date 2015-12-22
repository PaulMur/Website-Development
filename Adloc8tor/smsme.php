<?php

$email_msg = '';
$fh = fopen("php://stdin", "r");

while (!feof($fh)) {
	$email_msg .= fread($fh, 1024);
}

print_r (explode(":",$message));
$item = "Thank you " . $message[1] . " your unique special code is 01369985S9E5G";

$user = "mihost";
$password = "2ibo%4iHe!ri~";
$api_id = "3470954";
$baseurl ="http://api.clickatell.com";
$linkpdf = $item;
$text = urlencode($linkpdf);
	
$to = $message[3];

for($x = 0; $x=9; $x++) {
	$debug .= $message[$x] . \n;
}

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