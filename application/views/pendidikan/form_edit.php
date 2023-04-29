<body>
<h2>EDIT DATA TUJUAN</h2>
    <?php
    echo form_open('pendidikan/edit');
    ?>

    <input type="hidden" value="<?php echo $record['id_pendidikan'] ?>" name="id_pendidikan">
    <table class="table table-bordered">
        <tr>
            <td>Nama Pendidikan</td>
            <td> <div class="col-sm-4""><input class="form-control" type="text" name="nama_pendidikan" placeholder="Nama Pendidikan" value="<?php echo $record['nama_pendidikan'] ?>"></div></td>

        </tr>
        <tr>
            <td> Tingkat Pendidikan</td>
            <td><div class="col-sm-4""><input type="text" class="form-control" name="tingkat_pendidikan" placeholder="Tingkat Pendidikan" value="<?php echo $record['tingkat_pendidikan'] ?>"></div</td>
        </tr>
        <tr>
        <td colspan="2">
            <button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button> 
            <?php echo anchor('pendidikan','Back',array('class'=>'btn btn-primary btn-sm'))?>
        </td>
    </tr>

    </table>
    <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>">Beranda</a>

    </form>
</body>
