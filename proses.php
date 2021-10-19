<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Output Data </title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] = "POST") {
        $name = $_POST['nama'];
        echo "Nama : ";
        echo $name;
        $alamat = $_POST['alamat'];
        echo"</br>";
        echo "Alamat : ";
        echo $alamat;
    }
    ?>
</body>
</html>