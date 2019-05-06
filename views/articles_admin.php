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
		<h1 class="display-5">Администрирование</h1>
		<div>
			<a href="../index.php" class="text-info">На главную</a>
			<br>
			<a href="index.php?action=add" class="text-info">Добавить новость</a>
			<table class="admin-table col-md-10">
				<tr>
					<th>Заголовок</th>
					<th></th>
				</tr>
				<?php foreach($articles as $a): ?>
				<tr>
					<td><?=$a['Title']?></td>
					<td>
						<a href="index.php?action=delete&id=<?=$a['NewsId']?>" class="text-info">Удалить</a>
					</td>
				</tr>
				<?php endforeach ?>
			</table>
			
			
		</div>
</body>
</html>
