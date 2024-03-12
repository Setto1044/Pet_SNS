<?php
session_start();
$userid = $_SESSION["id"];
$username = $_SESSION["username"];
$petname = $_SESSION["petname"];
$state = $_SESSION["state"];
$num = $_GET["num"];


if(is_null($userid)){
	Header("Location:log_in.html"); 
}

?>
<!DOCTYPE html>
<title>Whynab SNS</title>
<link rel="stylesheet" type="text/css" href="./css/index.css">
<style>
	span{
		font-size: 20px;
	}
	button{
			background-color: #9370DB;
			width:100px;
			padding: 5px;
			border: none;
			color:#fff;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 15px;
			margin: auto;
			cursor: pointer;
		}
</style>
<body>
	<header id="pageHeader">
		<div>
			<?php include "header_top.php";?>
			<br><br>
			<?php include "menubar.php";?><br>
		</div>
		<div style="background-color: #FFFFFF; font-size: 10px; color: #FFFFFF;">
			.
		</div>
	</header>

	<article id="mainArticle">
		<div style="width: 1fr; margin: auto; text-align: center; background-color: #9370DB; color: #ffffff; font-size: 25px">
			게시물 수정
		</div>
		<?php include "board_modify.php";?>
	</article>


	<div id="banner">
		<div>
			<?php include "slider.php";?>
		</div>
	</div>
</div>

<footer id="pageFooter" style="background-color: #DCDCDC">Footer</footer>
</body>