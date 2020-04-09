<?php 

require "config.php";


function Validate_date($date_string){
    if($time = strtotime($data_string)){
        return $time;
    }else{
        return false;
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	// اختبار عدم فراغ حقلي وصف المهمة و التاريخ
	if((!empty($_POST['task_name'])) and (!empty($_POST['due_task']))){
        // اختبار صحة التاريخ المدخل 
		if($due_date = Validate_date($_POST['due_date'])){
			// تخزين البيانات في قاعدة البيانات
			$description = $_POST['task_name'];
			$due_date = ('Y-m-d H:i:s',$due_date);
			$connection->query("INSERT INTO tasks(description,due_date, user_id) 
			VALUES ('".$description."','".$due_date"','".$_SESSION['user_id']."')");
			
		}
		// التاريخ غير صحيح 
		else{
			// ارسال رسالة خطأ الي المستخدم لتصحيح التاريخ المرسل
		}
		
    }
	// اذا احد الحقلين او كليهما فارغين 
	else{

    }
}
