 <!-- page content -->
 <div class="right_col" role="main">
     <div class="container form-group">
         <?php if ($this->session->flashdata('flash')) : ?>
             <div class="row mt-3">
                 <div class="col-md-6">
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                         Kelas<strong> berhasil</strong>
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
                 <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newKelas">Tambah Kelas</a>
             </div>
         </div>

         <div class="row mt-3">
             <div class="col-md-6">
                 <form action="" method="post">
                     <div class="input-group">
                         <input type="text" class="form-control" placeholder="Cari kelas.." name="keyword">
                         <div class="input-group-append">
                             <button class="btn btn-primary" type="submit">Cari</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>

         <div class="form-group row mt-3">
             <div class="col-sm-8">
                 <div class="card">
                     <div class="card-body">
                         <div class="row mt3">
                             <div class="col-md-12">
                                 <h3>Kelas yang telah diinputkan</h3>
                                 <?php if (empty($kelas)) : ?>
                                     <div class="alert alert-danger" role="alert">
                                         kelas tidak ditemukan.
                                     </div>
                                 <?php endif; ?>
                                 <table class="table">
                                     <thead class="table-primary table-bordered border-primary">
                                         <th>#</th>
                                         <th>Kelas</th>
                                         <th>Aksi</th>
                                     </thead>
                                     <tbody>
                                         <?php $i = 1; ?>
                                         <?php foreach ($kelas as $k) : ?>
                                             <tr class="table table-striped table-hover table-bordered border-primary">
                                                 <th scope="row"><?= $i; ?></th>
                                                 <td><?= $k['kelas']; ?></td>
                                                 <td>
                                                     <a href="<?= base_url(); ?>kelas/hapus/<?= $k['id']; ?>" class="fas fa-trash-alt btn btn-danger float-center" onclick="return confirm('yakin ingin menghapus data?');"> Hapus</a>
                                                     <a href="<?= base_url(); ?>kelas/ubah/<?= $k['id']; ?>" class="fas fa-edit btn btn-warning mx-auto float-center"> Ubah</a>

                                                 </td>
                                             </tr>
                                             <?php $i++ ?>
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

 <!-- Modal -->
 <div class="modal fade" id="newKelas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="newSoalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="newKelasLabel">Tambah Kelas</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <form action="<?= base_url('kelas/tambah'); ?>" method="post">
                 <div class="modal-body">
                     <div class="form-group">
                         <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas">
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Add</button>
                 </div>
             </form>
         </div>
     </div>
 </div>

 <div class="modal fade" id="ubahKelas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="newSoalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="ubahKelasLabel">Ubah data Kelas</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <form action="<?= base_url('kelas/tambah'); ?>" method="post">
                 <div class="modal-body">
                     <div class="form-group">
                         <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas">
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Ubah</button>
                 </div>
             </form>
         </div>
     </div>
 </div>