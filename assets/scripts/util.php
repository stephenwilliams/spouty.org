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
	
	function getCurrentFile() {
		return $_SERVER['SCRIPT_FILENAME'];
	}
	
	function getFileModifiedDate($file, $format = 'd/m/Y G:i:s T') {
		return gmdate($format, filemtime($file));
	}
	
	function getDefaultDateFormat() {
		return "d/m/Y G:i:s T";
	}
	
	function str_lreplace($search, $replace, $subject) {
		$pos = strrpos($subject, $search);

		if($pos !== false) {
			$subject = substr_replace($subject, $replace, $pos, strlen($search));
		}

		return $subject;
	}
?>