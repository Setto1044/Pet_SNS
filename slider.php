<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style>

	*{margin:0;padding:0;}
	ul,li{
		list-style:none;
	}
	.slide{
		height:300px;
		overflow:hidden;position:relative;
	}
	.slide ul{
		width:calc(100% * 4);
		display:flex;transition:1s;
	}
	.slide li{
		width:calc(100% / 4);
		height:300px;
		background:#ffffff;
	}

	.slide input{
		display:none;
	}
	.slide .bullet{
		position:absolute;bottom:20px;
		left:0;right:0;
		text-align:center;z-index:10;
	}
	.slide .bullet label{width:10px;
		height:10px;
		border-radius:10px;
		border:2px solid #666;
		display:inline-block;
		background:#fff;
		font-size:0;
		transition:0.1s;
		cursor:pointer;
	}

	/* 슬라이드 조작 */
	#pos1:checked ~ ul{margin-left:0;}
	#pos2:checked ~ ul{margin-left:-100%;}
	#pos3:checked ~ ul{margin-left:-200%;}
	#pos4:checked ~ ul{margin-left:-300%;}

	/* bullet 조작 */
	#pos1:checked ~ .bullet label:nth-child(1),
	#pos2:checked ~ .bullet label:nth-child(2),
	#pos3:checked ~ .bullet label:nth-child(3),
	#pos4:checked ~ .bullet label:nth-child(4){background:#666;}
</style>
</head>


<body>
	<div style="height: 30px; background-color: #9370DB; color: #ffffff; text-align: center;">
		최근 게시물
	</div>
	<div class="slide">
		<input type="radio" name="pos" id="pos1" checked>
		<input type="radio" name="pos" id="pos2">
		<input type="radio" name="pos" id="pos3">
		<input type="radio" name="pos" id="pos4">
		<ul>
			<?php
			
			$conn = mysqli_connect("localhost", "user1", "12345", "termproject");
			if(!$conn)die("연결에 실패 하였습니다.".mysqli_connect_error());

			$sql = "SELECT * FROM board order by num desc";
			$result = mysqli_query($conn, $sql);

			$all_feed = mysqli_num_rows($result);

			for($i=0; $i < 4; $i++){
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

				?>
				<!--슬라이드에 하이퍼링크, 이미지추가-->
				<li>
					<a href="pet_feed.php?seeid=<?=$ownerid?>">
						<img src="<?=$file_path?>" width="100%" height="100%">
					</a>
				</li>
				<?php
			}
			?>
			
		</ul>
		<p class="bullet">
			<label for="pos1">1</label>
			<label for="pos2">2</label>
			<label for="pos3">3</label>
			<label for="pos4">4</label>
		</p>
	</div>
</body>
</html>

