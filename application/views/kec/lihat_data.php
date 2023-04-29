<body>
    <h2>DATA KECAMATAN</h2>
    <?php echo anchor('kec/tambah', 'Tambah Data Kecamatan', array('class' => 'btn btn-info btn-sm')); ?>

<!--  
    <div class="row-mt-3">
        <div class="col-md-6"></div>
    <form  action="" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari" name="keyword">
            <button class="btn btn-info" type="submit">Cari</button>
        </div>
    </form>
    </div> -->

    &emsp;
    <div class="navbar-form navbar-right">
        <?php echo form_open('kec/index') ?>
        <input type="text" name="keyword" class="form-control" placeholder="Search">
        <button type="submit" class="btn btn-success" name="submit">Cari</button>
        <?php echo form_close() ?>
    </div>
    <table class="table table-bordered">
        <tr>
            <th style="text-align: center;" width="40">No</th>
            <th style="text-align: center;">Nama Kecamatan</th>
            <th style="text-align: center;" colspan="2">Action</th>
        </tr>
        <?php
        $no = $this->uri->segment(3) ? $this->uri->segment(3) + 1 : 1;
        foreach ($record->result() as $r) {
            echo "<tr>
        <td>$no</td>
        <td>$r->nama_kec</td>
        <td width='20'>" . anchor('kec/edit/' . $r->id_kec, 'Edit', array('class' => 'btn btn-success btn-sm')) . "</td>
        <td width='20'>" . anchor('kec/delete/' . $r->id_kec, 'Delete', array('class' => 'btn btn-danger btn-sm')) . "</td>
        <tr>";
            $no++;
        } ?>
    </table>
    <?php
echo $paging;
?>
<br />
</body>
<a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>">Beranda</a>
<br />
