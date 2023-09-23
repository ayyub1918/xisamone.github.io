<?php
date_default_timezone_set("Asia/Bangkok")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Kehadiran</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logopanolly.png" type="image/x-icon">
</head>
<body>
    <div class="header">
        
    </div>
    <form method="post" action="proses.php">
        <div class="container">
            <h2>Registrasi Kehadiran</h2>
            <div class="text-input">
                <label>Nama Lengkap</label><br>
                <input type="text" name="nama" id="" >
            </div>
            <div class="text-input1">
                <label>Jurusan</label><br>
                <input type="text" name="jurusan" id="" >
            </div>
            <div class="label-r">
                <label for="">Jenis Kelamin</label>
            </div>
            <div class="radio-g">
                <input type="radio" id="Gender" name="jenis_kelamin" value="Wanita">
                <label for="Wanita">Wanita</label><br>
            </div>
            <div class="radio-g1">
                <input type="radio" id="Gender" name="jenis_kelamin" value="Laki-Laki">
                <label for="Laki-Laki">Laki-Laki</label><br>
            </div>
            <div class="submit-btn">
                <button type="submit" name="submit" value = <?php echo date("h:i:sa"); ?> >Register</button>
            </div>
        </div>
    </form>
</body>
</html>