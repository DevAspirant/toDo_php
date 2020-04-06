<?php 
if($_SERVER['REQUEST_METHOD' == 'POST']){
    echo $_POST['task_name'];
    echo $_POST['due_date'];

}