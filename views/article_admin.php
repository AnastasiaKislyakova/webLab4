<!DOCTYPE html>
<html>
<header>
	<meta charset='utf-8' />
	<link rel="stylesheet" href="../style.css"
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</header>
<body>
	<div class="container">
		 <h3> Добавление новостей </h3>
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