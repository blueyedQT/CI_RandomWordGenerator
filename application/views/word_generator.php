<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Random Word Generator</title>
	<style>
		body {
			width: 500px;
			margin: 50px auto;
			text-align: center;
		}
		h1 {
			background-color: black;
			color: white;
			padding: 15px;
		}
	</style>
</head>
<body>
	<form action="/wordgenerator/random" method="post">
		<h4>Random Word (Attempt # <?php echo $count ?>)</h4>
		<h1><?php echo $string ?></h1>
		<input type="submit" value="Generate!">
	</form>
</body>
</html>