<h2>TAMBAH DATA DESA</h2>
<?php
echo form_open('desa/tambah');
?>
<table class="table table-bordered" border="2">
    <tr>
        <td> Nama Desa </td>
        <td><div class="col-sm-4"">
            <input type="text" name="nama_desa" placeholder="Nama Desa" class="form-control"></div>
        </td>
    </tr>
    <tr>
        <td>Nama Kecamatan</td>
        <td><div class="col-sm-4"">
            <select name="id_kec" class="form-control">
                <?php
                foreach ($rec_kec->result() as $rp) {
                    echo "<option value='$rp->id_kec'>$rp->nama_kec</option>";
                } ?>
            </select></div>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <button type="submit" name="submit" class="btn btn-primary btn-sm">
                Simpan
            </button>
            <?php echo anchor('desa', 'Back', array('class' => 'btn btn-primary btn-sm')) ?>
        </td>
    </tr>
</table>
<a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>">Beranda</a>
