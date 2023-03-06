<?php
//function lấy dữ liệu từ db về
    function index(){
        include_once 'connect/open.php';
        $sql = "SELECT * FROM classes";
        $classes = mysqli_query($connect, $sql);
        include_once 'connect/close.php';
        return $classes;
    }
//    function thêm dữ liệu lên db
    function store(){
//        Lấy dữ liệu từ form về
        $name = $_POST['name'];
        $amount = $_POST['amount'];
        include_once 'connect/open.php';
        $sql = "INSERT INTO classes(name, amount) VALUES ('$name', '$amount')";
        mysqli_query($connect, $sql);
        include_once 'connect/close.php';
    }
//    function để lấy dữ liệu theo id
    function edit(){
//        Lấy id
        $id = $_GET['id'];
        include_once 'connect/open.php';
        $sql = "SELECT * FROM classes WHERE id = '$id'";
        $classes = mysqli_query($connect, $sql);
        include_once 'connect/close.php';
        return $classes;
    }
//    function sửa dữ liệu trên db theo id
    function update(){
//        Lấy dữ liệu cần update lên db
        $id = $_POST['id'];
        $name = $_POST['name'];
        $amount = $_POST['amount'];
        include_once 'connect/open.php';
        $sql = "UPDATE classes SET name = '$name', amount = '$amount' WHERE id = '$id'";
        $classes = mysqli_query($connect, $sql);
        include_once 'connect/close.php';
    }
//    function xóa dữ liệu trên db theo id
    function destroy(){
//        Lấy id
        $id = $_GET['id'];
        include_once 'connect/open.php';
        $sql = "DELETE FROM classes WHERE id = '$id'";
        mysqli_query($connect, $sql);
        include_once 'connect/close.php';
    }

//    Kiểm tra đang thực hiện hành động gì
    switch ($action){
        case '':
            //Lấy dữ liệu từ db về
            $classes = index();
            break;
        case 'store':
            //Thêm dữ liệu lên DB
            store();
            break;
        case 'edit':
            //Lấy bản ghi theo id
            $classes = edit();
            break;
        case 'update':
            //Sửa dữ liệu trên db theo id
            update();
            break;
        case 'destroy':
//            Xóa dữ liệu trên db theo id
            destroy();
            break;
    }
?>