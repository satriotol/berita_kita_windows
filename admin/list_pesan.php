<?php
include "layout/header.php";
require 'function.php';
$pesan_pengirim = query("SELECT * FROM pesan_pengirim  ORDER BY `pesan_pengirim`.`tanggal_pengirim` DESC");
?>
<html>

<head>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
<div class="table-semua">
<table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Waktu</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($pesan_pengirim as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nama_pengirim"]; ?></td>
                <td><?= $row["email_pengirim"]; ?></td>
                <td><?= $row["tanggal_pengirim"]; ?></td>
                <td>
                    <a href="lihat_pesan.php?id=<?= $row["id_pesan"]; ?>">Lihat Pesan</a>
                </td>
            </tr>
            <?php $i++ ?>
            <?php endforeach ?>
        </tbody>
    </table>
    </div>
</body>

</html> 