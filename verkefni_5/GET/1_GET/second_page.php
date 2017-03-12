<html>
	<head>
		<title>Second page</title>
	</head>
	<body>
			<pre>
				<?php 
					// Allt sem kemur eftir ? fer í $_GET (superglobal)
					print_r($_GET); 
				?>
			</pre>

			<?php
				$id = $_GET["id"];
				$name = $_GET["name"];
				echo "<br>" . $id . "<br>" . $name; 
						
			/*
				Fleiri Dæmi:
				somepage.php?page=2
				somepage.php?page=3&category=5
				http://google.com/search?q=php

				GET request er einnig notað m.a. fyrir leitarbox og form.

			*/ 
			?>
	</body>
</html>
