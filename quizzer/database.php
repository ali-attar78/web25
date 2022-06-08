<?php

$db=new mysqli("localhost","root","","quizzer");

if($db->connect_error){
echo "خطایی رخ داده است";

}

else{
$db->query("SET CHARACTER SET utf8");
}


?>