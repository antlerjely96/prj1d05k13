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
    <form method="post" action="index.php?controller=student&action=store">
        Name: <input type="text" name="name"><br>
        Birthday: <input type="date" name="dob"><br>
        Gender: <input type="radio" value="0" name="gender"> Female
                <input type="radio" value="1" name="gender"> Male<br>
        Phone: <input type="text" name="phone"><br>
        Email: <input type="email" name="email"><br>
        Class: <select name="class_id">
            <option value=""> - Choose - </option>
            <?php
                foreach ($classes as $class){
            ?>
                <option value="<?= $class['id'] ?>">
                    <?= $class['name'] ?>
                </option>
            <?php
                }
            ?>
        </select><br>
        <button>Add</button>
    </form>
</body>
</html>