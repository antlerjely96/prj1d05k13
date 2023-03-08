<?php
//Lấy controller đang làm việc
    $controller = '';
    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }
//    Kiểm tra đang làm việc với controller nào
    switch ($controller){
        case '':
            //Cho chọn làm việc với controller nào
            include_once 'views/index.php';
            break;
        case 'class':
            include_once 'controllers/classController.php';
            break;
        case 'student':
            include_once 'controllers/studentController.php';
            break;
    }
?>