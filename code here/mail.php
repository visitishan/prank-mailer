<!DOCTYPE html>
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
	<title>Prank Mailer</title>
	<style>
	section {position: relative; text-align: center;}
	</style>
</head>
<body>

	<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.indigo-pink.min.css">
	<script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		
	<header class="mdl-layout__header mdl-layout__header--scroll">
	<h1 align="center">Prank Mailer</h1>
	</header>
	
	<section>
	<main class="mdl-layout__content">
    <div class="page-content">

		<form action="send.php" method="post">
		<table align="center">
			<tr>
			</tr>
			<tr>
				<th>Sender's Name</th>
				<td>
				<div class="mdl-textfield mdl-js-textfield textfield-demo">
				<input class="mdl-textfield__input" type="text" name="name">
				<label class="mdl-textfield__label" for="name">Enter name here...</label>
				</div>
				</td>
			</tr>
			<tr>
				<th>Sender's email:</th>
				<td>
				<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="email" name="sender" >
				<label class="mdl-textfield__label" for="sender">From</label>
				</td>
			</tr>
			<tr>
				<th>Reciever's email: </th>
				<td>
				<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="email" name="reciever">
				<label class="mdl-textfield__label" for="reciever">To</label>
				</td>
			</tr>
			<tr>
				<th>Subject: </th>
				<td>
				<div class="mdl-textfield mdl-js-textfield">
				<input class="mdl-textfield__input" type="text" name="subject">
				<label class="mdl-textfield__label" for="subject">subject</label>
				</td>
			</tr>
			<tr>
				<th>Message: </th>
				<td>
				<div class="mdl-textfield mdl-js-textfield">
				<textarea class="mdl-textfield__input" name="message" rows="7" cols="50"></textarea>
				<label class="mdl-textfield__label" for="message">Type your message here...</label>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
					<!-- Colored FAB button -->
				<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored" type="submit" name="submit">
  				<i class="material-icons">send</i>

				</button>
				</td>
				
			</tr>
		</table>
	</form>
	</div>
	</main>
	</section>
	

<footer class="mdl-mega-footer">
	<p align="center">This tool is for education purposes only.</br>The creator will not be responsible for any wrong done through this.</br>Your ip address is: <?php echo $_SERVER['REMOTE_ADDR'] ?></p>
	<span class="mdl-mega-footer--bottom-section">
    	<span class="mdl-logo">Fake Mailer</span>
    		<ul class="mdl-mega-footer--link-list">
      			<li><a href="http://ishanja.in">About Developer</a></li>
      			<li><a href="http://ishanja.in">More Tools</a></li>
    		</ul>
 	</span>
</footer>
</body>
</html>