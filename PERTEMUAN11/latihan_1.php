
<?php
//fungsi perulangan foreach().

$mahasiswa = ["Joni", "123456", "sistem informasi", "dyan@gmail.com"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1> Daftar mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
            <?php endforeach; ?>

        </ul>

        </body>
        </html>
