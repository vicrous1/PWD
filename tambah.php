<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP | Tambah Data Identitas</title>
</head>

<body>
    <header>
        <h3>Tambah Identitas</h3>
    </header>
    <form action="proses-tambah.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"></textarea>
            </p>
            <p>
                <label for="no_telp">Nomor HP: </label>
                <textarea name="no_telp"></textarea>
            </p>
            <p>
                <label for="jk">Jenis Kelamin: </label>
                <label><input type="radio" name="jk" value="laki-laki"> Laki-laki</label>
                <label><input type="radio" name="jk" value="perempuan"> Perempuan</label>
            </p>
            <p>
                <label for="kodepos">Kodepos: </label>
                <input type="text" name="kodepos" placeholder="kodepos" />
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>
        </fieldset>
    </form>
</body>
</html>