<?php
	session_start();
	$userid = $_SESSION["id"];
	$username = $_SESSION["username"];
	$petname = $_SESSION["petname"];
	$state = $_SESSION["state"];
	$seeid = $_GET["seeid"];

		//로그아웃 등으로 세션이 비면 로그인페이지로 강제 이동
	if(is_null($userid)){
		Header("Location:log_in.html"); 
}

?>
<!DOCTYPE html>
<title>Whynab SNS</title>
<link rel="stylesheet" type="text/css" href="./css/index.css">
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
			<?=$seeid?> 님의 사진첩 둘러보기
		</div>
		<?php include "op_photo.php";?>
	</article>

	<banner id="banner">
		<div>
			<?php include "slider.php";?>
		</div>
	</banner>


<footer id="pageFooter" style="background-color: #DCDCDC">
	<?php include "footer.php";?>
</footer>
</body>