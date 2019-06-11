<?php
include "layout/header.php";
require 'function.php';
$video = query("SELECT * FROM video");
?>
<link rel="stylesheet" href="css/admin.css">
<div class="table-semua">
<a class="tambah-berita-link" href="tambah_video.php">Tambah Video</a>
<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Link</th>
            <th>Video</th>
        </tr>
    </thead>
    <tbody>
    <?php $i=1; ?>
    <?php foreach($video as $row):?>
        <tr>
            <td><?= $i; ?></td>
            <td><?=$row["nama_video"];?></td>
            <td><?=$row["link_video"];?></td>
            <td>
                <a href="edit_video.php?id=<?=$row["id_video"];?>">Edit</a>
                <a href="delete/delete_video.php?id=<?=$row["id_video"];?>"onclick="return confirm('yakin?');">Delete</a>
            </td>
        </tr>
    <?php $i++ ?>
    <?php endforeach ?>
    </tbody>
</table>
</div>
