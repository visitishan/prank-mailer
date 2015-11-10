<!DOCTYPE html>
<html>
<head>
	<title>Send Process</title>
</head>
<body>

<?php
$headers = 'MIME-Version: 1.0'."\r\n";
$headers .='Content-type: text/plain; charset=UTF-8'."\r\n";

$headers .='From: ' .$_POST['sender'] ."\r\n";
$headers .= 'Subject: '. $_POST['subject']."\r\n";
$headers .= "Message-ID: <notif-".time()."\r\n";
$headers .= "X-Mailer: Ishan's Mailer, PHP v".phpversion()."\r\n";

if(mail($_POST['reciever'],$_POST['subject'],$_POST['message'],$headers))
	echo "Mail Sent Successfully!";
else
	echo "Send Failed!";
?>

<div>
	</br>
	</br>
	<a href="http://....../mail.html">Send Another Mail</a>
</div>

</body>
</html>