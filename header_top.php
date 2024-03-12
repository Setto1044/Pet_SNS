<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style>
		#btn{
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
</head>
<body>
	<div>

		<a href="index.php">
			<img src="logo.jpg" width="600px" height="80px" ><br>
		</a>
		<br>
		<li style="float: left; ">
			
<!-- 반려동물 존재시 표시-->
<?php
	if($state == 'dog' or $state == 'cat'){
?>
		<div>
			사용자ID 검색
			<form name = "searchid" method="post" action="idfind.php">
				<input type="text" name="seeid">
				<input type="submit" value="검색">
			</form>
		</div>
<?php
}
?>
			<li style="float: right; margin:0px 10px 0px 0px;">
<?php
	echo "$petname ";
	if( $state == 'dog')
		echo "견주";
	elseif ($state == 'cat')
		echo "묘주";
	else
		echo "회원 ";

?>
				<?=$username?>&nbsp님 안녕하세요!&nbsp&nbsp

				<a href="session_destroy.php">
					<button id="btn" value="test_btn1"
					style="float: right;">로그아웃</button>
				</a>
			</li>
			<br>
		</div>
	</body>
	</html>