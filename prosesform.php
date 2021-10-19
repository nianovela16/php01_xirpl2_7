<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Proses Form </title>
</head>
<body>
    <?php
    if (isset($_GET['nama']) AND isset($_GET['email']))
    {
        $nama = $_GET['nama'];
        $email = $_GET['email'];
    }
    else
    {
        echo "Maaf, anda harus mengakses halaman ini dari form.html<br><br>";
    }
    if (!empty($nama))
    {
        echo "Nama : $nama <br /> Email : $email";
    }
    else
    {
        die("Maaf, anda harus mengisi nama");
    }
    ?>
</body>
</html>