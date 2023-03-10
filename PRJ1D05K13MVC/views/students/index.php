<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student list</title>
</head>
<body>
    <form method="post" action="index.php?controller=student">
        Search: <input type="text" name="search" value="<?= $array['search'] ?>"> <button>search</button>
    </form>
    <a href="index.php?controller=student&action=create">Add a student</a>
    <table border="1px" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Birthday</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Class</th>
            <th></th>
            <th></th>
        </tr>
        <?php
            foreach ($array['students'] as $student){
        ?>
            <tr>
                <td>
                    <?= $student['id'] ?>
                </td>
                <td>
                    <?= $student['name'] ?>
                </td>
                <td>
                    <?= $student['dob'] ?>
                </td>
                <td>
                    <?php
                        if($student['gender'] == 0){
                            echo 'Female';
                        } elseif ($student['gender'] == 1){
                            echo 'Male';
                        }
                    ?>
                </td>
                <td>
                    <?= $student['phone'] ?>
                </td>
                <td>
                    <?= $student['email'] ?>
                </td>
                <td>
                    <?= $student['class_name'] ?>
                </td>
                <td>
                    <a href="index.php?controller=student&action=edit&id=<?= $student['id'] ?>">Edit</a>
                </td>
                <td>
                    <a href="index.php?controller=student&action=destroy&id=<?= $student['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
    <?php
        for($i = 1; $i <= $array['page']; $i++){
    ?>
        <form style="display: inline-block" method="post" action="index.php?controller=student">
            <input type="hidden" name="search" value="<?= $array['search'] ?>">
            <input type="hidden" name="page" value="<?= $i ?>">
            <button>
                <?= $i ?>
            </button>
        </form>
    <?php
        }
    ?>
</body>
</html>