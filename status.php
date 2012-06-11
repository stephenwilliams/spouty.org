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
.ident {
	text-indent:20px;
}
</style>
<link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
<link href="assets/css/docs.css" rel="stylesheet">
<?php 
		foreach (glob("assets/scripts/*.php") as $filename) {
		    include_once $filename;
		}
		$online = isSpoutyOnline();
		if ($online) {
			$cyborg = getCyborg();
		}
?>
</head>

<body>
<?php include_once "navbar.php"; ?>
<div class="container">
	<header class="jumbotron subhead" id="overview">
		<h1>Status</h1>
		<p class="lead">Read some information on Spouty's current status!</p>
	</header>
	<?php 
		if (!$online) {
			print '
			<div class="alert alert-error">
				 <a class="close" data-dismiss="alert" href="#">×</a>
				 <h4 class="alert-heading">Error!</h4>
 				 Spouty is currently offline or not responding, no information will load.
			</div>';
		}
	?>
	<div class="row">
		<div class="span6">
			<h2>Information</h2>
			<br />
			<h3>Bot Info</h3>
			<p class="ident"><strong>Nick:</strong> <?php if (isset($cyborg)) print $cyborg['nick'];?>
			<br />
			<p class="ident"><strong>Ident:</strong>: <?php if (isset($cyborg)) print $cyborg['ident'];?>
			<br />
			<p class="ident"><strong>Hostmask:</strong> <?php if (isset($cyborg)) print $cyborg['hostmask'];?>
			<br />
			<p class="ident"><strong>Running Time:</strong> <?php if (isset($cyborg)) print $cyborg['runningTimeFormatted'];?>
			</p>
			<br />
			<h3>Site Info</h3>
			<p class="ident"><strong>Last Commit:</strong> 
			<?php 
				$commit = readFileContents("local/latest-commit-id.txt"); 
				print '<a href="https://github.com/alta189/spouty.org/commit/' . $commit . '" />' . $commit . '</a>';
			?>
			<p class="ident"><strong>Last Updated:</strong> <?php print gmdate(getDefaultDateFormat(), readFileContents("local/latest-commit-timestamp.txt")); ?>
			</p>
		</div>
		<div class="span6">
			<h2>Channels</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th width="50%">Channel</th>
						<th width="25%">Modes</th>
						<th width="25%">Users</th>
					</tr>
				</thead>
				<tbody>
				
				<?php
					if (isset($cyborg)) {
						foreach($cyborg['channels'] as $channel) {
							$name = $channel['name'];
							if (isset($channel['topic'])) {
								print '<tr> <td> <a id="topic' . str_replace("#", "", $name) . '" href= "#" rel="popover" title="Topic" data-content=" ' . $channel['topic'] . '"' . $channel['topic'] . '>' . $name . '</a></td> <td>';
							} else {
								print '<tr> <td>' . $name . '</td> <td>';
							}
							
							//rel="popover" title="A Title" data-content="And here's some amazing content. It's very engaging. right?"
							
							if (isset($channel['modes'])) {
								print $channel['modes'] ;
							}
							print '</td> <td>';
							if (isset($channel['users'])) {
								print $channel['users'] ;
							}
							print '</td> </tr>';
						}
					}
				?>
				
				</tbody>
			</table>
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
<script>  
$(function ()  
{ <?php 
	if (isset($cyborg)) {
		foreach($cyborg['channels'] as $channel) {
			if (isset($channel['topic']) && !empty($channel['topic'])) {
				$name = $channel['name'];
				print '$("#topic' . str_replace("#", "", $name) . '").popover();';
			}
		}
	}
?> 
});  
</script>  
</body>
</html>
