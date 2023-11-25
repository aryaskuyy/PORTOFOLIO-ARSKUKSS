<?php
    $nama = "Aryaskuyy"; // Ganti dengan nama Anda
    $jenis = "L"; // Ganti dengan jenis kelamin Anda, bisa "L" untuk Laki-laki atau "P" untuk Perempuan
    $nim = "220030633"; // Ganti dengan NIM Anda

    // Menentukan jenis kelamin menggunakan percabangan
    if ($jenis == "L") {
        $jenis_kelamin = "Laki-laki";
    } elseif ($jenis == "P") {
        $jenis_kelamin = "Perempuan";
    } else {
        $jenis_kelamin = "Tidak diketahui";
    }

    // Menampilkan Nama, Jenis Kelamin, dan NIM
    echo "Nama: $nama <br>";
    echo "Jenis Kelamin: $jenis_kelamin <br>";
    echo "NIM : $nim <br>";

    // Menampilkan 10 NIM selanjutnya menggunakan perulangan
    echo "";
    for ($i = 1; $i <= 10; $i++) {
        $nim_selanjutnya = $nim + $i;
        echo "NIM : $nim_selanjutnya <br>";
    }
?>
