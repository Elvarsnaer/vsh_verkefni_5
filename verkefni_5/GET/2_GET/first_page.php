<html>
	<head>
		<title>Links sýnidæmi2</title>
	</head>
	<body>
		<!-- Búum til dýnamískan textalink  $link_name
			 Gætum t.d. notað if/else til að ákveða hvað linkur á að heita
			 eða hvaða link á að birtast t.d. login eða logout.
			 Eða Gæti verið lesinn úr gagnagrunni.
		-->
		<?php $link_name="Second Page"; ?>

		<!-- Query parameters
		búum til dynamic querystring með breytu í staðinn fyrir static href="second_page.php?id=2" -->
		<?php $id = 2; ?>

		<a href="second_page.php?id=<?php echo $id; ?>"><?php echo $link_name; ?></a>

		<!-- 
		punktur:
		Við gætum sett lykkju utan um kóðann til að búa til marga mism. slóðir og linka.
		-->
	</body>
</html>
