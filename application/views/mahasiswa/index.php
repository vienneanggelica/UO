  <!-- page content -->
  <div class="right_col" role="main">
    <div class="container">
      <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
          <div class="col-md-20">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Data Mahasiswa<strong> berhasil</strong>
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
                <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-6">
                <form action="" method="post">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data mahasiswa.." name="keyword">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="row mt-1">
              <div class="col-md-12">
                <h3>Daftar Mahasiswa</h3>
                <?php if (empty($mahasiswa)) : ?>
                  <div class="alert alert-danger" role="alert">
                    data mahasiswa tidak ditemukan.
                  </div>
                <?php endif; ?>
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th scope="col">No BP</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Email</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($mahasiswa as $mhs) : ?>
                      <tr class="table table-bordered">
                        <td> <?= $mhs['ni']; ?></td>
                        <td> <?= $mhs['name']; ?></td>
                        <td> <?= $mhs['email']; ?></td>
                        <td>
                          <a href="<?= base_url(); ?>mahasiswa/hapus/<?= isset($mhs['ni']); ?>" class="fas fa-trash-alt btn btn-danger mx-auto" onclick="return confirm('yakin ingin menghapus data?');"> Hapus</a>
                          <a href="<?= base_url(); ?>mahasiswa/editprofil/<?= isset($mhs['ni']); ?>" class="fas fa-edit btn btn-warning mx-auto"> Ubah</a>
                          <a href="<?= base_url(); ?>mahasiswa/detail/<?= isset($mhs['ni']); ?>" class="fas fa-eye btn btn-primary mx-auto"> Detail</a>
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