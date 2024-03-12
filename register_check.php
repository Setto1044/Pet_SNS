<?php

$id = $_POST["id"];
$pw = $_POST["pass"];
$pw_again = $_POST["pass_again"];
$username = $_POST["name"];
$email1 = $_POST["email1"];
$email2 = $_POST["email2"];
$petname = $_POST["petName"];
$state = $_POST["state"];

$email = $email1.'@'.$email2;





$conn = mysqli_connect("localhost", "user1", "12345", "termproject");
if(!$conn)die("연결에 실패 하였습니다.".mysqli_connect_error());



$sql = "SELECT * FROM member WHERE id ='{$id}'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$row['id'];
//id중복 확인  
if (!empty($row['id'])){
	mysqli_close($conn);
	?>
	<script type="text/javascript">
		alert("이미 사용중인 아이디 입니다.");
		window.history.back();
	</script>
	
	<?php

} else {

	$sql = "insert into member(id, pw, username,email, petname, state) values('$id', '$pw', '$username', '$email', '$petname', '$state')";

	mysqli_query($conn, $sql);
	mysqli_close($conn);

	?>
	<script type="text/javascript">
	alert("회원가입 성공")
	document.location.href="log_in.html" ; 
</script>
	<?php
}
?>
