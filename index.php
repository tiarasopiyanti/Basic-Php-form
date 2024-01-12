<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Selamat Datang!</title>
    </head>
    <body>
        <h1>SELAMAT DATANG!</h1>
        <h2>Anda telah terdaftar sebagai: </h2>
        <?php 
        $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $namaLengkap = $firstName . " " . $lastName;
            echo "Nama Lengkap: $namaLengkap"; ?>
            
        <br><?php $gender = $_POST["gender"];
            echo "Jenis Kelamin: $gender"; ?>

        <br><?php $nationality = $_POST["nationality"];
            echo "Kewarganegaraan: $nationality"; ?>

        <br><?php $bahasa = $_POST["languange"];
            echo "Bahasa yang dikuasai: " . implode(", ", $bahasa); ?>

        <br><?php $bio = $_POST["bio"];
            echo "Bio Anda: $bio"; ?>
        <h4>Terima kasih telah mengunjungi website ini. Sampai jumpa!</h4>
    </body>
</html>