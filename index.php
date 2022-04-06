<?php
    $conn = mysqli_connect (
        'docker-mysql-test.clo3dusfyehi.ap-northeast-1.rds.amazonaws.com',
        'user',
        'password',
        'TEST',
        '3306'
    );
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MYSQL: ".mysqli_connect_error();
    }
    $sql = "SELECT VERSION()";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    print_r($row["VERSION()"]);
?>