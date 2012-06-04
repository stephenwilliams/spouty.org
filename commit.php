<?php
	require_once "assets/scripts/util.php";
	if (isset($_POST['payload'])) {
		$json = $_POST['payload'];
		$payload = json_decode($json, true);
		
		// Get the branch
		$ref = $payload['ref'];
		$branch = substr($ref, strrpos($ref, '/') + 1);
		print "Branch: " . $branch . "\n";
		if ($branch != "master") {
			exit("Ignoring non-master branch.");
		}
		
		createDir("local"); // Create local directory if it doesn't exist
		
		$commitId = $payload['commits'][0]['id'];
		print "Updating latest commit to: " . $commitId . "\n";
		$sucess = writeToFile("local/latest-commit-id.txt", $commitId);
		if ($sucess) {
			print "Updated sucessfully!\n";
		} else {
			print "Update not sucessful!\n";
		}
		
		$date = $payload['commits'][0]['timestamp'];
		print "\nGetting the latest commit's date and converting it to milliseconds\n";
		$time = strtotime($date);
		print "Got the timestamp: " . $time . "\nUpdating saved timestamp\n";
		$sucess = writeToFile("local/latest-commit-timestamp.txt", $time);
		if ($sucess) {
			print "Updated sucessfully!\n";
		} else {
			print "Update not sucessful!\n";
		}
		
		print "Running 'git pull'\n\n\n";
				
		echo nl2br(shell_exec('git pull 2>&1'));
		
		
	} else {
		print "You sneaky, sneaky person... You aren't an update! Spouty is not happy :(";
	}
	
?>