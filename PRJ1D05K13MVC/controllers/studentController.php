<?php
//    Lấy hành động hiện tại
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
//    Kiểm tra hành động hiện tại
    switch ($action){
        case '':
//            Lấy dữ liệu từ db
            include_once 'models/studentModel.php';
//            Hiển thị ra view
            include_once 'views/students/index.php';
            break;
        case 'create':
//            Lấy toàn bộ class
            include_once 'models/studentModel.php';
//            Hiển thị form thêm
            include_once 'views/students/create.php';
            break;
        case 'store':
//            Lưu dữ liệu lên DB
            include_once 'models/studentModel.php';
//            Quay về trang danh sách
            header('Location:index.php?controller=student');
            break;
        case 'edit':
//            Lấy thông tin của bản ghi hiện tại và toàn bộ các lớp
            include_once 'models/studentModel.php';
//            Hiển thị form sửa
            include_once 'views/students/edit.php';
            break;
        case 'update':
//            Thay đổi dữ liệu trên db
            include_once 'models/studentModel.php';
//            Quay về trang danh sách
            header('Location:index.php?controller=student');
            break;
        case 'destroy':
//            Xóa bản ghi trên db
            include_once 'models/studentModel.php';
//            Quay về trang danh sách
            header('Location:index.php?controller=student');
            break;
    }
?>