 <!-- page content -->
 <div class="right_col" role="main">
          <!-- /top tiles -->
          <div class="container">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3> Detail Data <?= $mahasiswa['nama']?></h3>
                            </div>
                            <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>No BP</th> 
                                    <td class="card-text"><?= $mahasiswa['no_bp']?></td>
                                </tr>
                                <tr>
                                    <th>Nama</th> 
                                    <td class="card-text"><?= $mahasiswa['nama']?></td>
                                </tr>
                                <tr>
                                    <th>Email</th> 
                                    <td class="card-text"><?= $mahasiswa['email']?></td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th> 
                                    <td class="card-text"> <?= $mahasiswa['jk']?></td>
                                </tr>
                                <tr>
                                    <th>Prodi</th> 
                                    <td class="card-text"><?= $mahasiswa['prodi']?></td>
                                </tr>
                                <tr>
                                    <th>Kelas</th> 
                                    <td class="card-text"><?= $mahasiswa['kelas']?></td>
                                </tr>
                                <tr>
                                    <th>Alamat</th> 
                                    <td class="card-text"><?= $mahasiswa['alamat']?></td>
                                </tr>
                                
                                <tr>
                                    <th>foto</th> 
                                    <?php foreach ($mahasiswa as $m); ?>
                                    <td class="card-text"> <img src="<?php echo base_url('upload/foto/'.$m->foto) ?>" width="64" /></td>
                                </tr>
                            </table>
                            
                            </div>
                            <a href="<?= base_url();?>mahasiswa" class="btn btn-primary">Kembali</a>
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

