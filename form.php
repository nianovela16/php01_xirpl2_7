<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form </title>
</head>
<body>
<fieldset id="ini">
    <label for="ini"><h2>Input Data</h2></label>
    <form method="GET" action="prosesform.php">
        <p>Nama : <input type="text" name="nama"></p>
        <p>E-Mail : <input type="text" name="email"></p>
        <p><input type="submit" value="Proses Data" name="submit"></p>
    </form>
    </fieldset>