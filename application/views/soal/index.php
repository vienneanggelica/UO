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
                         <input type="text" class="form-control" placeholder="Cari Kelas.." name="keyword">
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
                                 <h3>Daftar Kelas</h3>
                                 <?php if (empty($kelas)) : ?>
                                     <div class="alert alert-danger" role="alert">
                                         Kelas tidak ditemukan.
                                     </div>
                                 <?php endif; ?>
                                 <table class="table">
                                     <thead class="table-primary table-bordered border-primary">
                                         <th>Kelas</th>
                                         <!-- <th>Kunci</th> -->
                                         <th>Aksi</th>
                                     </thead>
                                     <tbody>
                                         <?php foreach ($kelas as $s) : ?>
                                             <tr class="table table-striped table-hover table-bordered border-primary">
                                                 <td><?= $s['kelas']; ?></td>
                                                 <td>
                                                     <a href="<?= base_url(); ?>soal/kelas_soal/<?= $s['id']; ?>" class="fas fa-eye btn btn-primary mx-auto float-center"> Daftar Soal</a>
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

 <!-- Modal -->