<?php
    $host = 'localhost';
    $user = 'root';
    $pw = '';
    $dbName = 'yujin';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $sql = "CREATE TABLE myclass_tb (";
    $sql = $sql."id varchar(12) not null,";
    $sql = $sql."name varchar(10) not null,";
    $sql = $sql."sex char(2),";
    $sql = $sql."age int,";
    $sql = $sql."point int,";
    $sql = $sql."address varchar(7),";
    $sql = $sql."primary key(id));";

    if($mysqli->query($sql)) {
        echo '테이블 생성 완료';
    } else {
        echo '테이블 생성 실패';
    }

    $sql = "insert into myclass_tb values";
    $sql = $sql."('dooly','둘리','남',10,100,'korea')";
    $mysqli->query($sql);
?>    