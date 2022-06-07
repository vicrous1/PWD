<?php

include "Connect.php";

$id = $_GET['id'];
$data = mysqli_query($db, "SELECT * FROM identitas WHERE no_identitas='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Belajar PHP | Edit Data</title>
    </head>

    <body>
        <header>
            <h3>Edit Identitas</h3>
        </header>

        <form action="proses-edit.php" method="POST">

            <fieldset>
                <input type="hidden" name="no_identitas" value="<?php echo $d['no_identitas']; ?>" />
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $d['nama']; ?>" />
                </p>
                <p>
                    <label for="alamat">Alamat: </label>
                    <textarea name="alamat"><?php echo $d['alamat'] ?></textarea>
                </p>
                <p>
                    <label for="no_telp">Nomor HP: </label>
                    <textarea name="no_telp"><?php echo $d['no_telp'] ?></textarea>
                </p>
                <p>
                    <label for="jk">Jenis Kelamin: </label>
                    <?php $jk = $d['jk']; ?>
                    <label><input type="radio" name="jk" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?>> Laki-laki</label>
                    <label><input type="radio" name="jk" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?>> Perempuan</label>
                </p>
                <p>
                    <label for="kodepos">Kodepos: </label>
                    <input type="text" name="kodepos" placeholder="kodepos" value="<?php echo $d['kodepos'] ?>" />
                </p>
                <p>
                    <input type="submit" value="Simpan" name="simpan" />
                </p>

            </fieldset>


        </form>

    </body>
<?php } ?>

    </html>