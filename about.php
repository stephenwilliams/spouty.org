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
		margin:0 auto;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <?php require_once "assets/scripts/spouty.php"; ?>
  </head>

<body>

	  <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="http://spouty.org/">Spouty</a>
          <div class="nav-collapse">
            <ul class="nav pull-left">
              <li><a href="http://spouty.org/">Home</a></li>
              <li class="active"><a href="#">About</a></li>
              <li><a href="#contact">Help</a></li>
              <li><a href="#contact">Commands</a></li>
              <li><a href="#contact">Factoids</a></li>
            </ul>
            <ul class="nav pull-right">
              <li><a>Status:</a></li>
              <li class="divider-vertical"></li>
              <?php 
			  	if (isSpoutyOnline()) {
					print '<li><a><span class="label label-success">Online</span></a></li>';
				} else {
					print '<li><a><span class="label label-important">Offline</span></a></li>';
				}
			  ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    
    <div class="container">
		<div class="page-header">
			<h1>About</h1>
		</div>
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
    	<footer>
        	<p>&copy; SpoutDev 2012</p>
    	</footer>
    </div>

	<!-- The javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
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