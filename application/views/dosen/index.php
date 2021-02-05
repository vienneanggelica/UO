 <!-- page content -->
 <div class="right_col" role="main">
   <div class="container">
     <?php if ($this->session->flashdata('flash')) : ?>
       <div class="row mt-3">
         <div class="col-md-20">
           <div class="alert alert-success alert-dismissible fade show" role="alert">
             Data Dosen<strong> berhasil</strong>
             <?= $this->session->flashdata('flash'); ?>.
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
         </div>
       </div>
     <?php endif; ?>

     <div class="row">
       <div class="col-md-12 col-sm-12 ">
         <div class="dashboard_graph">

           <div class="row mt-3">
             <div class="col-md-6">
               <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Dosen</a>
             </div>
           </div>

           <div class="row mt-3">
             <div class="col-md-6">
               <form action="" method="post">
                 <div class="input-group">
                   <input type="text" class="form-control" placeholder="Cari data dosen.." name="keyword">
                   <div class="input-group-append">
                     <button class="btn btn-primary" type="submit">Cari</button>
                   </div>
                 </div>
               </form>
             </div>
           </div>

           <div class="row mt-1">
             <div class="col-md-12">
               <h3>Daftar Dosen</h3>
               <?php if (empty($dosen)) : ?>
                 <div class="alert alert-danger" role="alert">
                   data dosen tidak ditemukan.
                 </div>
               <?php endif; ?>
               <table class="table">
                 <thead class="table-info table-bordered">
                   <th>NIP</th>
                   <th>Nama</th>
                   <th>Email</th>
                   <th>Aksi</th>
                 </thead>
                 <tbody>
                   <?php
                    foreach ($dosen as $d) : ?>
                     <tr class="table table-bordered">
                       <td> <?= $d['ni']; ?></td>
                       <td> <?= $d['name']; ?></td>
                       <td> <?= $d['email']; ?></td>
                       <td>
                         <a href="<?= base_url(); ?>mahasiswa/hapus/<?= isset($d['ni']); ?>" class="fas fa-trash-alt btn btn-danger mx-auto" onclick="return confirm('yakin ingin menghapus data?');"> Hapus</a>
                         <a href="<?= base_url(); ?>mahasiswa/ubah/<?= isset($d['ni']); ?>" class="fas fa-edit btn btn-warning mx-auto"> Ubah</a>
                         <a href="<?= base_url(); ?>mahasiswa/detail/<?= isset($d['ni']); ?>" class="fas fa-eye btn btn-primary mx-auto"> Detail</a>
                       </td>
                     </tr>
                   <?php endforeach; ?>
                 </tbody>
               </table>
             </div>
           </div>
         </div>
         <!-- end of weather widget -->
       </div>
     </div>
   </div>
 </div>
 </div>
 <!-- /page content -->