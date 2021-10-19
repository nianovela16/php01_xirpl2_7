<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Passing Variables </title>
</head>
<body>
    <?php
        if (isset($_GET['v1']))
        {
            echo $_GET['v1'];
        }
        echo "<br />";
        if (isset($_GET['v2']))
        {
            echo $_GET['v2'];
        }
    ?>

    <fieldset id="ini">
    <label for="ini">DATA</label>
    <form method="POST" action="proses.php">
        <p>Nama : <input type="text" name="nama"></p>
        <p>Alamat : <input type="text" name="alamat"></p>
        <p><input type="submit" value="Proses" name="submit"></p>
    </form>
    </fieldset>
</body>
</html>