<?php
session_start();	

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Project</title>
	<link rel="stylesheet" href="public/views/style.css">
</head>
<body>
<header class="header">
	<div class="container">
		<div class="logo">
			<a href="/">Shop</a>
		</div>
		<div class="header_nav">
			<ul>
				<a href="/"><li>Главная</li></a>
				<a href="categories"><li>Categories</li></a>
			</ul>
		</div>
		<div class="search">
			<form action="" method="post">
				<input type="text">
				<button type="submit" class="search_btn">Поиск</button>
			</form>
		</div>
		<div class="reg_auth">
			<a href="">Log in</a>
			<a href="register">Register</a>
		</div>
	</div>
</header>
	
