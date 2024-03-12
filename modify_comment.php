<?php
	session_start();
	$num = $_GET["num"];
	$comment = $_POST["comment"];
	$comment = htmlspecialchars($comment, ENT_QUOTES);


	$conn = mysqli_connect("localhost", "user1", "12345", "termproject");
	if(!$conn)die("연결에 실패 하였습니다.".mysqli_connect_error());

	$sql = "update board set comment='$comment' where num='$num'";

	mysqli_query($conn, $sql);
	mysqli_close($conn);

	echo "
		<script>
		location.href = 'index.php';
		</script>
	";
?>

