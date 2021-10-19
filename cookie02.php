<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cookie 02 </title>
</head>
<body>
    <?php
    if(isset($_COOKIE['username'])) {
        echo "<h1>Cookie 'username' ada. Isinya : " .$_COOKIE
        ['username']."</h1>";
    } else {
        echo "<h1>Cookie 'username' TIDAK ada.</h1>";
    }
    if(isset($_COOKIE['namalengkap'])) {
        echo "<h1>Cookie 'namalengkap' ada. Isinya : " .$_COOKIE
        ['namalengkap']."</h1>";
    } else {
        echo "<h1>Cookie 'namalengkap' TIDAK ada.</h1>";
    }

    echo "<h2>Klik <a href='cookie01.php'>di sini</a> untuk penciptaan cookie</h2>";
    ?>
</body>
</html>