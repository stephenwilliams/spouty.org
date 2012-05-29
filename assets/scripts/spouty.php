<?php 
function isSpoutyOnline() {
		$ch = curl_init();
	curl_setopt ( $ch, CURLOPT_URL, 'http://rest.spouty.org/cyborg' );
	curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
	$f = curl_exec ( $ch );
	$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);
	if ($httpcode == 200) {
		return true;
	}
	return false;
}