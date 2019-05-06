<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body class="color-bg">
	<div class="container">
		<h1 class="display-4">Новостной портал</h1>
		<div>
			<div class="article col-md-10">
				<h3><?=$article['Title']?></h3>
				<p><?=$article['Content']?></p>
			</div>
		</div>
</body>
</html>
