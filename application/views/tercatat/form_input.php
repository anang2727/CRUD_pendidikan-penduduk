<body>
    <h2>TAMBAH DATA PETUGAS</h2>
    <?php
    echo form_open('tercatat/tambah');
    ?>
    <table class="table tableborder">
        <tr>
            <td width='30'>Nama Desa</td>
            <td>
                <div class="col-sm-4"">
            <select name=" id_desa" class="form-control">
                    <?php
                    foreach ($rec_desa->result() as $rp) {
                        echo "<option value='$rp->id_desa'>$rp->nama_desa</option>";
                    } ?>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td>Nama Penduduk</td>
            <td>
                <div class="col-sm-4"">
            <select name=" id_penduduk" class="form-control">
                    <?php
                    foreach ($rec_penduduk->result() as $rp) {
                        echo "<option value='$rp->id_penduduk'>$rp->nama_penduduk</option>";
                    } ?>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td>Petugas</td>
            <td>
                <div class="col-sm-4"">
            <select name=" id_petugas" class="form-control">
                    <?php
                    foreach ($rec_petugas->result() as $rp) {
                        echo "<option value='$rp->id_petugas'>$rp->nama_penduduk ($rp->nama_desa)</option>";
                    } ?>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td>Nama Pendidikan</td>
            <td>
                <div class="col-sm-4"">
            <select name=" id_pendidikan" class="form-control">
                    <?php
                    foreach ($rec_pendidikan->result() as $rp) {
                        echo "<option value='$rp->id_pendidikan'>$rp->nama_pendidikan</option>";
                    } ?>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td width='30'>Tgl Tercatat</td>
            <td>
                <div class="col-sm-4""> <input type="date" name="tgl_tercatat" placeholder="Tgl Tercatat" class="form-control"></div>
            </td>
        </tr>

            <td colspan="2">
                <button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
                <?php echo anchor('tercatat', 'Back', array('class' => 'btn btn-primary btn-sm')) ?>
            </td>
        </tr>
    </table>
    <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>">Beranda</a>
</body>