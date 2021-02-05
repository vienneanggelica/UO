 <!-- page content -->
 <div class="right_col" role="main">
     <!-- /top tiles -->
     <div class="container">
         <div class="row mt-3">
             <div class="col-md-12">
                 <div class="card">
                     <div class="card-header">
                         Form Input Soal
                     </div>
                     <div class="card-body">
                         <form action="" method='post'>
                             <div class="form-group">
                                 <label for="soal">Soal</label>
                                 <input type="text" name="soal" class="form-control" id="soal">
                                 <small class="form-text text-danger"><?= form_error('soal') ?></small>
                             </div>
                             <div class="form-group">
                                 <label for="kunci">Kunci Jawaban</label>
                                 <textarea name="kunci" class="form-control" id="kunci"></textarea>
                                 <small class="form-text text-danger"><?= form_error('kunci') ?></small>
                             </div>
                             <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- end of weather widget -->