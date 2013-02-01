<?php
if ( file_exists( 'load.php' ) ) {
	require_once( 'load.php' );
}

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Note Title</title>
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,700|Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css" media="all">
	<script type="text/javascript" src="<?php echo SITE_URL; ?>/js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="<?php echo SITE_URL; ?>/js/scripts.js"></script>
</head>

<body class="note">
	<div role="main" id="main">
		<h1 class="title default" contenteditable="true">Note Title</h1>
		<div class="page" contenteditable="true">

		</div>
	</div><!-- #main -->
</body>