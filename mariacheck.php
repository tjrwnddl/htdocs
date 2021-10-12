<?php
   $db_host="localhost";	//DB서버 주소를 입력
   $db_user="root";	//접속할 ID
   $db_password="1111";	// 접속할 ID의 패스워드
   $db_name="php_exam";	// 특별히 사용할 DB가 있다면 DB명을 넣음
   $con=mysqli_connect($db_host, $db_user, $db_password, $db_name);	// 변수 $con에 db접속 내장함수와 (인자값 들)을 저장
   if ( mysqli_connect_error($con) ) {	// DB접속 했을 때 오류가 발생한다면
	   echo "MariaDB 접속 실패 !!", "<br>";	// 출력
	   echo "오류 원인 : ", mysqli_connect_error();	// mysqli_connet_error() 내장함수는 DB서버 연결 오류 원인을 반환해주는 함수
	   exit();
   }
   echo "MariaDB 접속 완전히 성공!!";	// 에러가 없을 시 출력
   mysqli_close($con);	// DB 접속 종료
?>