<html>
<head>
<title>Sending mail using php</title>
</head>
<body>
<!-- Before going to check this file, 
    you have to perform some basic tasks 
    which you would read out from the associated file
     named - config files 
    -->
<?php
$receiver = "receiver address";
$subject = "Email Test via PHP using Localhost";
$body = "Hi, there...This is a test email send from Localhost. This is a mail test using php.";
$sender = "From: sender address";

if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}
?>
</body>
</html>