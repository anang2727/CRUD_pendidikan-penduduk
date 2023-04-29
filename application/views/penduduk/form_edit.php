<body>
<h2>UBAH DATA PENDUDUK</h2>
<?php
echo form_open('penduduk/edit');
?>
<input type="hidden" value="<?php echo $rec_penduduk['id_penduduk']?>" name="id">
<table class="table table-bordered">
    <tr>
        <td>Nama Penduduk</td>
        <td> <div class="col-sm-4""> <input type="text" class="form-control" value="<?php echo $rec_penduduk['nama_penduduk']?>" name="nama_penduduk" placeholder="Nama Penduduk"> </td> </td>
    </tr>

    <tr>
        <td>NO KK</td>
        <td> <div class="col-sm-4""><input type="text"  class="form-control"  value="<?php echo $rec_penduduk['no_kk']?>" name="no_kk" placeholder="Nomor KK"> </div> </td>
    </tr>
    <tr> <td>NIK</td>
        <td> <div class="col-sm-4""><input type="text"  class="form-control"  value="<?php echo $rec_penduduk['nik'];?>" name="nik"> </div> </td>
    </tr>
    <tr>
        <td>J. Kelamin</td>
        <td><div class="col-sm-4"">
            <Select type="text" name="jenis_kelamin"  class="form-control" >
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option>
            </select> </div>
        </td>
    </tr>
    <tr> <td>Tgl. Lahir</td>
        <td> <div class="col-sm-4""> <input type="date" value="<?php echo $rec_penduduk['tgl_lahir'];?>" name="tgl_lahir"  class="form-control" > </div></td>
    </tr>
    <tr> <td>Tempat Lahir</td>
        <td><div class="col-sm-4""> <input type="text"  class="form-control"  value="<?php echo $rec_penduduk['tpt_lahir']; ?>"
        name="tpt_lahir" placeholder="Tempat penduduk"></div></td>
    </tr>
    </tr>
    <tr>
            <td colspan="2">
            <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button>
            <?php echo anchor('penduduk', 'back', array('class' => 'btn btn-primary btn-sm')) ?>
            </td>
        </tr>
</table>
<a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>">Beranda</a>
</body>
