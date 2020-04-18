<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Mahasiswa</title>
</head>

<body>
    <h2>Form Mahasiswa</h2>
    <p>
        <button type="button" onclick="window.location='<?php echo site_url('mahasiswa/index') ?>' ">
            Kembali
        </button>
    </p>
    <p>
        <?= form_open('mahasiswa/simpandata') ?>
        <table>
            <tr>
                <td>NAMA : </td>
                <td>
                    <input type="text" name="nama" maxlength="50" autofocus>
                </td>
            </tr>
            <tr>
                <td>NRP : </td>
                <td>
                    <input type="text" name="nrp" maxlength="7" autofocus>
                </td>
            </tr>
            <tr>
                <td>EMAIL : </td>
                <td>
                    <input type="email" name="email" maxlength="20" autofocus>
                </td>
            </tr>
            <tr>
                <td>JURUSAN : </td>
                <td>
                    <input type="text" name="jurusan" maxlength="50" autofocus>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Simpan Data">
                </td>
            </tr>
        </table>
        <?= form_close(); ?>
    </p>
</body>

</html>