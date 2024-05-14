<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai yang di-post dari form
    $nama = $_POST['nama'];
    $hobi = $_POST['hobi'];

    // Simpan nilai dalam cookie
    setcookie('nama', $nama, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
    setcookie('hobi', $hobi, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari

    // Redirect kembali ke halaman utama
    header("Location: cookie.php");
    exit();
}