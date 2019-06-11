<?php
include "layout/header.php";
require 'function.php';

$alumni = query("SELECT * FROM alumni ORDER BY id_alumni DESC");

?>
<link rel="stylesheet" href="css/admin.css">
<div class="table-semua">
<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Alumni</th>
            <th>E-mail</th>
            <th>Alamat Sekarang</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php $i=1; ?>
    <?php foreach($alumni as $row):?>
        <tr>
            <td><?= $i; ?></td>
            <td><?=$row["nama_lengkap"];?></td>
            <td><?=$row["email"];?></td>
            <td><?=$row["alamat_sekarang"];?></td>
            <td>
                <a href="lihat_alumni.php?id=<?=$row["id_alumni"];?>">Lihat</a>            
            </td>
        </tr>
    <?php $i++ ?>
    <?php endforeach ?>
    </tbody>
</table>
</div>