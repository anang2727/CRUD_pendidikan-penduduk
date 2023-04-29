<h2>EDIT DATA DESA</h2>
<br />

<?php
echo form_open('desa/edit');
?>

<input type="hidden" value="<?php echo $record['id_desa'] ?>" name="id_desa">

<table class="table table-bordered">
    <tr>
        <td>Nama Desa</td>
        <td>
            <div class="col-sm-4"">
            <input class=" form-control" type="text" name="nama_desa" placeholder="Nama Desa" value="<?php echo $record['nama_desa'] ?>">
            </div>
        </td>
    </tr>
    <tr>
        <td>Nama Kecamatan</td>
        <td>
            <div class="col-sm-4""> <select name=" id_kec" class="form-control">
                <?php foreach ($rec_kec->result() as $rp) {
                ?>
                    <option <?php if ($record['id_kec'] == $rp->id_kec) {
                                echo 'selected';
                            } ?> value="<?php echo $rp->id_kec ?>"><?php echo $rp->nama_kec; ?></option>;
                <?php
                }
                ?>
                </select>
            </div>
        </td>
    </tr>
    <tr>

    <tr>
        <td colspan="2">
            <button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
            <?php echo anchor('desa', 'Back', array('class' => 'btn btn-primary btn-sm')) ?>
        </td>
    </tr>
</table>
<a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>">Beranda</a>

</from>