<?php
// Array dengan nama dan umur
$data = array(
    array("nama" => "Vini", "umur" => 25),
    array("nama" => "Rodrygo", "umur" => 30),
    array("nama" => "Kroos", "umur" => 35),
    array("nama" => "Zoro", "umur" => 20),
    array("nama" => "Sanji", "umur" => 28),
    array("nama" => "Luffy", "umur" => 32),
    array("nama" => "Chopper", "umur" => 27),
    array("nama" => "Robin", "umur" => 22),
    array("nama" => "Rudiger", "umur" => 40),
    array("nama" => "Mbappe", "umur" => 26),
    array("nama" => "Kizaru", "umur" => 29),
    array("nama" => "Aceng", "umur" => 33),
    array("nama" => "Sabo", "umur" => 24),
    array("nama" => "Lancelot", "umur" => 31),
    array("nama" => "Franco", "umur" => 37)
);

// Konversi array menjadi JSON
$json_data = json_encode($data, JSON_PRETTY_PRINT);

// Tampilkan JSON
echo $json_data;