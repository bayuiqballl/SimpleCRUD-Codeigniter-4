<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h2>Data Mahasiswa</h2>

    <p>
        <button type="button" onclick="window.location='<?php echo site_url('mahasiswa/formtambah') ?>' ">
            Tambah Data
        </button>
    </p>

    <table border="1">
        <thead>
            <tr>
                <th>nomer</th>
                <th>nama</th>
                <th>nrp</th>
                <th>email</th>
                <th>jurusan</th>
                <th>aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $nomor = 0;
            foreach ($tampildata as $row) :
                $nomor++
            ?>
                <tr>
                    <th><?= $nomor; ?></th>
                    <td><?= $row->nama ?></td>
                    <td><?= $row->nrp ?></td>
                    <td><?= $row->email ?></td>
                    <td><?= $row->jurusan ?></td>
                    <td>
                        <button type="button" onclick="hapus('<?= $row->id ?>')">
                            Hapus
                        </button>

                        <button type="button" onclick="window.location='<?php echo site_url('mahasiswa/formedit/' . $row->id) ?>' ">
                            Edit
                        </button>

                    </td>
                </tr>


            <?php endforeach ?>
        </tbody>


    </table>
    <script>
        function hapus(id) {
            pesan = confirm('Yakin hapus?');

            if (pesan) {
                window.location.href = ("<?= site_url('mahasiswa/hapus/') ?>") + id;
            } else return false;
        }
    </script>
</body>

</html>