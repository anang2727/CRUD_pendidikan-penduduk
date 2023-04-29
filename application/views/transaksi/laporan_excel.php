
<table border="1">
    <tr><th>No</th><th>Tanggal Transaksi</th><th>Operator</th><th>Total Transaksi</th></tr>
    <?php
    $no=1;
    $total=0;
    foreach ($record->result() as $r)
    {
        echo "<tr>
            <td width='10'>$no</td>
            <td width='160'>$r->nama_desa</td>
            <td>$r->nama_penduduk</td>
            <td>$r->nama_penduduk</td>
            <td>$r->nama_pendidikan</td>
            <td>$r->tgl_tercatat</td>
            </tr>";
        $no++;
    }
    ?>
</table>