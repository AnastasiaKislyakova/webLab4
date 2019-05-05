<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<link rel="stylesheet" href="../style.css"
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Администрирование</h1>
		<div>
			<a href="../index.php">На главную</a>
			<br>
			<a href="index.php?action=add">Добавить новость</a>
			<table class="admin-table">
				<tr>
					<th>Заголовок</th>
					<th></th>
				</tr>
				<?php foreach($articles as $a): ?>
				<tr>
					<td><?=$a['Title']?></td>
					<td>
						<a href="index.php?action=delete&id=<?=$a['NewsId']?>">Удалить</a>
					</td>
				</tr>
				<?php endforeach ?>
			</table>
			
			
		</div>
</body>
</html>
