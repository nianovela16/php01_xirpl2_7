<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Session 01 </title>
</head>
<body>
    <?php
    session_start();
    $_SESSION['nama'] = "Achmad Solichin";
    echo "<a href='session02.php'>Menuju ke halaman kedua</a>";
    ?>
</body>
</html>