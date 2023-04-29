<body>
<h2>TAMBAH PENDIDIKAN</h2>
    <?php
    echo form_open('pendidikan/tambah')
    ?>
    <table class="table table-bordered">
        <tr>
            <td> Nama Pendidikan</td>
            <td> <div class="col-sm-4""><input type="text" name="nama_pendidikan" placeholder="Nama Pendidikan" class="form-control"> </div></td>
        </tr>
        <tr>
            <td> Tingkat Pendidikan </td>
            <td> <div class="col-sm-4""><input type="text" name="tingkat_pendidikan" placeholder="Tingkat Pendidikan" class="form-control"> </div></td>
        </tr>

        <tr>
        <td colspan="2">
            <button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button> 
            <?php echo anchor('pendidikan','Back',array('class'=>'btn btn-primary btn-sm'))?>
        </td>
    </tr>
    </table>
    <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>">Beranda</a>
</body>
