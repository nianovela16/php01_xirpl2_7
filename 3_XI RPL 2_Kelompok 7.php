<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Latihan Array </title>
</head>
<body>
    <?php
    $nama = [
        [
            'Nama' => "Satria",
            'Kelas' => "RPL 1",
        ],
        [
            'Nama' => "Arsyi",
            'Kelas' => "RPL 2",
        ],
        [
            'Nama' => "Dhika",
            'Kelas' => "RPL 3",
        ],
        [
            'Nama' => "Evan",
            'Kelas' => "RPL 4",
        ],
        [
            'Nama' => "Fabian",
            'Kelas' => "RPL 5",
        ],
        [
            'Nama' => "Irfan",
            'Kelas' => "RPL 6",
        ]
    ]
    ?>

    <?php
    $Hasil = array_slice($nama,0,2);
    echo "<pre>";
    print_r($Hasil);
    echo "</pre>";
    ?>
</body>
</html>
