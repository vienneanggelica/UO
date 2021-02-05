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
                 <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSoal">Tambah Soal</a>
             </div>
         </div>

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

             <div class="col-sm-8">
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
                                     <thead class="table table-bordered border-primary">
                                         <th>Soal</th>
                                         <th>Kunci</th>
                                         <th>Aksi</th>
                                     </thead>
                                     <tbody>
                                         <?php foreach ($soal as $s) : ?>
                                             <tr class="table table-striped table-hover table-bordered border-primary">
                                                 <td><?= $s['soal']; ?></td>
                                                 <td><?= $s['kunci']; ?></td>
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
             <div class="form-group col-sm-4">
                 <div class="card">
                     <div class="card-body">
                         <form action="<?= base_url('soal/kelas_soal/') . $id ?>" method='post'>
                             <div class="card-body form-group">
                                 <div class="row">

                                     <div class="container mt-3 mb-3 form-group" style="width:100%">
                                         <h5>Mulai</h5>
                                         <input class="form-control" type="datetime-local" id="mulai" name="mulai">
                                     </div>
                                     <div class="container mt-3 mb-3 form-group" style="width:100%">
                                         <h5>Selesai</h5>
                                         <input class="form-control" type="datetime-local" id="selesai" name="selesai">
                                     </div>
                                     <div class="container mt-3 mb-3 form-group" style="width:400px">
                                         <h5>Waktu</h5>
                                         <input class="form-control" type="teks" style="width:257px" id="waktu" name="waktu" placeholder="Masukkan lama waktu ujian...">
                                     </div>
                                     <div class="container mt-3 mb-3 form-group" style="width:100%">
                                         <button type="submit" class="btn btn-primary">Simpan</button>
                                     </div>

                                     <div class="container mt-3 mb-3 form-group" style="width:400px">
                                         <?php foreach ($soal as $s) { ?>
                                             <input type="text" name="id_soal[]" value="<?= $s['id'] ?>" hidden>
                                         <?php } ?>
                                     </div>

                                 </div>

                             </div>
                         </form>
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
 <div class="modal fade" id="newSoal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="newSoalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="newSoalLabel">Tambah Soal</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <form action="<?= base_url('soal/tambah/') . $id ?>" method="post">
                 <div class="modal-body">
                     <div class="form-group">
                         <input type="text" class="form-control" id="soal" name="soal" placeholder="Soal">
                     </div>
                     <div class="form-group">
                         <input type="text" class="form-control" id="kunci" name="kunci" placeholder="Kunci">
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