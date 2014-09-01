<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title><?=$title?></title>
	<link rel="shortcut icon" href="images/icon.ico" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0"/>

	<link rel="stylesheet" href="styles/fancystyle.css" />
	<link rel="stylesheet" href="styles/main.css" type="text/css" />
	<script>
		if (document.cookie != null) {
			var styleFile = document.cookie.substr(6,document.cookie.length-1) + ".css";
		} else {
			var styleFile = "styles/main.css";
		}
		document.writeln('<link rel="stylesheet" type="text/css" href="styles/' + styleFile + '">');
	</script>

	<link rel="stylesheet" href="styles/mobile.css" type="text/css" media="only screen and (max-device-width: 480px), only screen and (max-width: 480px)" />
	<script type="text/JavaScript" src="javascript/raphael-min.js"></script>
	<script type="text/JavaScript" src="javascript/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
</head>
<body>
	<div id="body">
		<?php
		include $viewFile;
		?>
	</div>
</body>
</html>
