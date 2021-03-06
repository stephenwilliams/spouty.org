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

<body data-spy="scroll" data-target=".subnav" data-offset="50">
<?php include_once "navbar.php"?>
<div class="container">
	<header class="jumbotron subhead" id="overview">
		<h1>Help</h1>
		<p class="lead">This page will teach you everything that you need to know about how to use Spouty!</p>
		<div class="subnav">
			<ul class="nav nav-pills">
				<li><a href="#general">General</a></li>
				<li><a href="#accounts">Accounts</a></li>
				<li><a href="#accounts">Factoids</a></li>
			</ul>
		</div>
	</header>
	<section id="general">
		<div class="page-header">
				<h1>General Help <small>Spouty's channel, the Bot Admins, etc</small></h1>
			</div>
			<div class="row">
		<div class="span12">
        	<p>If you haven't figured out what Spouty is already, Spouty is an IRC bot. He is currently on his 4th version. Versions 1 &amp; 2 were both simple implementations of <a href="http://www.jibble.org/pircbot.php">PircBot</a> that had a few simple commands and reported commits to #spoutdev. The 3rd version is much more like the current version. Spouty v3 ran on a plugin-based IRC API built over <a href="http://code.google.com/p/pircbotx/">PircBotX 1.6</a> called <a href="https://github.com/ChavaBot">ChavaBot</a>. ChavaBot was developed mainly by alta189. However, ChavaBot had many design flaws that made it a mess, so <a href="https://github.com/CyborgDev">Cyborg</a> was started as a complete rewrite of ChavaBot. Spouty v4 currently runs Cyborg, all the availible Cyborg plugins, and 1 custom Cyborg plugin aptly called 'Spouty' that contains Spouty specific functions. </p><p style="text-indent:25px;">
            You can visit ##Spouty on irc.esper.net to play with Spouty or to get help from one of the <a href="about">Bot Admins</a>.</p>
        </div>
    </div>
</section>

<section id="accounts">
	<div class="page-header">
    	<h1>Accounts <small>Letting Spouty know who you are</small></h1>
	</div>
	<div class="row">
		<div class="span12">
        	<p>Spouty uses a account system to manage what commands and features users have access to. The account system is very dynamic. It uses your username (Example: nick!ident@hostmask) to identify you with Spouty. Your account stores a secure password, your permissions, your groups, and your associated hostnames. You can temporarily or permanently add hostnames to your account. </p>
            <p>First you need to register with Spouty. It is suggested that your account name be your primary nick.
            <span class="label label-important">WARNING</span> You must private message the following command.<br /> 
            <code>.register Account_Name password</code>
            </p> <p>If you want to add another hostmask to your account execute the following command.
            <span class="label label-important">WARNING</span> You must private message the following command.<br /> 
            <code>.addhostname Account_Name password</code>
            </p> <p>
            If you want to temporarily authenticate, you need to use the authenticate command.
            <span class="label label-important">WARNING</span> You must private message the following command.<br /> 
            <code>.authenticate Account_Name password</code>
            </p> <p>Any questions concerning Spouty's account system can be answered by the Bot Admins in ##Spouty. <br />
            <span class="label label-info">Remember!</span>&nbsp;&nbsp;Passwords are hashed with SHA-1 and not logged in Spouty's IRC logs!
            </p>
        </div>
    </div>
</section>

