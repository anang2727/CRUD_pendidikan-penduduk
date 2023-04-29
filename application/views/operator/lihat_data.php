<h2 class="text-info" style="font-family: time new roman;">ACCOUNT INFO</h2>
<?php
echo anchor('operator/post', 'Tambah Data', array('class' => 'btn btn-danger btn-sm'))
?>
<hr>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th style="text-align: center;">Nama Lengkap</th>
        <th style="text-align: center;">Username</th>
        <th style="text-align: center;">Login Terakhir</th>
        <th colspan="2" style="text-align: center;">Action</th>
    </tr>
    <?php
    $no = 1;
    foreach ($record->result() as $r) {
        echo "<tr>
            <td width='10'>$no</td>
            <td>$r->nama_lengkap</td>
            <td>$r->username</td>
            <td>$r->last_login</td>
            <td  width='20'>" . anchor('operator/edit/' . $r->operator_id, 'Edit', array('class' => 'btn btn-success btn-sm')) . "</td>
            <td  width='20'>" . anchor('operator/delete/' . $r->operator_id, 'Delete', array('class' => 'btn btn-danger btn-sm')) . "</td>
            </tr>";
        $no++;
    }
    ?>

</table>