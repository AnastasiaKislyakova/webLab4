<?php

function articles_all($link){
	$query = "select * from News order by NewsId DESC";
	$result = mysqli_query($link, $query);

	if (!$result)
		die(mysqli_error($link));

	$n = mysqli_num_rows($result);
	$articles = array();

	for ($i = 0; $i < $n; $i++) {
		$row = mysqli_fetch_assoc($result);
		$articles[] = $row;
	}

	return $articles;
}

function articles_get($link, $id){
	$query = sprintf("select * from News where NewsId=%d", (int)$id);
	$result = mysqli_query($link, $query);

	if (!$result)
		die(mysqli_error($link));

	$article = mysqli_fetch_assoc($result);

	return $article;
}

function articles_new($link, $title, $content){
	$title = trim($title);
	$content = trim($content);

	if ($title == '')
		return false;

	$t = "insert into News (Title, Content) values ('%s', '%s')";

	$query = sprintf($t, mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $content));

	$result = mysqli_query($link, $query);

	if (!$result)
		die(mysqli_error($link));

	return true;
}

function articles_delete($link, $id){
	$id = (int)$id;
	if ($id == 0)
		return false;

	$query = sprintf("delete from News where NewsId='%d'", $id);
	$result = mysqli_query($link, $query);

	if (!$result)
		die(mysqli_error($link));

	return mysqli_affected_rows($link);
}

function articles_intro($text, $len = 500){
	return mb_substr($text, 0, $len);
}
?>