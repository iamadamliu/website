<?php
// 数据库连接配置
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'my_database';

// 创建连接
$conn = new mysqli($host, $user, $password, $dbname);

// 检查连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 获取当前时间
$current_time = date("Y-m-d H:i:s");

// 插入数据
$sql = "INSERT INTO login_record (create_time) VALUES ('$current_time')";

// 执行 SQL 查询
if ($conn->query($sql) === TRUE) {
    // 插入成功
    echo "新记录插入成功";
} else {
    // 插入失败
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// 关闭数据库连接
$conn->close();
?>
