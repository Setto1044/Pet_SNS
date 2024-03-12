<meta charset="utf-8">
<?php
session_start();
	$userid = $_SESSION["id"];
	$username = $_SESSION["username"];
	$petname = $_SESSION["petname"];

	$upload_dir = './data/';
	$upfile_name	 = $_FILES["upfile"]["name"];
	$upfile_tmp_name = $_FILES["upfile"]["tmp_name"];
	$upfile_type     = $_FILES["upfile"]["type"];
	$upfile_size     = $_FILES["upfile"]["size"];
	$upfile_error    = $_FILES["upfile"]["error"];
	$upload_dir = './data/';

	$comment = $_POST["comment"];
	$comment = htmlspecialchars($comment, ENT_QUOTES);

	$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일(시:분)' 저장



	if ($upfile_name && !$upfile_error)
	{
		$file = explode(".", $upfile_name);
		$file_name = $file[0];
		$file_ext  = $file[1];

		$new_file_name = date("Y_m_d_H_i_s");
		$new_file_name = $new_file_name;
		$copied_file_name = $new_file_name.".".$file_ext;      
		$uploaded_file = $upload_dir.$copied_file_name;

		$likes = 0;
		$liker = ',';

		if( $upfile_size  > 100000000 ) {
				echo("
				<script>
				alert('업로드 파일 크기가 지정된 용량(100MB)을 초과합니다!<br>파일 크기를 체크해주세요! ');
				history.go(-1)
				</script>
				");
				exit;
		}

		if (!move_uploaded_file($upfile_tmp_name, $uploaded_file) )
		{
				echo("
					<script>
					alert('파일을 지정한 디렉토리에 복사하는데 실패했습니다.');
					history.go(-1)
					</script>
				");
				exit;
		}
	}
	else 
	{
		$upfile_name      = "";
		$upfile_type      = "";
		$copied_file_name = "";
	}
	
	$con = mysqli_connect("localhost", "user1", "12345", "termproject");
	if(!$con)die("연결에 실패 하였습니다.".mysqli_connect_error());

	$sql = "insert into board (userid, petname, username, comment, regist_day,  file_name, file_type, file_copied, likes, liker) values('$userid', '$petname', '$username', '$comment', '$regist_day', '$upfile_name', '$upfile_type', '$copied_file_name', '$likes', '$liker') ";

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행

	mysqli_close($con);                // DB 연결 끊기

	echo "
	   <script>
	    location.href = 'index.php';
	   </script>
	";
?>

  
