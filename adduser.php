<?php require 'function.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add user</title>
</head>
<body>
    <form action="function.php" method="POST" enctype="multipart/form-data">
        Name :
        <input type="text" name="name" required><br>
        Image :
        <input type="file" name="file" required><br>
        <button type="submit" name="submit" value="add">Add</button>
    </form>
    <br>
    <a href="index.php">Index Page</a>
</body>
</html>