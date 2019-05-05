<?
if(isset($_POST['id'], $_POST['title'], $_POST['newstext'])) {
	$id=trim($_POST['id']);
	$title=trim ($_POST['title']);
	$newstext=trim ($_POST['newstext']);
	$mysqli=new mysqli('localhost', 'root', 'password', 'news');
	if (mysqli_connect_errno()) {
	    printf("Подключение невозможно: %s\n", mysqli_connect_error());
	    exit();
	}
	$stmt=$mysqli->prepare("INSERT INTO news VALUES (?,?,?)");
	$stmt->bind_param('sss', $id, $title, $newstext);
	mysqli_set_charset($mysqli, "utf8");
	$stmt->execute();
}
?>
