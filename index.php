<?php
$currentcode = file_get_contents('source.js');
?>
<!doctype html>
<html>
<script data-main="scripts/main.js" src="scripts/require-jquery.js"></script>
<link rel="stylesheet" type="text/css" href="layout.css" />
<link rel="stylesheet" type="text/css" href="codemirror.css" />
<link rel="stylesheet" type="text/css" href="bootstrap.min.css" />
<body>
    <div class="hero-unit">
    <h1>Remote code</h1>
    <p>Serves your code as a JSON format for your code.</p>
</div>

	<div class="actionbar">
	<button class="save btn btn-success">Save</button>
	<button class="clear btn btn-danger">Clear</button>
</div>
	
<div class="code-container">
	<textarea id="code" name="code"><? echo $currentcode ?></textarea>
</div>
</body>
</html>