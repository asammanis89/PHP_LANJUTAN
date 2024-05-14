<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Komentar</title>
</head>
<body>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Nama : <input type="text" name="nama"> <br>
    E-mail : <input type="text" name="email"> <br>
    Komentar : <textarea name="komentar" rows="5" cols="40"></textarea> <br>
    <input type="submit" value="Simpan">
    <input type="reset" value="Bersihkan">
  </form>
  <?php
  $nama = $email = $komentar = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $komentar = $_POST["komentar"];

    echo("<h2>Terima Kasih!</h2>");
    echo("<p>Nama : " . $nama . "</p>");
    echo("<p>Email : " . $email . "</p>");
    echo("<p>Komentar :" . $komentar . "</p>");
  }
  ?>
</body>
</html>