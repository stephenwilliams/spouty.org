<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Spouty</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Spouty's web panel">
    <meta name="author" content="SpoutDev">

</style>
    <?php 
		foreach (glob("assets/scripts/*.php") as $filename) {
		    include_once $filename;
		}
		$online = isSpoutyOnline();
	?>
    </head>

    <body>
<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
		<div class="container"> <a class="brand" href="/">Spouty</a>
				<div class="nav-collapse">
				<ul class="nav pull-left">
						<li class="active"><a href="/">Home</a></li>
						<li><a href="about">About</a></li>
						<li><a href="help">Help</a></li>
						<li><a href="commands">Commands</a></li>
						<li><a href="factoids">Factoids</a></li>
					</ul>
				<ul class="nav pull-right">
						<li><a href="status">Status:</a></li>
						<li class="divider-vertical"></li>
						<?php 
			  	if ($online) {
					print '<li class="status"><span class="label label-success">Online</span></li>';
				} else {
					print '<li class="status"><span class="label label-important">Offline</span></li>';
				}
			  ?>
					</ul>
			</div>
				<!--/.nav-collapse --> 
			</div>
	</div>
	</div>
<div class="container">
	<div class="hero-unit">
		<h1>WTF have you done?!</h1>
		<br />
		<p>You broke our site! Even the formatting's gone! :( So mean!</p>
		<p>Do I really have to get Spouty to watch you like a little child?</p>
		<p>Shame on you!</p>
	</div>
		<hr>
	<footer>
		<p>&copy; SpoutDev WHATEVER YEAR IT IS, BUT I CAN'T TELL BECAUSE YOU BROKEZ THE INTERWEBS</p>
	</footer>
</div>
<!-- /container --> 

</body>
</html>