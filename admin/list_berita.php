<?php
include "layout/header.php";
require 'function.php';
// pagination
// $jumlahDataPerHalaman = 2;
// $jumlahData = count(query("SELECT * FROM berita"));
// $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
// $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
// $awalData = ($jumlahDataPerHalaman * $halamanAktif) -$jumlahDataPerHalaman;
// $brt = query("SELECT kategori.*,berita.* FROM berita LEFT JOIN kategori on berita.kategori = kategori.id_kategori 
// ORDER BY berita.id DESC LIMIT $awalData,$jumlahDataPerHalaman");

//tanpa halaman
// $brt = query("SELECT kategori.*,berita.* FROM berita LEFT JOIN kategori on berita.kategori = kategori.id_kategori 
// ORDER BY berita.id DESC ");
$brt = query("SELECT * FROM berita ORDER BY Id DESC");
?>
<style>
th {
    cursor: pointer;
}
</style>
<head>
    <link rel="stylesheet" href="css/admin.css">
</head>
<div class="table-semua">
    <a class="tambah-berita-link" href="tambah_berita.php">Tambah Berita</a>
    <table border="1" id="myTable">
        <thead>
            <tr>
                <th onclick="sortTable(0)">No.</th>
                <th onclick="sortTable(1)">Judul</th>
                <th onclick="sortTable(2)">Tanggal</th>
                <th onclick="sortTable(3)">Kategori</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($brt as $row) : ?>
            <tr>
                <td class="col-number"><?= $i; ?></td>
                <td class="col-1"><?= $row["judul"] ?></td>
                <td class="col-2"><?= $row["tanggal_berita"]; ?></td>
                <td class="col-3"><?= $row["kategori"]; ?></td>
                <td class="col-4"><img src="../upload/<?= $row["gambar"]; ?>" width="50" </td>
                <td>
                    <a href="edit_berita.php?id=<?= $row["id"]; ?>">Edit</a>
                    <a href="delete/delete_berita.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Delete</a>
                </td>
            </tr>
            <?php $i++ ?>
            <?php endforeach ?>
        </tbody>
    </table>
    <script>
    //sort tabel
    function sortTable(n) {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById("myTable");
    switching = true;
    //Set the sorting direction to ascending:
    dir = "asc"; 
    /*Make a loop that will continue until
    no switching has been done:*/
    while (switching) {
        //start by saying: no switching is done:
        switching = false;
        rows = table.rows;
        /*Loop through all table rows (except the
        first, which contains table headers):*/
        for (i = 1; i < (rows.length - 1); i++) {
        //start by saying there should be no switching:
        shouldSwitch = false;
        /*Get the two elements you want to compare,
        one from current row and one from the next:*/
        x = rows[i].getElementsByTagName("TD")[n];
        y = rows[i + 1].getElementsByTagName("TD")[n];
        /*check if the two rows should switch place,
        based on the direction, asc or desc:*/
        if (dir == "asc") {
            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
            //if so, mark as a switch and break the loop:
            shouldSwitch= true;
            break;
            }
        } else if (dir == "desc") {
            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
            //if so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;
            }
        }
        }
        if (shouldSwitch) {
        /*If a switch has been marked, make the switch
        and mark that a switch has been done:*/
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
        //Each time a switch is done, increase this count by 1:
        switchcount ++;      
        } else {
        /*If no switching has been done AND the direction is "asc",
        set the direction to "desc" and run the while loop again.*/
        if (switchcount == 0 && dir == "asc") {
            dir = "desc";
            switching = true;
        }
        }
    }
    }
</script>
</div> 