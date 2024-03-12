<?php
	session_start();
	unset($_SESSION["id"]);
	


	echo("
		<script>
			location.href = 'log_in.html'
			</script>
		")
?>