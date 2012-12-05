<?php
$data = $_POST['data'];
$source = $_POST['source'];
$jsonformatted = '[{"code" : "'.$data.'"}]';

if($data) {
	$fh = fopen('encoded.js', 'w') or die ("cant open file");
	fwrite($fh, $jsonformatted);
	fclose($fh);
	
	$fh = fopen('source.js', 'w') or die ("cant open file");
	fwrite($fh, $source);
	fclose($fh);
}
?>
