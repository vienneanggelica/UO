 <!-- page content -->
 <div class="right_col" role="main">
          <!-- /top tiles -->
          <div class="container">

            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Form Ubah Data Mahasiswa
                        </div> 
                        <div class="card-body">
                            <form action="" method='post'>
                            <div class="mb-3 row">
                                    <div class="container mt-5 mb-5" style="width:400px">
                                        <h3>Mulai</h3>
                                        <input type="datetime-local" id="mulai" name="mulai" value="<?= $waktu['mulai']; ?>">
                                    </div>
                                    </div>
                                    <div class="mb-3 row">
                                    <div class="container mt-5 mb-5" style="width:400px">
                                        <h3>Selesai</h3>
                                        <input type="datetime-local" id="selesai" name="selesai" value="<?= $waktu['selesai']; ?>">
                                    </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="random_code" class="col-sm-2 col-form-label">Random Code</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="random_code" class="form-control" id="random_code" value="<?= $waktu['random_code']; ?>">
                                            <small class="form-text text-danger"><?= form_error('random_code')?></small>
                                        </div>
                                    </div>
                                <button type="submit" name="ubah" class="btn btn-primary float-right" >Ubah Data</button>
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
                            
