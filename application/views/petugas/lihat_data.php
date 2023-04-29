<body>
    <h2>DATA PETUGAS</h2>
    <?php echo anchor('petugas/tambah', 'Tambah Data Petugas', array('class' => 'btn btn-info btn-sm')) ?>
    <hr>
    <table class="table table-bordered" border="2" style="text-align: center;">
        <tr>
            <th width="30">No</th>
            <th style="text-align: center;">Nama Desa</th>
            <th style="text-align: center;">Nama Petugas</th>
            <th style="text-align: center;">Username</th>
            <th style="text-align: center;">Last Login</th>
            <th style="text-align: center;">Tgl Mulai</th>
            <th style="text-align: center;">Tgl Berakhir</th>
            <th style="text-align: center;">Sebagai</th>
            <th style="text-align: center;" colspan="2">Action</th>
        </tr>
        <?php $no = $this->uri->segment(3) ? $this->uri->segment(3) + 1 : 1;
        foreach ($record->result() as $r) { ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $r->nama_desa; ?></td>
                <td><?php echo $r->nama_penduduk; ?></td>
                <td><?php echo $r->username; ?></td>
                <td><?php echo $r->last_login; ?></td>
                <td><?php echo $r->tgl_mulai; ?></td>
                <td><?php echo $r->tgl_berakhir; ?></td>
                <td><?php echo $r->sebagai; ?></td>
                <td width="10"><a class="btn btn-success btn-sm" href="<?php echo base_url() . 'index.php/petugas/edit/' . $r->id_petugas ?>">Edit</a></td>
                <td width="10"><a class="btn btn-danger btn-sm" href="<?php echo base_url() . 'index.php/petugas/delete/' . $r->id_petugas ?>">Delete</a></td>
            </tr>
        <?php $no++;
        } ?>
    </table>

    <?php
    echo $paging;
    ?>
</body>