<?php

include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $kelas_id = $_POST['kelas_id'];

    $query = "INSERT INTO mahasiswa (nama_lengkap , alamat , kelas_id) VALUES
     ('$nama_lengkap' , '$alamat' , '$kelas_id')";

    $tambahData = $conn->query($query);

    if ($tambahData) {
        header("Location: index.php");
        die();
    }
}