<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Selamat Datang!</title>
    </head>
    <body>
        <h1>SELAMAT DATANG!</h1>
        <h3>Anda telah terdaftar sebagai: </h3>

        <?php 
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $namaLengkap = $firstName . " " . $lastName;
            echo "<p>Nama Lengkap: $namaLengkap</p>"; 
        ?>
            
        <?php 
            $gender = $_POST["gender"];
            echo "<p>Jenis Kelamin: $gender</p>"; 
        ?>

        <?php 
            $nationality = $_POST["nationality"];
            echo "<p>Kewarganegaraan: $nationality</p>"; 
        ?>

        <?php 
            $bahasa = $_POST["language"];
            echo "<p>Bahasa yang dikuasai: " . implode(", ", $bahasa) . "</p>"; 
        ?>

        <?php 
            $bio = $_POST["bio"];
            echo "<p>Bio Anda: $bio</p>"; 
        ?>
    </body>
</html>