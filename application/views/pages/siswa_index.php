<div class="card card-default" style="border-radius: 0px;margin: 20px 0;">
     <div class="card-header">Kelola Data Pasien</div>
     <div class="card-body">
          <?php
               
               echo anchor('siswa/tambah','Tambah Siswa','class="btn btn-primary"
               style="margin:0 5px; margin-bottom: 15px;" ');
               echo anchor ('siswa/laporan','Cetak Laporan','class="btn btn-secondary" style="margin: 0 5px; margin-bottom: 15px;"');
               ?>
          <table class="table table-striped">
               <thead>
                    <tr>
                         <th scope="col">No</th>
                         <th scope="col">TANGGAL_PASIEN</th>
                         <th scope="col">NAMA_PASIEN</th>
                         <th scope="col">KELAS_PASIEN</th>
                         <th scope="col">KELUHAN_PASIEN</th>
                         
                    </tr>
               </thead>
               <tbody>
                    <?php
                         if ($query->num_rows() > 0) {
                              $no = 1;
                              foreach ($query->result() as $row) {
                                   echo '
                                        <tr>
                                             <td>'.$no++.'</td>
                                             <td>'.$row->tanggal_pasien.'</td>
                                             <td>'.$row->nama_pasien.'</td>
                                             <td>'.$row->kelas_pasien.'</td>
                                             <td>'.$row->keluhan_pasien.'</td>
                                             <td>
                                                  '.anchor('siswa/edit/'.$row->pasien_id, 'Edit', 'class="btn btn-xs btn-success"').'
                                                  '.anchor('siswa/hapus/'.$row->pasien_id, 'Hapus', 'class="btn btn-xs btn-danger"').'
                                             </td>
                                        </tr>
                                   ';
                              }
                         }else{
                              echo '
                                   <tr>
                                        <td colspan="6" class="text-center">Data masih kosong !</td>
                                   </tr>
                              ';
                         }
                    ?>
               </tbody>
          </table>
     </div>
</div>