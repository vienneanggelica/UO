<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('asset/css/') ?>style.css">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <span class="float-right waktu" id="waktu"></span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-3">
                <div class="row">
                    <div class="tab-content" style="width: 46rem">
                        <?php $i = 1;
                        foreach ($soal as $r) : ?>
                            <div class="tab-pane container <?= 'soal' . $i; ?>  <?= $i == 1 ? 'active' : '' ?>" id="<?= 'soal' . $r['id'] ?>">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Soal <?= $i ?></h5>
                                        <p class="card-text"><?= $r['soal'] ?></p>
                                        <div class="esay">
                                            <textarea name="soal<?= $i ?>" id="" cols="30" rows="10" class="form-control" data-idsoal=<?= $r['id'] ?>><?= $jawaban[$r['id']] ? $jawaban[$r['id']] : '' ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php $i++;
                        endforeach; ?>
                    </div>
                    <div class="card mt-3 ml-3 mr-3" style="width: 44rem">
                        <div class="card-body">
                            <div class="button-container">
                                <a href="javascript:;" class="btn kembali" id="prv">Soal Sebelumnya</a>
                                <a href="javascript:;" class="btn ragu-ragu" id="ragu">Ragu-Ragu</a>
                                <a href="javascript:;" class="btn next" id="nxt">Soal Berikutnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">NOMOR SOAL</h5>
                        <!-- <div id='timer'></div> -->
                        <!-- <center><span class="timer">60:00</span></center> -->
                        <div>
                            <ul class="nav nav-pills">
                                <?php $i = 1;
                                foreach ($soal as $r) { ?>
                                    <li class="nav-item">
                                        <?php if ($status[$r['id']] == 'ragu-ragu') { ?>
                                            <a class="nav-link ragu <?= $i == 1 ? 'active' : '' ?>" data-toggle="pill" href="<?= '#soal' . $r['id'] ?>" id="<?= $r['id'] ?>"><?= $i ?></a>
                                        <?php } else if ($status[$r['id']] == 'berisi') { ?>
                                            <a class="nav-link berisi <?= $i == 1 ? 'active' : '' ?>" data-toggle="pill" href="<?= '#soal' . $r['id'] ?>" id="<?= $r['id'] ?>"><?= $i ?></a>
                                        <?php } else { ?>
                                            <a class="nav-link <?= $i == 1 ? 'active' : '' ?>" data-toggle="pill" href="<?= '#soal' . $r['id'] ?>" id="<?= $r['id'] ?>"><?= $i ?></a>
                                        <?php } ?>
                                    </li>

                                <?php $i++;
                                } ?>
                            </ul>
                        </div>
                        <!-- <div class="notice mb-3 mt-2">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-2">
                                        <div class="hijau">
                                            &nbsp;
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-10 col 10"style="margin-left: -10px;">
                                        Soal yang sudah terjawab
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-2">
                                        <div class="abu-abu">
                                            &nbsp;
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-10 col 10"style="margin-left: -10px;">
                                        Soal yang sudah terjawab
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-2">
                                        <div class="kuning">
                                            &nbsp;
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-10 col 10"style="margin-left: -10px;">
                                        Soal yang sudah terjawab
                                    </div>
                                </div>
                            </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    var UIController = (function() {
        var DOMString = {
            'timer': '#waktu',
            'next': '#nxt',
            'prev': '#prv',
            'ragu': '#ragu',
            'navLink': '.nav-link',
            'tabPane': '.tab-pane'
        };
        return {
            getDOM: function() {
                return DOMString;
            },
            removeClass: function(dom, clas) {
                $(dom).removeClass(clas);
            },
            addClass: function(dom, clas) {
                $(dom).addClass(clas);
            },
            setClassPaneAndTab: function(nowItem, nextItem, nowPane, nextPane, tipe) {
                // for tab
                if (tipe === 'ragu-ragu') {
                    this.addClass(nowItem, 'ragu');
                }
                this.removeClass(nowItem, 'active');
                this.addClass(nextItem, 'active');

                // for pane
                this.removeClass(nowPane, 'show active');
                this.addClass(nextPane, 'show active');
            }
        }
    })();

    var Controller = (function(uiCtr) {
        var base_url = "<?= base_url() ?>";
        var dom;
        var table;
        var detik = <?= $detik; ?>;
        var menit = <?= $menit; ?>;
        var jam = <?= $jam; ?>;
        var i, items, pane;
        var setupEventListener = function() {
            dom = uiCtr.getDOM();
            hitung();
            i, items = $(dom.navLink);
            pane = $(dom.tabPane);

            $(dom.prev).on('click', function() {
                prev();
            });
            $(dom.next).on('click', function() {
                next();
            });
            $(dom.ragu).on('click', function() {
                ragu();
            })
        }

        function prev() {
            for (i = 0; i < items.length; i++) {
                if ($(items[i]).hasClass('active') == true) {
                    break;
                }
            }
            if (i != 0) {
                uiCtr.setClassPaneAndTab(items[i], items[i - 1], pane[i], pane[i - 1], '');
            }
        }

        function ragu() {
            for (i = 0; i < items.length; i++) {
                if ($(items[i]).hasClass('active') == true) {
                    break;
                }
            }
            if (i < items.length - 1) {
                var jawaban;
                var nomor;
                if ($('.soal' + (i + 1)).find('.esay').length !== 0) {
                    var select = 'textarea[name="soal' + (i + 1) + '"]';
                } else {
                    var select = 'input[name="soal' + (i + 1) + '"]:checked';
                }
                jawaban = getJawaban(select)
                nomor = getNomor(select, 'data-idsoal')
                insertJawaban(jawaban, nomor, 'ragu-ragu')

            } else {
                selesai();
            }
        }

        function next() {
            for (i = 0; i < items.length; i++) {
                if ($(items[i]).hasClass('active') == true) {
                    break;
                }
            }
            if (i < items.length - 1) {

                var jawaban;
                var nomor;

                if ($('.soal' + (i + 1)).find('.esay').length !== 0) {
                    var select = 'textarea[name="soal' + (i + 1) + '"]';
                } else {
                    var select = 'input[name="soal' + (i + 1) + '"]:checked';
                }

                jawaban = getJawaban(select)
                nomor = getNomor(select, 'data-idsoal')
                if (jawaban) {
                    $(items[i]).removeClass('ragu');
                    $(items[i]).addClass('berisi');
                    insertJawaban(jawaban, nomor, 'berisi');
                } else {
                    uiCtr.setClassPaneAndTab(items[i], items[i + 1], pane[i], pane[i + 1]);
                }
            } else {
                selesai();
            }
        }

        function hitung() {
            setTimeout(hitung, 1000);
            if (menit < 10 && jam == 0) {
                var peringatan = 'style="color:#FF6F6F !important"';
            };
            $(dom.timer).html(
                '<h2 align="center" class="text-white"' + peringatan + '>' + jam + ' : ' + menit + ' : ' + detik + '</h2>'
            );
            detik--;
            if (detik < 0) {
                detik = 59;
                menit--;
                if (menit < 0) {
                    menit = 59;
                    jam--;
                    if (jam < 0) {
                        clearInterval(hitung);
                        selesai();
                    }
                }
            }
        }

        function getJawaban(dom) {
            return $(dom).val();
        }

        function getNomor(dom, data) {
            return $(dom).attr(data);
        }

        function insertJawaban(jawaban, nomor, status) {
            $.ajax({
                url: '<?= base_url() ?>' + 'Home/StoreJawaban',
                data: {
                    jawaban: jawaban,
                    nomor: nomor,
                    status: status
                },
                type: 'post',
                dataType: 'json',
                success: function(data) {
                    uiCtr.setClassPaneAndTab(items[i], items[i + 1], pane[i], pane[i + 1], status);
                },
                error: function() {
                    console.log('gagal');
                }
            });
        }

        function selesai() {
            $.ajax({
                url: '<?= base_url() ?>' + 'Home/selesai',
                type: 'post',
                success: function(data) {
                    // window.location = data;
                }
            })
        }
        return {
            init: function() {
                setupEventListener();
            }
        }
    })(UIController);
    Controller.init();
</script>

</html>