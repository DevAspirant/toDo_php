<?php 
function validate_date($date_string){
    if($time = strtotime($data_string)){
        return $time;
    }else{
        return false;
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo $_POST['task_name'];
    echo $_POST['due_task'];
    if((!empty($_POST['task_name'])) and (!empty($_POST['due_task']))){
        echo 'test';
    }else{

    }
}