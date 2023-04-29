<body>
<h2>DATA PENDIDIKAN</h2>
<?php echo anchor ('pendidikan/tambah','Tambah Data Pendidikan',array('class'=>'btn btn-info btn-sm'));?>
<br>
<br>
<br>
<table class="table table-bordered">
    <tr>
        <th width="30">No</th>
        <th style="text-align: center">Nama Pendidikan</th>
        <th style="text-align: center">Tingkat Pendidikan</th>
        <th colspan="2" style="text-align: center">Action</th>
    </tr>
        <?php
        $no = $this->uri->segment(3) ? $this->uri->segment(3) + 1 : 1;
        foreach ($record->result() as $r){
            echo "<tr>
            <td>$no</td>
            <td>$r->nama_pendidikan</td>
            <td>$r->tingkat_pendidikan</td>
            <td  width='10'>".anchor('pendidikan/edit/'.$r->id_pendidikan,'Edit',array('class'=>'btn btn-success btn-sm'))."</td>
            <td width='10'>".anchor('pendidikan/delete/'.$r->id_pendidikan,'Delete',array('class'=>'btn btn-danger btn-sm'))."</td>
            <tr>";
            $no++;
        }?>
</table>
<?php
echo $paging;
?>
<br/>
<a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>">Beranda</a>
<br/>
<br/>
<br/>
</body>
