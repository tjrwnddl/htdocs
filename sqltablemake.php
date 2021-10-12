<?php
// 1. 연결 : mysql_connect(호스트명, 아이디, 비밀번호)
$conn=mysqli_connect('localhost', 'root', '1111'); //db 연결부분
     if($conn) 
      echo "db연결성공<br>";
     else
      echo "db연결1실패"; 


// DB 선택 : mysql_select_db($conn, 해당 db명 )

$db=mysqli_select_db($conn, "php_exam");
if($db)
 echo "db 연결성공<br>";
else
 echo "db 연결2실패";

//DB에 table 쿼리(query 질의).
$sql="create table php_tbl(num int, name varchar(10))";
//mysqli_query($conn, $sql)  db에 질의 수행.
mysqli_query($conn, $sql);
?>

//테이블이 생성되었음을 알려주는 경고창. 물론, 쿼리와 직접적 상관은 없다;
<script>
alert("테이블 생성");
</script>

