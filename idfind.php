<?php
$conn = mysqli_connect("localhost", "user1", "12345", "termproject");

$seeid = $_POST['seeid'];
// DB 정보 가져오기 
$sql = "SELECT * FROM member WHERE id ='{$seeid}'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
$row['id'];

if ($seeid === $row['id']) {
?>
    <script>
        location.href = "pet_feed.php?seeid=<?=$seeid?>";
    </script>
<?php
} else {
    // 로그인 실패 
    ?>
    <script>
        alert("존재하지 않는 사용자입니다.");
        window.history.back();
        document
    </script>
    <?php
}
?>