<body>
    <h2>PERBARUI DATA PETUGAS</h2>
    <?php
    echo form_open('petugas/edit');
    ?>
    <input type="hidden" value="<?php echo $rec_petugas['id_petugas'] ?>" name="id">
    <table class="table table-bordered">
        <tr>
            <td>Nama Desa</td>
            <td>
                <select name="id_desa" class="form-control">
                    <?php foreach ($rec_desa->result() as $rp) {
                    ?>
                        <option <?php if ($rec_petugas['id_desa'] == $rp->id_desa) {
                                    echo 'selected';
                                } ?> value="<?php echo $rp->id_desa ?>"><?php echo $rp->nama_desa; ?></option>;
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>Nama Penduduk</td>
            <td>
                <select name="id_penduduk" class="form-control">
                    <?php foreach ($rec_penduduk->result() as $rp) {
                    ?>
                        <option <?php if ($rec_petugas['id_penduduk'] == $rp->id_penduduk) {
                                    echo 'selected';
                                } ?> value="<?php echo $rp->id_penduduk ?>"><?php echo $rp->nama_penduduk; ?></option>;
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td width="120">Tgl Mulai</td>
            <td>
                <input type="date" class="form-control" name="tgl_mulai" placeholder="Tgl Mulai"></div>
            </td>
        </tr>
        <tr>
            <td width="120">Tgl Berakhir</td>
            <td>
                <input type="date" class="form-control" name="tgl_berakhir"></div>
            </td>
        </tr>
        <tr>
            <td width='30'>Username</td>
            <td>
                <input type="text" value="<?php echo $rec_petugas['username'] ?>" name="username" placeholder="username" class="form-control"></div>
            </td>
        </tr>
        <tr>
            <td>Last Login</td>
            <td>
                <input type="date" value="<?php echo $rec_petugas['last_login']; ?>" name="last_login" class="form-control"></div>
            </td>
        </tr>
        <tr>
            <td width='30'>Password</td>
            <td>
                <input type="text" name="password" value="<?php echo $rec_petugas['password'] ?>" placeholder="Password" class="form-control"></div>
            </td>
        </tr>
        <tr>
            <td width="30">Sebagai</td>
            <td>
                <Select type="text" name="sebagai" class="form-control">
                    <option <?php if ($rec_petugas['sebagai'] == 'Kepdes') {
                                echo 'selected';
                            } ?> value="Kepdes">Kepdes</option>
                    <option <?php if ($rec_petugas['sebagai'] == 'Sekdes') {
                                echo 'selected';
                            } ?> value="Sekdes">Sekdes</option>
                    <option <?php if ($rec_petugas['sebagai'] == 'Operator') {
                                echo 'selected';
                            } ?> value="Operator">Operator</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button>
                <?php echo anchor('petugas', 'back', array('class' => 'btn btn-primary btn-sm')) ?>
            </td>
        </tr>
    </table>
    <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>">Beranda</a>

</body>