<?php
    $connect = new mysqli('mysql_serv', 'root', 'password', 'testdb', '3306', 'UTF8');

    if( $connect -> connect_errno ) {
        echo "MySql 연결 실패: " . $mysqli -> connect_error ;
        exit();
    } 

    $user_id = $_POST['user_id'];
    $user_pw = $_POST['user_pw'];

    if ( $user_id == "" || $user_pw == "") {
        echo "<script>alert('아이디, 패스를 입력하세요.');";
        echo "window.location.replace('index.php');</script>";
        exit;
    }

    $query = "select * from testtable where id='$user_id' and password='$user_pw'";
    $result = $connect->query($query);
    $num = mysqli_num_rows($result);

    if($num){
        session_start();
        $_SESSION['user_id'] = $user_id;
        header('Location: index.php');
    } else{
        echo "<script>alert('아이디, 패스워드를 확인하세요.')</script>";
        echo "<script>window.location.href='index.php';</script>";
    }
?>



