
<?php 
/* الهدف من الملف هذا هو للتواصل بين قاعدة البيانات و التطبيق*/ 
session_start(); // يستخدم عشان نقول للمستخدم انه بدأ جلسة جديدة
$_SESSION['user_id'] = 1; // للتعرف على معلومات المستخدم
$server_name = "localhost";
$user_name ="root";
$password="";
$dbname = "to_do";

// اجراء الاتصال 
$connection = new mysqli($server_name,$user_name,$password,$dbname);

if($connection->connect_error){
	echo "فشل الاتصال مع قاعدة البيانات: $conncection->connect_error";
}else{
	echo "تم الاتصال مع قاعدة البيانات";
}
