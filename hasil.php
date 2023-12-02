<!DOCTYPE html>
<html>

<head>
    <title>Hasil Input Data Diri</title>
</head>

<body>
    <h1>Hasil Input Data Diri</h1>
    <p>Nama:
        <?php echo $_POST['nama']; ?>
    </p>
    <p>Agama:
        <?php echo $_POST['agama']; ?>
    </p>
    <p>Jabatan:
        <?php echo $_POST['jabatan']; ?>
    </p>
    <p>Status Menikah:
        <?php echo $_POST['status_menikah']; ?>
    </p>

    <?php
    if ($_POST['status_menikah'] == 'sudah') {
        echo "<p>Jumlah Anak: " . $_POST['jumlah_anak'] . "</p>";
    }
    ?>

    <a href="index.html">Kembali</a>
</body>

</html>
