<?php
//function Lấy dữ liệu từ DB
    function indexStudent(){
        include_once 'connect/open.php';
        $sql = "SELECT students.*, classes.name AS class_name FROM students INNER JOIN classes ON classes.id = students.class_id";
        $students = mysqli_query($connect, $sql);
        include_once 'connect/close.php';
        return $students;
    }
    function createStudent(){
        include_once 'connect/open.php';
        $sql = "SELECT * FROM classes";
        $classes = mysqli_query($connect, $sql);
        include_once 'connect/close.php';
        return $classes;
    }
    function storeStudent(){
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $class_id = $_POST['class_id'];
        include_once 'connect/open.php';
        $sql = "INSERT INTO students(name, dob, gender, phone, email, class_id) VALUES ('$name', '$dob', '$gender', '$phone', '$email', '$class_id')";
        mysqli_query($connect, $sql);
        include_once 'connect/close.php';
    }
    function editStudent(){
        $id = $_GET['id'];
        include_once 'connect/open.php';
        $sql = "SELECT * FROM students WHERE id = '$id'";
        $students = mysqli_query($connect, $sql);
        $sqlClass = "SELECT * FROM classes";
        $classes = mysqli_query($connect, $sqlClass);
        include_once 'connect/close.php';
        $array = array();
        $array['classes'] = $classes;
        $array['students'] = $students;
        return $array;
    }
    function updateStudent(){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $class_id = $_POST['class_id'];
        include_once 'connect/open.php';
        $sql = "UPDATE students SET name = '$name', dob = '$dob', gender = '$gender', phone = '$phone', email = '$email', class_id = '$class_id' WHERE id = '$id'";
        mysqli_query($connect, $sql);
        include_once 'connect/close.php';
    }
    function destroyStudent(){
        $id = $_GET['id'];
        include_once 'connect/open.php';
        $sql = "DELETE FROM students WHERE id = '$id'";
        mysqli_query($connect, $sql);
        include_once 'connect/close.php';
    }
//    Kiểm tra hành động hiện tại
    switch ($action){
        case '':
//            Lấy dữ liệu từ DB
            $students = indexStudent();
            break;
        case 'create':
            $classes = createStudent();
            break;
        case 'store':
            storeStudent();
            break;
        case 'edit':
            $array = editStudent();
            break;
        case 'update':
            updateStudent();
            break;
        case 'destroy':
            destroyStudent();
            break;
    }
?>