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
		<a href="admin" class="display-6 text-info">Панель Администратора</a>
		<div>
			<?php foreach($articles as $a): ?>
			<div class="article col-md-10">
				<h3><a href="article.php?id=<?=$a['NewsId']?>" class="text-info"> <?=$a['Title']?> </a></h3>
				<p><?=articles_intro($a['Content'])?></p>
			</div>
			<?php endforeach ?>
		</div>
</body>
</html>
