<!DOCTYPE html>
<html>
<header>
	<meta charset='utf-8' />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../style.css">
</header>
<body class="color-bg">
	<div class="container">
		<h1 class="display-4">Новостной портал</h1>
		<br>
		<h3 class="display-5"> Добавление новостей </h3>
		<form method="post" action="index.php?action=add" >
		 	<br>
		 		Заголовок новости <br>
		 		<input type="text" Size=90 name="Title" required>
		 	
			<br>
			 	Текст <br>
			 	<textarea  cols=80 rows=6 name="Content" required></textarea>
			<br>
			
			 <input type="Submit" Value="Сохранить">
			 <input type="reset" Value=" Очистить ">
		 </form>
	</div>
</body>
</html>