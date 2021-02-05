<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Soal
                </div>
                <div class="card-body">
                    <form action="" method='post'>
                        <input type="hidden" name="id" value="<?= $soal['id']; ?> "> 
                        <div class="form-group">
                            <label for="soal">Soal</label>
                            <input type="text" name="soal" class="form-control" id="soal" value="<?= $soal['soal']; ?>">
                            <small class="form-text text-danger"><?= form_error('soal')?></small>
                        </div>
                        <div class="form-group">
                            <label for="kunci">Kunci Jawaban</label>
                            <textarea name="kunci" class="form-control" id="kunci"><?= $soal['kunci']; ?></textarea>
                            <small class="form-text text-danger"><?= form_error('kunci')?></small>
                        </div>
                            <button type="submit" name="ubah" class="btn btn-primary float-right" >Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>        
 </div>