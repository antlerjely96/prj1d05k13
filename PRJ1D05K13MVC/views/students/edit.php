<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a student</title>
</head>
<body>
    <?php
        foreach ($array['students'] as $student){
    ?>
        <form method="post" action="index.php?controller=student&action=update">
            <input type="hidden" name="id" value="<?= $student['id'] ?>">
            Name: <input type="text" name="name" value="<?= $student['name'] ?>"><br>
            Birthday: <input type="date" name="dob" value="<?= $student['dob'] ?>"><br>
            Gender: <input type="radio" value="0" name="gender" checked> Female
                    <input type="radio" value="1" name="gender"
                        <?php
                            if($student['gender'] == 1){
                                echo 'checked';
                            }
                        ?>
                    > Male <br>
            Phone: <input type="text" name="phone" value="<?= $student['phone'] ?>"><br>
            Email: <input type="email" name="email" value="<?= $student['email'] ?>"><br>
            Class: <select name="class_id">
                <option value=""> - Choose - </option>
                <?php
                    foreach ($array['classes'] as $class){
                ?>
                    <option value="<?= $class['id'] ?>"
                        <?php
                            if($class['id'] == $student['class_id']){
                                echo 'selected';
                            }
                        ?>
                    >
                        <?= $class['name'] ?>
                    </option>
                <?php
                    }
                ?>
            </select><br>
            <button>Update</button>
        </form>
    <?php
        }
    ?>
</body>
</html>