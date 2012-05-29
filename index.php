<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

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
          <a class="brand" href="#">Spouty</a>
          <div class="nav-collapse">
            <ul class="nav pull-left">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
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

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Welcome to Spouty's site!</h1>
        <p>Spouty is the official IRC bot of Spout. He can be found on irc://irc.esper.net!</p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>Help</h2>
           <p>Want to lean how to use Spouty? The Help page is a great place to start. There you can learn useful commands, how to use factoids, and more!</p>
          <p><a class="btn" href="#">Learn More &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Commands</h2>
           <p>Here you can find all of Spouty's commands! Commands allows Spouty to interact with users and perform useful functions</p>
          <p><a class="btn" href="#">Learn More &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
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
