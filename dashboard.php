$diskon = 0;

if ($grandtotal < 50000) {
    $diskon = 0.05 * $grandtotal;
} elseif ($grandtotal <= 100000) {
    $diskon = 0.10 * $grandtotal;
} else {
    $diskon = 0.15 * $grandtotal;
}

$total_bayar = $grandtotal - $diskon;

<h3>Diskon Pembelian</h3>
<p>Diskon: Rp <?= number_format($diskon,0,',','.') ?></p>

<h3>Total Bayar Setelah Diskon</h3>
<p><b>Rp <?= number_format($total_bayar,0,',','.') ?></b></p>