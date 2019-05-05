<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<link rel="stylesheet" href="style.css"
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<a href="admin">Панель Администратора</a>
		<div>
			<?php foreach($articles as $a): ?>
			<div class="article">
				<h3><a href="article.php?id=<?=$a['NewsId']?>"><?=$a['Title']?></a></h3>
				<p><?=articles_intro($a['Content'])?></p>
			</div>
			<?php endforeach ?>
		</div>
</body>
</html>
