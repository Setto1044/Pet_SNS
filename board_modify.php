<!DOCTYPE html>
<?php
$userid = $_SESSION["id"];
$username = $_SESSION["username"];
$petname = $_SESSION["petname"];
$state = $_SESSION["state"];
$num = $_GET["num"];

$con = mysqli_connect("localhost", "user1", "12345", "termproject");
if(!$con)die("연결에 실패 하였습니다.".mysqli_connect_error());

$sql = "select * from board where num = $num";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

$comment = $row["comment"];

?>
<html>
<head>
	<meta charset="utf-8">
	<script>
		function check_input() {
			if (!document.postfeed.comment.value)
			{
				alert("내용을 입력하세요!");    
				document.postfeed.comment.focus();
				return;
			}
			document.postfeed.submit();
		}
	</script>

</head>
<body>
	<div>
		<form  name="postfeed" method="post" action="modify_comment.php?num=<?=$num?>" enctype="multipart/form-data">
			<ul>
				<li>
					<span>이름 : </span>
					<span><?=$petname?></span>
				</li>		    	
				<li>	
					<span>내용 : </span>
					<span>
						<textarea name="comment" rows="10" cols="60"><?=$comment?></textarea>
					</span>
				</li>

			</ul>
			<ul>
				<li>
					<button type="button" onclick="check_input()">수정</button>
					<button onclick="location.href='board_delete.php?num=<?=$num?>'">삭제</button>
					<button onclick= "window.history.back();">취소</button>
				</li>
			</ul>
		</form>
	</div>



</body>
</html>