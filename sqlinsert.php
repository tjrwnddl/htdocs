<?php
$host="localhost";
$user="root";
$password="1111";

$conn=mysqli_connect($host, $user, $password);
mysqli_select_db($conn, "php_exam");

$sql="insert into php_tbl values(3, '손흥민')";
mysqli_query($conn, $sql);

$sql="insert into php_tbl values(4, '황의조')";
mysqli_query($conn, $sql);

?>

<script>
alert("DB 입력 성공! mysql에서 확인해보세요!");
</script>