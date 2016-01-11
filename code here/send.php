<!--
/**
 * prank-mailer - PHP fake email sender.
 * PHP Version 5
 * @package prank-mailer
 * @author Ishan Jain
 **/
-->
<html>
<head>
	<title>Send Process</title>
</head>
<body>
<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.indigo-pink.min.css">
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<?php
$headers = 'MIME-Version: 1.0'."\r\n";
$headers .='Content-type: text/plain; charset=UTF-8'."\r\n";

$headers .="From: ".$_POST['sender']."\r\n";
$reciever .="To: ".$_POST['reciever']."\r\n";

$headers .= 'Subject: '. $_POST['subject']."\r\n";

//$headers .="Reply-to: ".$_POST['sender']."\r\n";
//$headers .="Return-Path: ".$_POST['sender']."\r\n";

//$headers .= "Message-ID: <notif-".time().">"."\r\n";

if(mail($_POST['reciever'],$_POST['subject'],$_POST['message'],$headers))
	echo "Mail Sent Successfully!";
else
	echo "Send Failed!";
?>

<div>
	</br>
	</br>
	<a href="#">Send Another Mail</a>
	</br>
	</br>
</div>

<footer class="mdl-mini-footer">
    <div class="mdl-mini-footer--middle-section">
  	<p align="center">This tool is for education purposes only.</br>The creator will not be responsible for any wrong done through this.</br>Your ip address is: <?php echo $_SERVER['REMOTE_ADDR'] ?></p>
	</div>
	<div class="mdl-mini-footer--bottom-section">
	<div class="mdl-logo">Title</div>
    <ul class="mdl-mini-footer--link-list">
      <li><a href="#">Help</a></li>
      <li><a href="#">Privacy & Terms</a></li>
    </ul>
  </div>
</footer>

</body>
</html>