<section id="factoids">
	<div class="page-header">
    	<h1>Factoids <small>The dynamic factoid system that </small></h1>
			</div>

		<div class="row">
			<div class="span12">
				<p>What are factoids? Simply put, factoids are dynamic commands that anyone can create or modify. The factoid system can be used in many ways. For example, it could be used for a simple fun command or be used for a FAQ. Factoids are probably the single most important feature of Spouty. They make her useful to the community and the Spout team. The factoid system is completely open for anyone to create, modify, and use <strong>unless</strong> you don't follow these simple rules</p>
				<ol>
					<li>Any user that creates a factoid that violates the Spout IRC rules will have their factoid permissions removed</li>
					<li>Any user that creates a factoid that a Bot Admin decides is inappropriate may lose their factoid permissions</li>
					<li>Any user that creates factoids with the intent to use them to spam will have their factoid permissions removed</li>
					<li>Any user that abuses the factoid system will have their factoid permissions removed</li>
				</ol><br />
				<p>Triggering factoids is easy. There are two kinds of factoids, global and local. A global factoid can be used in any channel and is the default when creating or modifying a factoid. A local factoid can only be used in the channel that it was created in. Likewise, there are two factoid prefixes, <code>!</code> and <code>?</code>. <code>!</code> will look for global factoids first and if it cannot find one, it will search for a local factoid. <code>?</code> will look for a local factoid first and if it cannot find one, it will search for a global factoid.
				</p>
			</div>
		</div><br />
		<div class="row">
			<div class="span6">
				<h4>Handlers - What do they do? What ones are available?
				</h4> <p>
				Handlers are what Spouty used to decide how a factoid is handled. They can range simple to more complex. The default factoid is <code>reply</code>. The <code>reply</code>, <code>action</code>, and <code>notice</code> handlers have the following variables: <br />
				<table class="table table-striped table-bordered table-condensed" width="100%">
					<thead>
						<tr>
							<th>Variable</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>%0%</td>
							<td>Will print the first argument provided to the factoid</td>
						</tr>
						<tr>
							<td>%0-%</td>
							<td>Will print all the arguments from the first and onwards</td>
						</tr>
						<tr>
							<td>%0-2%</td>
							<td>Will print the arguments from the first to the third</td>
						</tr>
						<tr>
							<td>%0-2%</td>
							<td>Will print the arguments from the first to the third</td>
						</tr>
						<tr>
							<td>%nick%</td>
							<td>Will print the nick of the user that triggered the factoid</td>
						</tr>
						<tr>
							<td>%channel%</td>
							<td>Will print the channel that the factoid was triggered in</td>
						</tr>
						<tr>
							<td>%channel%</td>
							<td>Will print the channel that the factoid was triggered in</td>
						</tr>
						<tr>
							<td>%readUrl("http://some.url/")%</td>
							<td>Will print the first line of the url.</td>
						</tr>
						<tr>
							<td>%readRandLine("http://some.url/")%</td>
							<td>Will print a random line of the url.</td>
						</tr>
						<tr>
							<td>%rn%</td>
							<td>Allows for multilined factoids. <span class="label label-important">WARNING</span> Requires permissions!</td>
						</tr>
					</tbody>
				</table>	
				</p>
			</div>
			<div class="span6">
				<table class="table table-striped table-bordered table-condensed" width="100%">
					<thead>
						<tr>
							<th>Handler</th>
							<th>Aliases</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>reply</td>
							<td>say</td>
							<td>Replies to a factoid with a message. Either to a channel or private message depending on where the factoid was triggered.</td>
						</tr>
						<tr>
							<td>action</td>
							<td>act</td>
							<td>Performs and action to either a channel or private message.</td>
						</tr>
						<tr>
							<td>notice</td>
							<td></td>
							<td>Sends a notice to the user who triggered the factoid.</td>
						</tr>
						<tr>
							<td>alias</td>
							<td></td>
							<td>Forwards the trigger event to another factoid.</td>
						</tr>
						<tr>
							<td>command</td>
							<td>cmd</td>
							<td>Forwards the trigger event to one of Spouty's commands.</td>
						</tr>
						<tr>
							<td>python</td>
							<td>py</td>
							<td>Runs the factoid's contents through a python interpreter.</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section>
	<hr>
		<?php include_once "footer.php"?>
</div>
<!-- /container --> 

<!-- The javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="assets/js/jquery.js"></script> 
<script src="assets/js/google-code-prettify/prettify.js"></script> 
<script src="assets/js/bootstrap.js"></script> 
<script src="assets/js/application.js"></script>
</body>
</html>
