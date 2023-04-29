<body>
    <h2>TAMBAH DATA PETUGAS</h2>
    <?php
    echo form_open('petugas/tambah');
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
            <td width='30'>Tgl Mulai</td>
            <td>
                <div class="col-sm-4""> <input type="date" name="tgl_mulai" placeholder="Tgl Mulai" class="form-control"></div>
            </td>
        </tr>
        <tr>
            <td width='30'>Username</td>
            <td>
                <div class="col-sm-4""> <input type="text" name="username" placeholder="username" class="form-control"></div>
            </td>
        </tr>
        <tr>
            <td width='30'>Last Login</td>
            <td>
                <div class="col-sm-4""> <input type="date" name="last_login" placeholder="Last login" class="form-control"></div>
            </td>
        </tr>
        <tr>
            <td width='30'>Password</td>
            <td>
                <div class="col-sm-4""> <input type="text" name="password" placeholder="Password" class="form-control"></div>
            </td>
        </tr>
        <tr>
            <td width='30'>Tgl Berakhir</td>
            <td>
                <div class="col-sm-4""><input type="date" name="tgl_berakhir" placeholder="Tgl Berakhir" class="form-control"></div>
            </td>
        </tr>
        <tr>
            <td>Sebagai</td>
            <td>
                <div class="col-sm-4"">
            <Select type="text" name="sebagai" class="form-control">
                    <option value="Kepdes">Kepdes</option>
                    <option value="Sekdes">Sekdes</option>
                    <option value="Operator">Operator</option>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
                <?php echo anchor('petugas', 'Back', array('class' => 'btn btn-primary btn-sm')) ?>
            </td>
        </tr>
    </table>
    <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>">Beranda</a>
</body>