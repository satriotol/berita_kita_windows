<?php
include "layout/header.php";
require 'function.php';
$slide_gbr = query("SELECT * FROM slide");
?>
<link rel="stylesheet" href="css/admin.css">
<div class="table-semua">
<!-- <a href="tambah_slide.php">Tambah Slide</a> -->
<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>Judul Utama</th>
            <th>Sub Judul</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php $i=1; ?>
    <?php foreach($slide_gbr as $row):?>
        <tr>
            <td><?= $i; ?></td>
            <td><?=$row["main_judul"];?></td>
            <td><?=$row["sub_judul"];?></td>
            <td><img src="../upload/slide_semnas<?=$row["slide_gambar"]; ?>" width="50"></td>
            <td>
                <a href="edit_slide.php?id=<?=$row["id_slide"];?>">Edit</a>
                <!-- <a href="delete/delete_slide.php?id=<?=$row["id_slide"];?>"onclick="return confirm('yakin?');">Delete</a> -->
            </td>
        </tr>
    <?php $i++ ?>
    <?php endforeach ?>
    </tbody>
</table>
</div>