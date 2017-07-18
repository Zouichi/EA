<?php

require('script/fonction.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" href="script/index.css">
</head>
<body>
	<article>
		<?php
			$test=verif_civil();

			echo '<pre>';
			print_r($test);
			echo '</pre>';

		?>
	</article>
</body>
</html>