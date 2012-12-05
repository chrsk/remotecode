<?php
$currentcode = file_get_contents('source.js');
?>
<!doctype html>
<html>
<script src="scripts/jquery.js"></script>
<script src="scripts/base64.js"></script>
<script src="scripts/codemirror.js"></script>
<script src="scripts/jquery.throttle.js"></script>
<script src="scripts/javascript.js"></script>
<script src="scripts/bootstrap.js"></script>
<script src="scripts/main.js"></script>

<link rel="stylesheet" type="text/css" href="layout.css" />
<link rel="stylesheet" type="text/css" href="codemirror.css" />
<link rel="stylesheet" type="text/css" href="bootstrap.min.css" />
<body>
    <div class="hero-unit">
    <h1>Remote code</h1>
    <p>Serves your code as a JSON format for your code.</p>
	<p>Just add <code>/encoded.js</code> to the end of this page.</p>
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