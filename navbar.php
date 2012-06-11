<?php
	$script_name = $_SERVER['SCRIPT_NAME'];
	$pageName = substr($script_name, strrpos($script_name, '/') + 1);
	$pageName2 = substr($script_name, strrpos($script_name, '.'));
	$pageName = str_lreplace($pageName2, "", $pageName);
	print 
	'<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
		<div class="container"> <a class="brand" href="/">Spouty</a>
				<div class="nav-collapse">
				<ul class="nav pull-left">
						<li'; if ($pageName == "index") {print ' class="active"';} print '><a href="/">Home</a></li>
						<li'; if ($pageName == "about") {print ' class="active"';} print '><a href="about">About</a></li>
						<li'; if ($pageName == "help") {print ' class="active"';} print '><a href="help">Help</a></li>
						<li'; if ($pageName == "commands") {print ' class="active"';} print '><a href="commands">Commands</a></li>
						<li'; if ($pageName == "factoids") {print ' class="active"';} print '><a href="factoids">Factoids</a></li>
					</ul>
				<ul class="nav pull-right">
						<li'; if ($pageName == "status") {print ' class="active"';} print '><a href="status">Status:</a></li>
						<li class="divider-vertical"></li>
						' ;
			  	if ($online) {
					print '<li class="status"><span class="label label-success">Online</span></li>';
				} else {
					print '<li class="status"><span class="label label-important">Offline</span></li>';
				}
			  
				print '	</ul>
			</div>
				<!--/.nav-collapse --> 
			</div>
	</div>
	</div>';
?>