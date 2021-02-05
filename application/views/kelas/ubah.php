<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Kelas
                </div>
                <div class="card-body">
                    <form action="" method='post'>
                        <input type="hidden" name="id" value="<?= $kelas['id']; ?> ">
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" name="kelas" class="form-control" id="kelas" value="<?= $kelas['kelas']; ?>">
                            <small class="form-text text-danger"><?= form_error('kelas') ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>