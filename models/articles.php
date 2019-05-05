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

function articles_new($title, $content){

}

function articles_delete($id){

}

?>