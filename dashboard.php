$grandtotal = 0;
for ($i = 0; $i < count($total); $i++) {
    $grandtotal += $total[$i];
}

<h3>Total Belanja</h3>
<p>Subtotal : Rp <?= number_format($grandtotal,0,',','.') ?></p>