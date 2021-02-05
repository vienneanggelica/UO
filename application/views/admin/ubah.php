 <!-- page content -->
 <div class="right_col" role="main">
     <!-- /top tiles -->
     <div class="container">

         <div class="row mt-3">
             <div class="col-md-12">
                 <div class="card">
                     <div class="card-header">
                         Form Ubah Role
                     </div>
                     <div class="card-body">
                         <form action="" method='post'>
                             <div class="mb-3 row">
                                 <label for="role" class="col-sm-2 col-form-label">Role</label>
                                 <div class="col-sm-10">
                                     <input type="text" name="role" class="form-control" id="role" value=<?= $role['role']; ?>>
                                     <small class="form-text text-danger"><?= form_error('role') ?></small>
                                 </div>
                             </div>
                     </div>
                     <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- end of weather widget -->
 </div>
 </div>
 </div>
 </div>
 <!-- /page content -->