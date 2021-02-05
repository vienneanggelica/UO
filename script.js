// setTimeout()


// const tes = setTimeout(function(){
//     console.log('ok');
// }, 3000);

// const tombol = document.getElementById('tombol');
// tombol.addEventListener('click',function(){
//     clearTimeout(tes);
//     console.log('selesai');
// });


// setInterval()
// const tes = setInterval(function() {
//     console.log('ok');
// }, 5000);

// const tombol = document.getElementById('tombol');
// tombol.addEventListener('click',function(){
//     clearInterval(tes);
//     console.log('selesai');
// });


//program hitung mundur
const tanggalTujuan = new Date(value="<?= $waktu['selesai']; ?>").getTime();

const hitungMundur = setInterval(function(){
    const sekarang = new Date(value="<?= $waktu['mulai']; ?>").getTime();
    const selisih = tanggalTujuan - sekarang;
    const hari = Math.floor(selisih / (1000 * 60 * 60 * 24));
    const jam = Math.floor(selisih % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
    const menit = Math.floor(selisih % (1000 * 60 * 60) / (1000 * 60));
    const detik = Math.floor(selisih % (1000 * 60) / (1000));

    const teks = document.getElementById('teks');
    teks.innerHTML = 'Waktu anda tinggal : ' + hari + ' hari : ' + jam + ' : ' + menit + ' : ' + detik + ' detik lagi! ';

    if(selisih <= 0 ) {
        clearInterval(hitungMundur);
        teks.innerHTML = "Waktu Anda Habis!";
    }
}, 1000)


// console.log(sekarang); ->> cara nampilin di console


