<body>
<h2>EDIT DATA KECAMATAN</h3>
<?php
echo form_open('kec/edit');
?>

<input type="hidden" value="<?php echo $record['id_kec'] ?>" name="id_kec">

<table class="table table-bordered">
    <tr>
        <td> Nama Kecamatan</td>
        <td> <div class="col-sm-4""> <input class="form-control" type="text" name="nama_kec"
                 placeholder="Nama Kecamatan" value="<?php echo $record['nama_kec'] ?>"></div></td>

    </tr>
    <tr>
        <td colspan="2">
        <button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button> 
            <?php echo anchor('kec','Back',array('class'=>'btn btn-primary btn-sm'))?>

        </td>
    </tr>
</table>
<a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>">Beranda</a>
</form>
</body>
