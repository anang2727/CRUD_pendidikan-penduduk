<body>
    <h2>TAMBAH KECAMATAN</h2>
    <?php
    echo form_open('kec/tambah');
    ?>
    <table class="table table-bordered">
        <tr>
            <td> Nama Kecamatan </td>
            <td> <input type="text" name="nama_kec" placeholder="Nama Kecamatan" class="form-control"> </td>
        </tr>

        <tr>
            <td colspan="2">
            <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button>
            <?php echo anchor('kec', 'back', array('class' => 'btn btn-primary btn-sm')) ?>
            </td>
        </tr>
    </table>
    <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>">Beranda</a>
</body>
