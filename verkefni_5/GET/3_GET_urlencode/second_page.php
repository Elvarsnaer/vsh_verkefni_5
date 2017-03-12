<html>
	<head>
		<title>Second page</title>
	</head>
	<body>
		<?php
			// Url eru með frátekin sértákn(chars); &,(,),/,:,@,# og fleiri. 

			// urlencode leyfir notkun á þessum sértáknum 
			// breytir þeim í % + 2-digit hexidecimal
			// bil fær +  (með rawurlencode þá %20 )
		
			$company = $_GET["company"];
			echo $company; 

			# ATH:
			# Nota rawurlencode fyrir allt sem er á undan ?  - path (slóðin,file system notar %20 fyrir autt space)
			# Nota urlencode fyrir það sem kemur á eftir ?   - query string
				
			# rawurlencode er oftast betra, betra fyrir AJAX og API.
			# Dæmi: 
			$page = "William Shakespeare";
			$quote = "To be or not to be";
			$link = "/bio/" . rawurlencode($page) . "?quote=" . urlencode($quote);
			
			echo $link; // úttak:  /bio/William%20Shakespeare?quote=To+be+or+not+to+be
		?>
	</body>
</html>
