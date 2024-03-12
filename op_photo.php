
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style>
	a{
		text-decoration-line: none;
		color: #ffffff;
	}
	</style>
</head>
<body>

	<?php
	
	//사진첩 주인 정보 가져오기
	$conn = mysqli_connect("localhost", "user1", "12345", "termproject");
	if(!$conn)die("연결에 실패 하였습니다.".mysqli_connect_error());

	$sql = "SELECT * FROM member where id='$seeid'";
	$result = mysqli_query($conn, $sql);

	mysqli_data_seek($result,0);
	$row = mysqli_fetch_array($result);
	$ownerid = $row["id"];
	$petname = $row["petname"];
	$state = $row["state"];
	$email = $row["email"];
?>
<!--열람중인 사진첩 주인 정보 출력-->
	<br>
		회원 ID: <?=$ownerid?>
<?php
	if($state != 'nothing'){

?>
	<br>
		반려 
<?php
	if($state == 'dog')
		echo "강아지 ";
	if($state == 'cat')
		echo "고양이 ";

?>
		이름: <?=$petname?>
<?php
}
?>
	<br>
		이메일: <?=$email?>

	<br><br>
<?php
	$sql = "SELECT * FROM board where userid='$seeid' order by num desc";
	$result = mysqli_query($conn, $sql);

	$all_feed = mysqli_num_rows($result);

	mysqli_data_seek($result, 0);
	$row = mysqli_fetch_array($result);
	$ownerid = $row["userid"];
	$petname = $row["petname"];
?>

<?php
	for($i=0; $i < $all_feed; $i++){
		mysqli_data_seek($result, $i);
		$row = mysqli_fetch_array($result);
		$num = $row["num"];
		$ownerid = $row["userid"];
		$petname = $row["petname"];
		$comment = $row["comment"];
		$regist_day = $row["regist_day"];
		$file_name = $row["file_name"];
		$file_type = $row["file_type"];
		$file_copied = $row["file_copied"];

		$file_path = "data/$file_copied";
		$likes = $row["likes"];
		$liker = $row["liker"];
		?>
		
		<?php include "feedbox.php";?>

		<?php
	}
	?>
</body>
</html>