<?php
define('MYSQL_SERVER', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', 'password');
define('MYSQL_DB', 'News');

function db_connect(){
	$link = mysqli_connect(MYSQL_SERVER, MYSQL_USE, MYSQL_PASSWORD, MYSQL_DB)
		or die("Error: ".mysqli_error($link));
	if(!mysqli_set_charset($link, "utf8")){
		printf("Error: ".mysqli_error($link));
	}

	return $link;
}
	

?>