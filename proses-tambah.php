<?php
include("Connect.php");

if (isset($_POST['daftar'])) {

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $jk = $_POST['jk'];
    $kodepos = $_POST['kodepos'];

    mysqli_query($db, "INSERT INTO identitas VALUES
    ('','$nama', '$alamat', '$no_telp', '$jk', '$kodepos')");

    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
}