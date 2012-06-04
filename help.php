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
		margin:0 auto;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <?php 
		require_once "assets/scripts/spouty.php"; 
		$online = isSpoutyOnline();
	?>
  </head>

  <body data-spy="scroll" data-target=".subnav" data-offset="50">

	 <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="/">Spouty</a>
          <div class="nav-collapse">
            <ul class="nav pull-left">
              <li><a href="/">Home</a></li>
              <li><a href="about">About</a></li>
              <li class="active"><a href="help">Help</a></li>
              <li><a href="commands">Commands</a></li>
              <li><a href="factoids">Factoids</a></li>
            </ul>
            <ul class="nav pull-right">
              <li><a>Status:</a></li>
              <li class="divider-vertical"></li>
              <?php 
			  	if ($online) {
					print '<li class="status"><span class="label label-success">Online</span></li>';
				} else {
					print '<li class="status"><span class="label label-important">Offline</span></li>';
				}
			  ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

     <div class="container">
<header class="jumbotron subhead" id="overview">
 <h1>Help</h1>
  <p class="lead">This page will teach you everything that you need to know about how to use Spouty!</p>
  <div class="subnav">
    <ul class="nav nav-pills">
      <li><a href="#general">General</a></li>
      <li><a href="#accounts">Accounts</a></li>
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
            On irc.esper.net, you can visit the channel, ##Spouty, to play with Spouty or to get help from one of the Bot Admins. As said on the <a href="about">About Page</a>, the Bot Admins are a group of individuals that manage and run Spouty. </p>
        </div>
    </div>
</section>

<section id="accounts">
	<div class="page-header">
    	<h1>Accounts <small>give you more access! Help for registering and managing your account</small></h1>
	</div>
	<div class="row">
		<div class="span12">
        	<p>Spouty uses a account system to manage what commands and features users have access to. The account system is very dynamic. It uses your ident and your hostmask to auto auth you(Example: nick!ident@hostmask). Your account stores a password (hashed with SHA-1), your permissions, your groups, and your associated hostnames. You can add hostnames to your account, or you can temporarily add a hostname to Spouty. </p> <p>
            First you need to register with Spouty. This needs to be done in a private message. It is suggested that your account name be your primary nick.<br /> 
            <code>.register Account_Name password</code>
            </p> <p>If you want to add another hostmask to your account execute the following command. This also has to be done in private message.<br /> 
            <code>.addhostname Account_Name password</code>
            </p> <p>
            If you want to temporarily authenticate, you need to use the authenticate command. This command needs to be used in a private message.<br /> 
            <code>.authenticate Account_Name password</code>
            </p> <p>Any questions concerning Spouty's account system can be answered by the Bot Admins in ##Spouty. <br />
            <span class="label label-info">Remember!</span>&nbsp;&nbsp;Passwords are hashed with SHA-1 and not logged in Spouty's IRC logs!
            </p>
        </div>
    </div>
</section>
      <hr>

      <footer>
        <p>&copy; SpoutDev 2012</p>
      </footer>

    </div> <!-- /container -->

    <!-- The javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
