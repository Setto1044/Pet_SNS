<?php
	//좋아요 취소
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

	//좋아요 아이디 명단에서 ID 제거
	$liker = str_replace($userid.',', '', $liker);
	//좋아요 수 감소
	$likes = $likes - 1;

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