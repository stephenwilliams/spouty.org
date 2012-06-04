<?php 
	function writeToFile($file, $contents) {
		$fh = fopen($file, 'w') or die("can't open file");
		$success = fwrite($fh, $contents);
		fclose($fh);
		if ($success == false) {
			return false;
		}
		return true;
	}
	
	function readFileContents($file) {
		$fh = fopen($file, 'r');
		$data = fread($fh, filesize($file));
		fclose($fh);
		return $data;
	}
	
	function createDir($dir) {
		if (!file_exists($dir)) {
			return mkdir($dir, 0777, true);
		}
		return true;
	}
?>