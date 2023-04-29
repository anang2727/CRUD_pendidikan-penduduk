<body>
    <h2>PERBARUI DATA TERCATAT</h2>
    <?php
    echo form_open('tercatat/edit');
    ?>
    <input type="hidden" value="<?php echo $rec_tercatat['id_pencatatan'] ?>" name="id">
    <table class="table table-bordered">
    <tr>
            <td>Nama Desa</td>
            <td>
                <div class="col-sm-4""> <select name="id_desa" class="form-control">
                    <?php foreach ($rec_desa->result() as $rp) {
                    ?>
                        <option <?php if ($rec_tercatat['id_desa'] == $rp->id_desa) {
                                    echo 'selected';
                                } ?> value="<?php echo $rp->id_desa ?>"><?php echo $rp->nama_desa; ?></option>;
                    <?php
                    }
                    ?>
                    </select>
                </div>
            </td>
        </tr>

        <tr>
            <td>Nama Penduduk</td>
            <td>
                <div class="col-sm-4""><select name=" id_penduduk" class="form-control">
                    <?php foreach ($rec_penduduk->result() as $rp) {
                    ?>
                        <option <?php if ($rec_tercatat['id_penduduk'] == $rp->id_penduduk) {
                                    echo 'selected';
                                } ?> value="<?php echo $rp->id_penduduk ?>"><?php echo $rp->nama_penduduk; ?></option>;
                    <?php
                    }
                    ?>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td>Petugas</td>
            <td>
                <div class="col-sm-4""><select name=" id_petugas" class="form-control">
                    <?php foreach ($rec_petugas->result() as $rp) {
                    ?>
                        <option <?php if ($rec_tercatat['id_petugas'] == $rp->id_petugas) {
                                    echo 'selected';
                                } ?> value="<?php echo $rp->id_petugas ?>"><?php echo $rp->nama_penduduk . ' (' . $rp->nama_desa; ?>)</option>;
                    <?php
                    }
                    ?>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td>Nama Pendidikan</td>
            <td>
                <div class="col-sm-4""><select name=" id_pendidikan" class="form-control">
                    <?php foreach ($rec_pendidikan->result() as $rp) {
                    ?>
                        <option <?php if ($rec_tercatat['id_pendidikan'] == $rp->id_pendidikan) {
                                    echo 'selected';
                                } ?> value="<?php echo $rp->id_pendidikan ?>"><?php echo $rp->nama_pendidikan; ?></option>;
                    <?php
                    }
                    ?>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td width="120">Tgl Tercatat</td>
            <td>
                <div class="col-sm-4""><input class=" form-control" type="date" value="<?php echo $rec_tercatat['tgl_tercatat'] ?>" name="tgl_tercatat"></div>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
                <?php echo anchor('tercatat', 'Back', array('class' => 'btn btn-primary btn-sm')) ?>
            </td>
        </tr>
    </table>
    <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>">Beranda</a>
</body>