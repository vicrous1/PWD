<?php
session_start();
if (isset($SESSION['username'])) {
    echo "Selamat Datang" . $_SESSION['username'];
    echo "<a href='logout.php'>logout</a>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP - Tampilkan Data Identitas</title>
</head>

<body>

    <a href="tambah.php">+ TAMBAH IDENTITAS</a>
    <br />
    <a href="login.php">LOGIN</a>
    <br />
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nomor Identitas</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomor HP</th>
            <th>Jenis Kelamin</th>
            <th>Kodepos</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'Connect.php';
        $no = 1;
        $data = mysqli_query($db, "SELECT * FROM identitas");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['no_identitas']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['no_telp']; ?></td>
                <td><?php echo $d['jk']; ?></td>
                <td><?php echo $d['kodepos']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['no_identitas']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['no_identitas']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>