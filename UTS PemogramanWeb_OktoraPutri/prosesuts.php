<?php
if (isset($_POST['Tambah'])){
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $penghutang = $_POST['penghutang'];
    $alasan = $_POST['alasan'];
        echo "<table width = 50% border = 1>
    <tr>
    <td>Jumlah</td>
    <td>:</td>
    <td>$jumlah</td>
    </tr>
    <tr>
    <td>Tanggal</td>
    <td>:</td>
    <td>$tanggal</td>
    </tr>
    <tr>
    <td>Penghutang</td>
    <td>:</td>
    <td>$penghutang</td>
    </tr>
    <tr>
    <td>Alasan</td> 
    <td>:</td>
    <td>$alasan</td>
    </tr>
    <tr>
    </table>";
}
?>
