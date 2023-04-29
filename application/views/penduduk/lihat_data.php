 <h2>DATA PENDUDUK</h2>
 <?php echo anchor('penduduk/tambah', 'Tambah Data Penduduk', array('class' => 'btn btn-info btn-sm')) ?>
 <hr>
 <table class="table table-bordered">
     <tr>
         <th style="text-align: center;" width="40">No</th>
         <th style="text-align: center;">Nama Penduduk</th>
         <th style="text-align: center;">No KK</th>
         <th style="text-align: center;">NIK</th>
         <th style="text-align: center;">Jenis Kelamin</th>
         <th style="text-align: center;">Tgl lahir</th>
         <th style="text-align: center;">Tpt Lahir</th>
         <th style="text-align: center;" colspan="2">Action</th>
     </tr>
     <?php
        $no = $this->uri->segment(3) ? $this->uri->segment(3) + 1 : 1;
        foreach ($record->result() as $r) { ?>
         <tr>
             <td><?php echo $no; ?></td>
             <td><?php echo $r->nama_penduduk; ?></td>
             <td><?php echo $r->no_kk; ?></td>
             <td><?php echo $r->nik; ?></td>
             <td>
                 <?php if ($r->jenis_kelamin == 'pria') {
                        $x = "pria";
                    } else {
                        $x = "wanita";
                    };
                    echo $x; ?>
             </td>
             <td><?php echo $r->tgl_lahir; ?></td>
             <td><?php echo $r->tpt_lahir; ?></td>
             <td width='20'><a class="btn btn-success btn-sm" href="<?php echo base_url() . 'index.php/penduduk/edit/' . $r->id_penduduk ?>">Edit</a></td>
             <td width='20'><a class="btn btn-danger btn-sm" href="<?php echo base_url() . 'index.php/penduduk/delete/' . $r->id_penduduk ?>">Delete</a></td>
         </tr>
     <?php $no++;
        } ?>
 </table>
 <?php
    echo $paging;
    ?>
 <br />
 <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>">Beranda</a>
 </body>