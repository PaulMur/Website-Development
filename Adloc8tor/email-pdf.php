<?php

    $product = $_GET['product'];

    if($product == "SPC831DN") {
        $link = "http://uploads.cdn.reveldigital.com/224547!SPC831DN%20-%20Colour%20prinrter.pdf";
    } else if($product == "MP3054SP") {
        $link = "http://uploads.cdn.reveldigital.com/224548!MP3054SP%20-%20B&W%20printer%20-%20Colour%20Scanner.pdf";
    } else if($product == "MP3554SP") {
        $link = "http://uploads.cdn.reveldigital.com/224549!MP3554SP%20-%20B&W%20printer%20-%20Colour%20Scanner.pdf";
    } else if($product == "PROC901") {
        $link = "https://as1.reveldigital.com/Uploads/224542!PROC901+%20-%20Colour%20printer%20-%20Colour%20scanner.pdf";
    } else if($product == "SPC830DN") {
        $link = "http://uploads.cdn.reveldigital.com/224546!SPC830DN%20-%20Colour%20printer.pdf";
    } else if($product == "SPC430DN") {
        $link = "http://uploads.cdn.reveldigital.com/224545!SPC430DN%20-%20Colour%20printer.pdf";
    } else if($product == "SP6330NCHN") {
        $link = "http://uploads.cdn.reveldigital.com/224544!SP6330NCHN%20-%20B&W%20printer.pdf";
    } else if($product == "SP6330N") {
        $link = "http://uploads.cdn.reveldigital.com/224543!SP6330N%20-%20B&W%20printer.pdf";
    }
    
if(isset($_POST['submit'])){
    //set email address
    $to = $_POST['email'];
    $from = "info@adloc8tor.com";
    $name = $_POST['name'];
    $subject = "Your Product PDF";
    $message = "Hi," . $name . " <br />Here is your requested PDF" . $link;

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "<center>Mail Sent. Thank you " . $name . ", You will receive your PDF shortly.</center>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<head>
    <title>PDF Form </title>
</head>
<body>
    <center>
        <br />
        <h3>Get details on <?php echo $product; ?></h3>
        <form action="" method="post" style="width: 500px; font-size: 16px;">
            Name: <input type="text" name="name"><br />
            Email: <input type="text" name="email"><br />
            <input type="submit" name="submit" value="Submit">
        </form>
    </center>
</body>