<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Proses Pendaftaran</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $email = $_POST["email"];
        $tempat_lahir = $_POST["tempat_lahir"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $alamat = $_POST["alamat"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
    ?>
    <h2>Detail Pendaftaran</h2>
    <p>Selamat Datang <b><?php echo $nama; ?></b></p>
    <p>NIM: <?php echo $nim; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>Tempat, Tanggal Lahir: <?php echo $tempat_lahir . ", " . $tanggal_lahir; ?></p>
    <p>Alamat: <?php echo $alamat; ?></p>
    <p>Jenis Kelamin: <?php echo $jenis_kelamin; ?></p>
    <?php
    } else {
        echo "<p>Maaf, tidak ada data yang dikirim.</p>";
    }
    ?>
</body>
</html>