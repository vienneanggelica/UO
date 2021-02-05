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
                                    <label for="no_bp" class="col-sm-2 col-form-label">No BP</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="no_bp" class="form-control" id="no_bp"  value="<?= $mahasiswa['no_bp']; ?>">
                                        <small class="form-text text-danger"><?= form_error('no_bp')?></small>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama" class="form-control" id="nama"  value="<?= $mahasiswa['nama']; ?>">
                                        <small class="form-text text-danger"><?= form_error('nama')?></small>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                                    <div class="col-sm-10">
                                        <td><?php echo form_radio('jk', 'Laki laki', '', 'id=laki laki') . form_label('Laki Laki', 'laki laki');  ?>
                                        <?php echo form_radio('jk', 'Perempuan', '', 'id=laki laki') . form_label('Perempuan', 'perempuan');  ?></td>
                                        <small class="form-text text-danger"><?= form_error('jk')?></small>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="prodi" name='prodi'>
                                            <?php foreach($prodi as $p) : ?>
                                                <?php if($p == $mahasiswa['prodi']): ?>
                                                    <option value="<?=$p; ?>" selected><?= $p; ?></option>
                                                <?php else : ?>
                                                    <option value="<?=$p; ?>"><?= $p; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="kelas" class="form-control" id="kelas" value="<?= $mahasiswa['kelas']; ?>">
                                        <small class="form-text text-danger"><?= form_error('kelas')?></small>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="email" class="form-control" id="email" value="<?= $mahasiswa['email']; ?>">
                                        <small class="form-text text-danger"><?= form_error('email')?></small>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $mahasiswa['alamat']; ?>">
                                        <small class="form-text text-danger"><?= form_error('alamat')?></small>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-10">
                                        <input class="form-control-file <?= form_error('foto') ? 'is-invalid': '' ?>" type="file" name="foto" id="id"  value="<?= $mahasiswa['foto']; ?>">
                                        <input type="hidden" name="old_image" >
                                    </div>
                                    <div class="invalid-feedback">
                                        <?= form_error('foto') ?>
                                    </div>
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






                            
