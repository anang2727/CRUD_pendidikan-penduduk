<body>
    <h2>DATA TERCATAT</h2>
    <?php echo anchor('tercatat/tambah', 'Tambah Data Pencatatan', array('class' => 'btn btn-info btn-sm')) ?>
    &emsp;
    <div class="navbar-form navbar-right">
        <?php echo form_open('desa/search') ?>
        <input type="text" name="keyword" class="form-control" placeholder="Search">
        <button type="submit" class="btn btn-success">Cari</button>
        <?php echo form_close() ?>
    </div>
    <br />
    <br />
    <table class="table table-bordered" border="2">
        <tr>
            <th>No</th>
            <th style="text-align: center;">Nama Desa</th>
            <th style="text-align: center;">Nama Penduduk</th>
            <th style="text-align: center;">Petugas</th>
            <th style="text-align: center;">Nama Pendidikan</th>
            <th style="text-align: center;">Tgl Tercatat</th>
            <th colspan="2" style="text-align: center;">Action</th>
        </tr>
        <?php $no = $this->uri->segment(3) ? $this->uri->segment(3) + 1 : 1;
        foreach ($record->result() as $r) { ?>
            <tr>
                <td width="30"><?php echo $no; ?></td>
                <td><?php echo $r->nama_desa; ?></td>
                <td><?php echo $r->nama_penduduk; ?> </td>
                <td><?php echo $r->nama_penduduk; ?> </td>
                <td><?php echo $r->nama_pendidikan; ?></td>
                <td><?php echo $r->tgl_tercatat; ?></td>

                <td width='10'><a class="btn btn-success btn-sm" href="<?php echo base_url() . 'index.php/tercatat/edit/' . $r->id_pencatatan ?>">Edit</a></td>
                <td width='10'><a class="btn btn-danger btn-sm" href="<?php echo base_url() . 'index.php/tercatat/delete/' . $r->id_pencatatan ?>">Delete</a></td>
            </tr>
        <?php $no++;
        } ?>
    </table>

    <?php
    echo $paging;
    ?>
    <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>">Beranda</a>
</body>