<?php

$arrayName =array();
$k=array(
  "a"=>3,
  "b"=>4
);
//
foreach ($k as $key => $value) {
echo $key;
echo $value;
  // print($value);
}
echo "ASdf";
// var_dump($k);
//post man 테스트
if($_POST['name']=="name"){
  echo "asdfasdf";
}else{
  echo "ㅜㄴㅇㅁㄹ";
}
    $hostname=$_SERVER["HTTP_HOST"]; //도메인명(호스트)명을 구합니다.
   $uri= $_SERVER['REQUEST_URI']; //uri를 구합니다.
   $query_string=getenv("QUERY_STRING"); // Get값으로 넘어온 값들을 구합니다.
   $phpself=$_SERVER["PHP_SELF"]; //현재 실행되고 있는 페이지의 url을 구합니다.
   $basename=basename($_SERVER["PHP_SELF"]); //현재 실행되고 있는 페이지명만 구합니다.

   echo $hostname."<br>";
   echo $uri."<br>";
   echo $query_string."<br>";
   echo $phpself."<br>";
   echo $basename."<br>";


?>
