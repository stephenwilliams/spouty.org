<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Spouty</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Spouty's web panel">
<meta name="author" content="SpoutDev">

<!-- The styles -->
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
	<div class="hero-unit">
		<h1>Welcome to Spouty's site!</h1>
		<br />
		<p>Spouty is the official IRC bot of Spout. She can be found on irc://irc.esper.net!</p>
	</div>
	<div class="row">
		<div class="span4">
			<h2>Help</h2>
			<p>Want to lean how to use Spouty? The Help page is a great place to start. There you can learn useful commands, how to use factoids, and more!</p>
			<p><a class="btn" href="help">Learn More &raquo;</a></p>
		</div>
		<div class="span4">
			<h2>Commands</h2>
			<p>Here you can find all of Spouty's commands! Commands allows Spouty to interact with users and perform useful functions!</p>
			<p><a class="btn" href="commands">Learn More &raquo;</a></p>
		</div>
		<div class="span4">
			<h2>Factoids</h2>
			<p>What are factoids? How could you use them? Where is a list of existing ones?</p>
			<p><a class="btn" href="factoids">Find Out! &raquo;</a></p>
		</div>
	</div>
	<hr>
	<?php include_once "footer.php"?>
</div>
<!-- /container --> 

<!-- The javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="assets/js/jquery.js"></script> 
<script src="assets/js/bootstrap.js"></script>
</body>
</html>
