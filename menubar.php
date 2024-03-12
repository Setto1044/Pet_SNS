<?php
	$userid = $_SESSION["id"];
	$username = $_SESSION["username"];
	$petname = $_SESSION["petname"];
	$state = $_SESSION["state"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style>
		#topMenu {
			height: 30px;
			width: 850px;
		}

		#topMenu ul li {
			list-style: none;
			color: black;
			background-color: #;
			float: left;
			line-height: 50px;
			vertical-align: middle;
			text-align: center;
		}

		#topMenu .menuLink {
			text-decoration:none;
			color: black;
			display: block;
			width: 250px;
			height: 50px;
			font-size: 25px;
			font-weight: bold;
			font-family: "Trebuchet MS";
		}
		#topMenu .menuLink:hover {
			color: white;
			background-color: #9370DB;
		}


	</style>


</head>
<body>
	<nav id="topMenu" >
		<ul>
			<li><a class="menuLink" href="index.php">피드</a></li>
			<li>|</li>
			<li><a class="menuLink" href="post.php">게시</a></li>
			<li>|</li>
			<li><a class="menuLink" href="photo.php"><?=$petname?> 사진첩</a></li>
		</ul>
	</nav>

</body>
</html>