<body>
    <h2>TAMBAH DATA PENDUDUK</h2>
    <?php
    echo form_open('penduduk/tambah');
    ?>
    <table class="table table-bordered">
        <tr>
            <td> Nama Penduduk </td>
            <td> <input type="text" name="nama_penduduk" placeholder="Nama Penduduk" class="form-control"> </td>
        </tr>
        <tr>
            <td> Nomor KK </td>
            <td> <input type="text" name="no_kk" placeholder="Nomor KK" class="form-control"> </td>
        </tr>
        <tr>
            <td> Nik </td>
            <td> <input type="text" name="nik" placeholder="Nomor induk Kependudukan" class="form-control"> </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <Select type="text" name="jenis_kelamin" class="form-control">
                    <option value="pria">Pria</option>
                    <option value="wanita">Wanita</option>
                </select>
            </td>
        </tr>
        <tr>
            <td> Tgl Lahir </td>
            <td> <input type="date" name="tgl_lahir" placeholder="Tgl Lahir" class="form-control"> </td>
        </tr>
        <tr>
            <td> Tpt Lahir </td>
            <td> <input type="text" name="tpt_lahir" placeholder="Tpt Lahir" class="form-control"> </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" name="submit" class="btn btn-primary btn-sm">
                    Simpan
                </button>
                <?php echo anchor('penduduk', 'back', array('class' => 'btn btn-primary btn-sm')) ?>
            </td>
        </tr>
    </table>
    <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>">Beranda</a>
</body>