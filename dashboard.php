$jumlah = [];
$total = [];

for ($i = 0; $i < count($kode_barang); $i++) {
    $jumlah[$i] = rand(1,5);     // pembelian acak 1–5
    $total[$i] = $jumlah[$i] * $harga_barang[$i];
}

<h3>Daftar Pembelian (Random)</h3>

<table border="1" cellpadding="6">
<tr>
    <th>Kode</th>
    <th>Nama Barang</th>
    <th>Harga</th>
    <th>Jumlah</th>
    <th>Total</th>
</tr>

<?php for ($i = 0; $i < count($kode_barang); $i++) { ?>
<tr>
    <td><?= $kode_barang[$i] ?></td>
    <td><?= $nama_barang[$i] ?></td>
    <td><?= $harga_barang[$i] ?></td>
    <td><?= $jumlah[$i] ?></td>
    <td><?= $total[$i] ?></td>
</tr>
<?php } ?>
</table>