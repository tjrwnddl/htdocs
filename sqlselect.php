<?php

$conn=mysqli_connect('localhost', 'root', '1111');     //MySQL 접속 및 설정 저장2
mysqli_select_db($conn, "php_exam");            //DB 접속

$sql="select * from php_tbl";                         //test 테이블의 레코드를 모두 뽑아오기
$sql_result=mysqli_query($conn, $sql);          //질의(위 내용)를 수행하라.


$count=mysqli_num_rows($sql_result);          //mysql_num_rows() 함수 : 행의 개수를 세는 함수.
echo $count;     //mysql query 수행 후 반환되는 결과값을 매개변수로 받고 그 레코드의 개수를 반환

echo "<br><br>";




//mysql_result(쿼리실행결과, 행번호, 변수값) : 결과값을 행 단위로 화면에 출력해주는 함수.
/*
for($i=0; $i<$count; $i++)
{
    $num=mysqli_result($sql_result, $i, num);
    $name=mysqli_result($sql_result, $i, name);
    
    echo "$num : $name <br>";
}
*/



//mysql_fetch_array($sql_result) 배열 형식으로 결과값을 화면상에 출력해주는 역할..
for($i=0; $i<$count; $i++)
{
    $result_array=mysqli_fetch_array($sql_result);
    echo "$result_array[num] : $result_array[name] <br>";
}

?>