
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
	<br><br>
	<?php
	
	$conn = mysqli_connect("localhost", "user1", "12345", "termproject");
	if(!$conn)die("연결에 실패 하였습니다.".mysqli_connect_error());

	$sql = "SELECT * FROM board where userid='$userid' order by num desc";
	$result = mysqli_query($conn, $sql);

	$all_feed = mysqli_num_rows($result);

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