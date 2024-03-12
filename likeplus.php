<?php
	session_start();
	$userid = $_SESSION["id"];
	$num = $_GET['num'];


	$conn = mysqli_connect("localhost", "user1", "12345", "termproject");
	if(!$conn)die("연결에 실패 하였습니다.".mysqli_connect_error());

	$sql = "select * from board where num = $num";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);

	$liker = $row["liker"];
	$likes = $row["likes"];

	//ID명단에 사용자 ID 추가
	$liker = $liker.$userid.',';
	//좋아요 증가
	$likes = $likes + 1;

	$sql = "update board set likes='$likes' where num='$num'";
	mysqli_query($conn, $sql);

	$sql = "update board set liker='$liker' where num='$num'";
	mysqli_query($conn, $sql);


	mysqli_close($conn);

	echo "
		<script>
		location.href = 'index.php';
		</script>
	";
	
?>