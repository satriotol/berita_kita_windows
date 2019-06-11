<?php
include "layout/header.php";
require 'function.php';
$ktgr = query("SELECT * FROM kategori ORDER BY id_kategori ASC");
?>
<link rel="stylesheet" href="css/admin.css">
<div class="table-semua">
    <a class="tambah-berita-link" href="tambah_kategori.php">Tambah Kategori</a>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $i=1; ?>
        <?php foreach($ktgr as $row):?>
            <tr>
                <td><?= $i; ?></td>
                <td><?=$row["nama_kategori"];?></td>
                <td>
                    <a href="edit_kategori.php?id=<?=$row["id_kategori"];?>">Edit</a>
                    <a href="delete/delete_kategori.php?id=<?=$row["id_kategori"];?>"onclick="return confirm('yakin?');">Delete</a>
                </td>
            </tr>
        <?php $i++ ?>
        <?php endforeach ?>
        </tbody>
    </table>
</div>
