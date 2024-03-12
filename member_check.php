<?php
$conn = mysqli_connect("localhost", "user1", "12345", "termproject");

$id = $_POST['id'];
$pw = $_POST['pw'];

// DB 정보 가져오기 
$sql = "SELECT * FROM member WHERE id ='{$id}'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
$row['pw'];
$row['id'];

if ($pw === $row['pw']) {
    // 로그인 성공
    // 세션에 id 저장
    session_start();
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['petname'] = $row['petname'];
    $_SESSION['state'] = $row['state'];

    print_r($_SESSION);
    echo $_SESSION['id'];
    
    ?>
    <script>
        location.href = "index.php";
    </script>
    <?php
} else {
    // 로그인 실패 
    ?>
    <script>
        alert("아이디나 비밀번호가 일치하지 않습니다");
        window.history.back();
        document
    </script>
    <?php
}
?>