<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('Mahasiswa/editProfil'); ?>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="ni" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ni" name="ni">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                    <select name="kelas" id="kelas" class="form_control" style="width:100%">
                        <option value="">Select Menu</option>
                        <?php foreach ($kelas as $k) : ?>
                            <option value="<?= $k['id']; ?>" <?php if ($mahasiswa['kelas']) {
                                                                    if ($mahasiswa['kelas'] == $k['id']) {
                                                                        echo 'selected';
                                                                    }
                                                                } ?>><?= $k['kelas']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <td>
                        <input type="radio" name="jk" value="Laki laki" id=laki <?php if ($mahasiswa) {
                                                                                    if ($mahasiswa['jk'] == 'Laki laki') {
                                                                                        echo "checked";
                                                                                    }
                                                                                } else {
                                                                                    echo "checked";
                                                                                } ?> />
                        <label for="laki laki">Laki Laki</label>
                        <input type="radio" name="jk" value="Perempuan" id=perempuan <?php if ($mahasiswa) {
                                                                                            if ($mahasiswa['jk'] == 'Perempuan') {
                                                                                                echo "checked";
                                                                                            }
                                                                                        } ?> />
                        <label for="perempuan">Perempuan</label>
                    </td>
                    <small class="form-text text-danger"><?= form_error('jk') ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php if ($mahasiswa['alamat']) {
                                                                                                    echo $mahasiswa['alamat'];
                                                                                                } ?>">
                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Picture</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <?php if ($mahasiswa) { ?>
                                <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="img-thumbnail">
                            <?php } else { ?>
                                <img src="<?= base_url('assets/img/profile/') . $mahasiswa['image'] ?>" class="img-thumbnail">
                            <?php } ?>
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->