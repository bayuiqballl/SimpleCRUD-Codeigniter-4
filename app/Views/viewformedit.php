<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Mahasiswa</title>
</head>

<body>
    <h2>Form edit Mahasiswa</h2>
    <p>
        <button type="button" onclick="window.location='<?php echo site_url('mahasiswa/index') ?>' ">
            Kembali
        </button>
    </p>
    <p>
        <?= form_open('mahasiswa/updatedata') ?>
        <table>
            <input type="hidden" name="id" maxlength="50" autofocus readonly value="<?= $id ?>">
            <tr>
                <td>NAMA : </td>
                <td>
                    <input type="text" name="nama" maxlength="50" value="<?= $nama ?>">
                </td>
            </tr>
            <tr>
                <td>NRP : </td>
                <td>
                    <input type="text" name="nrp" maxlength="7" value="<?= $nrp ?>">
                </td>
            </tr>
            <tr>
                <td>EMAIL : </td>
                <td>
                    <input type="email" name="email" maxlength="20" value="<?= $email ?>">
                </td>
            </tr>
            <tr>
                <td>JURUSAN : </td>
                <td>
                    <input type="text" name="jurusan" maxlength="50" value="<?= $jurusan ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Update Data">
                </td>
            </tr>
        </table>
        <?= form_close(); ?>
    </p>
</body>

</html>