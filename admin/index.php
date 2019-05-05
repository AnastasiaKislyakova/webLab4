<?php
	require_once("../database.php");
	require_once("../models/articles.php");

	$link = db_connect();

	if(isset($_GET['action']))
		$action = $_GET['action'];
	else 
		$action = "";

	if ($action == "add"){
		if(!empty($_POST)){
			articles_new($link, $_POST['Title'], $_POST['Content']);
			header("Location: index.php");
		}
		include("../views/article_admin.php");
	}else if($action == "delete"){
		$id = $_GET['id'];
		$article = articles_delete($link, $id);
		header("Location: index.php");
	}else{
		$articles = articles_all($link);
		include("../views/articles_admin.php");
	}
	
?>