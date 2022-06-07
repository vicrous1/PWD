<?php
include("Connect.php");

if (isset($_POST['simpan'])) {

    $id = $_POST['no_identitas'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $jk = $_POST['jk'];
    $kodepos = $_POST['kodepos'];

    $sql = "UPDATE identitas SET nama='$nama', alamat='$alamat', no_telp='$no_telp', jk='$jk', kodepos='$kodepos' WHERE no_identitas=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {

        header('Location: index.php');
    } else {

        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}