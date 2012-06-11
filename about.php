<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Spouty</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Spouty's web panel">
    <meta name="author" content="SpoutDev">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
body {
	padding-top: 60px;
	padding-bottom: 40px;
	margin: 0 auto;
}
.sidebar-nav {
	padding: 9px 0;
}
</style>
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <?php 
		foreach (glob("assets/scripts/*.php") as $filename) {
		    include_once $filename;
		}
		$online = isSpoutyOnline();
	?>
    </head>

    <body>
<?php include_once "navbar.php"; ?>
<div class="container">
		<header class="jumbotron subhead" id="overview">
		<h1>About</h1>
	</header>
		<br />
		<div class="row">
		<div class="span6">
				<h2>Source</h2>
				<p>Spouty is a Cyborg bot. Cyborg is a plugin based IRC bot written in java. You can view the source for Cyborg on <a href="https://github.com/CyborgDev">GitHub</a>. Cyborg's development is currently lead by alta (alta189), one of the Founders of Spout. Code contributions have been made by Spudstabber and Zidane (NinjaZidane). Cyborg could always use help with development so please feel free to submit a pull request on <a href="https://github.com/CyborgDev">GitHub</a>.</p>
			</div>
		<div class="span6">
				<h2>Bot Admins</h2>
				<p>While Spouty is the Spout Team's IRC bot, he is run by a group of Bot Admins. This allows the Spout Team to stay focused on more important tasks. The team is lead by alta. The Bot Admins include alta, brjannc, Xu_R ( Hinorashi, DarkShadowKun, NekoKun), mau5ie (Anonymau5ie, Incognito), and TheNoodle. Bot Admins have full access to Spouty and her commands. If you ever need help or need to report bot abuse, feel free to stop by ##Spouty on irc://irc.esper.net! All Bot Admins would be more than happy to assist you in using Spouty.</p>
			</div>
	</div>
		<?php include_once "footer.php"?>
	</div>

<!-- The javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="assets/js/jquery.js"></script> 
<script src="assets/js/bootstrap.js"></script> 
</body>
</html>