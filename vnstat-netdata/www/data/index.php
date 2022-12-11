<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>첫번째 서버</title>
    </head>
    <body>
        <h1>첫번째 서버</h1>
        <?php 
        if(!isset($_SESSION['user_id'])) {
            echo "<form method='post' action='login_ok.php'>";
            echo "    <p>아이디: <input type='text' name='user_id'></p>";
            echo "    <p>패스워드: <input type='password' name='user_pw'></p>";
            echo "    <p><input type='submit' value='로그인'></p>";
            echo "</form>";
            echo "1' or 1 = 1 #";
        } else {
            $user_id = $_SESSION['user_id'];
            echo "<p>$user_id 님이 로그인 중입니다.";
            echo "<a href='logout.php'>[로그아웃]</a></p>";
        } 
        ?>
        <hr>
        <?php 
        if(isset($_GET['value'])) {
            echo "전달받은 value값은 ".$_GET['value']." 입니다.";
        } else {
            echo "전달받은 value값은 없습니다.";
        }
        ?>
        <hr>
    </body>
</html>

<?php
$connect = new mysqli('mysql_serv', 'admin', 'password', 'testdb', '3306', 'UTF8');

if( $connect -> connect_errno ) {
    echo "MySql 연결 실패: " . $mysqli -> connect_error ;
    exit();
} 

echo "MySql 연결 성공.<br>아래 내용은 DB 내용입니다.<br>";

$query = "select * from testtable";
$result = $connect->query($query) or die($this->_connect->error);
foreach($result as $row){
    print_r($row);
    echo '<br>';
}
$connect->close();
?>