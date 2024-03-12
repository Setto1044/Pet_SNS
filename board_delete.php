<!--피드 게시물, 사진, 테이블 값 삭제-->
<?php
$num = $_GET["num"];

$con = mysqli_connect("localhost", "user1", "12345", "termproject");
if(!$con)die("연결에 실패 하였습니다.".mysqli_connect_error());

$sql = "select * from board where num = $num";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$copied_name = $row["file_copied"];

$file_path = "./data/".$copied_name;
unlink($file_path);

	//테이블 row 삭제
$sql = "delete from board where num = $num";

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
	mysqli_close($con);                // DB 연결 끊기

	echo "
	<script>
	location.href = 'index.php';
	</script>
	";


?>