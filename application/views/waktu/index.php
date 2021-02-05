<!DOCTYPE html>
<html>
    <head>
        <title>Timing Function</title>
    </head>

 <!-- page content -->
 <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
          <div class="tile_count">
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
              <div class="count">2500</div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
              <div class="count">123.50</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
          </div>
        </div>
          <!-- /top tiles -->
        <div class="container">
          <?php if($this->session->flashdata('flash')): ?>
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

              <div class="card-body">
                <form action="" method='post'>
                    <div class="col-md-3 col-sm-3  bg-white">
                        <div class="container mt-5 mb-5" style="width:400px">
                            <h3>Mulai</h3>
                            <input type="datetime-local" id="mulai" name="mulai">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="container mt-5 mb-5" style="width:400px">
                            <h3>Selesai</h3>
                            <input type="datetime-local" id="selesai" name="selesai">
                        </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="random_code" class="col-sm-2 col-form-label">Random Code</label>
                          <div class="col-sm-10">
                            <input type="text" name="random_code" class="form-control" id="random_code">
                            <small class="form-text text-danger"><?= form_error('random_code')?></small>
                          </div>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary float-right" >Tambah Data</button>
                </form>

                    <h1 id="teks"></h1>
                    <button id="tombol">Berhenti!</button>

                <script src="script.js"></script>
                </body>
                </div>
            </div>
            </div>
                <!-- end of weather widget -->
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

</html>