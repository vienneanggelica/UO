 <!-- page content -->
 <div class="right_col" role="main">
     <div class="container form-group">
         <?php if ($this->session->flashdata('flash')) : ?>
             <div class="row mt-3">
                 <div class="col-md-6">
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                         Soal<strong> berhasil</strong>
                         <?= $this->session->flashdata('flash'); ?>.
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                 </div>
             </div>
         <?php endif; ?>

         <div class="row mt-3">
             <div class="col-md-6">
                 <form action="" method="post">
                     <div class="input-group">
                         <input type="text" class="form-control" placeholder="Cari Soal.." name="keyword">
                         <div class="input-group-append">
                             <button class="btn btn-primary" type="submit">Cari</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>

         <div class="form-group row mt-3">

             <div class="col-sm-12">
                 <div class="card">
                     <div class="card-body">
                         <div class="row mt3">
                             <div class="col-md-12">
                                 <h3>Soal yang telah diinputkan</h3>
                                 <?php if (empty($soal)) : ?>
                                     <div class="alert alert-danger" role="alert">
                                         soal tidak ditemukan.
                                     </div>
                                 <?php endif; ?>
                                 <table class="table">
                                     <thead class="table-primary table-bordered border-primary">
                                         <th>Kelas</th>
                                         <th>Jumlah Soal</th>
                                         <th>Mulai</th>
                                         <th>Selesai</th>
                                         <th>Waktu</th>
                                         <th>Aksi</th>
                                     </thead>
                                     <tbody>
                                         <?php foreach ($soal as $s) : ?>
                                             <tr class="table table-striped table-hover table-bordered border-primary">
                                                 <td><?= $s['kelas'] ?></td>
                                                 <td><?= $s['jumlah_soal']; ?></td>
                                                 <td><?= $s['mulai']; ?></td>
                                                 <td><?= $s['selesai']; ?></td>
                                                 <td><?= $s['waktu']; ?></td>
                                                 <td>
                                                     <a href="<?= base_url(); ?>soal/hapus/<?= $s['id']; ?>" class="fas fa-trash-alt btn btn-danger float-center" onclick="return confirm('yakin ingin menghapus data?');"> Hapus</a>
                                                     <a href="<?= base_url(); ?>soal/ubah/<?= $s['id']; ?>" class="fas fa-edit btn btn-warning mx-auto float-center"> Ubah</a>
                                                     <a href="<?= base_url(); ?>soal/detail/<?= $s['id']; ?>" class="fas fa-eye btn btn-primary mx-auto float-center"> Detail</a>
                                                 </td>
                                             </tr>
                                         <?php endforeach; ?>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
         <!-- end of weather widget -->
     </div>
 </div>
 </div>
 <!-- /page content -->