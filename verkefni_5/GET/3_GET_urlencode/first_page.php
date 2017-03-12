<html>
	<head>
		<title>Links sýnidæmi2</title>
	</head>
	<body>
	
		<?php 
			$link_name="Second Page"; 
			$id = 2; 
			$company = "Johnson & Johnson";  # vandamálið er & í streng
		?>
		<!-- lausn notum urlencode() -->
		<a href="second_page.php?id=<?php echo $id; ?>&company=<?php echo urlencode($company)?>"><?php echo $link_name; ?></a>

	
	</body>
</html>
