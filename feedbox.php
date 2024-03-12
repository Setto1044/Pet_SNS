<style>
	button{
		background-color: #9370DB;
		width:100px;
		padding: 5px;
		border: none;
		color:#fff;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 15px;
		margin: auto;
		cursor: pointer;
	}
	#undolike{
		background-color: #F08080;
		width:100px;
		padding: 5px;
		border: none;
		color:#fff;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 15px;
		margin: auto;
		cursor: pointer;
	}
</style>
<!-- 피드박스-->
<div>
	<div style="width: 70%; max-width: 1000px; margin: auto; border: 5px solid #9370DB; background-color: #9370DB;">
		<div style="float: left; background-color: #9370DB; color: #ffffff;">ID:
			<?php
			$seeid = $ownerid;
			?>
			<a href="pet_feed.php?seeid=<?=$seeid?>"><?=$ownerid?></a></div>
			<div style="float: right; background-color: #9370DB; color: #ffffff;">게시일: <?=$regist_day?></div>
			<br>
			<div style="float: left; background-color: #9370DB; color: #ffffff;">
				<a href="pet_feed.php?seeid=<?=$seeid?>"><?=$petname?></a>
			</div>
			<br>
			<a href="pet_feed.php?seeid=<?=$seeid?>">
				<img src="<?=$file_path?>" width="100%" >
			</a>
				<br>

			<div style="background-color: #9370DB; color: white;">
		<?php
			//좋아요 누른사람 명단에 사용자 이름이 없다면 좋아요 누르기 버튼
			if (strpos($liker, $userid) == false){
		?>
				<button onclick="location.href='likeplus.php?num=<?=$num?>'">♡</button>
		<?php
			}
			//좋아요 누른사람 명단에 사용자 이름이 있다면 좋아요 취소 버튼
			else{
		?>
				<button id="undolike" onclick="location.href='likeundo.php?num=<?=$num?>'">♥</button>
		<?php
			}
		?>
				: <?=$likes?>개
				<br>
			</div>
			<div style="min-height: 50px; background-color: #ffffff;">
				<?=$comment?>
				<br>
			</div>
			<!--게시물 소유주만 수정 가능-->
			<?php
			if ($ownerid == $userid){
				?>
				<div style="width: 100%; height: 40px;  background-color: #9370DB;">
					<span style="float: right; color: #ffffff;">
						<button style="padding: 3px; margin : 3px;" onclick="location.href='board_modifier.php?num=<?=$num?>'">수정</button>|
						<button style="padding: 3px; margin : 3px;" onclick="location.href='board_delete.php?num=<?=$num?>'">삭제</button>
					</span>
				</div>
				<?php
			}
			?>
		</div>
		<br>