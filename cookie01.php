<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cookie 01 </title>
</head>
<body>
    <?php
    $value = 'achmatim';
    $value2 = 'Achmad Solichin';

    setcookie("username", $value);
    setcookie("namalengkap", $value2, time()+3600);

    echo "<h1>Ini halaman pengesetan cookie</h1>";

    echo "<h2>Klik <a href='cookie02.php'>di sini</a> untuk pemeriksaan cookie</h2>";
    ?>
</body>
</html>