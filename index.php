<?php require 'function.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" >
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Image</td>
            <td>Action</td>
        </tr>
        <?php 
            $users= mysqli_query($conn,"SELECT * FROM users");
            $i = 1;
            foreach($users as $user):
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $user["name"];?></td>
            <td><img src="uploads/<?php echo $user["image"];?>" width="200"></td>
            <td>
                <a href="edituser.php?id=<?php echo $user["id"];?>">Edit</a>
                <form action="function.php" method="POST">
                    <button type="submit" name="submit" value="<?php echo $user['id'];?>">Delete</button>
                </form>
            </td>
        </tr>
        <?php 
            endforeach;
        ?>
    </table>
</body>
</html>