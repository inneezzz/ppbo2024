<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama anda : ');
$waktu = date('H');
$waktu_menit = date('i');
$waktu_detik = date('s');

if ($waktu>=19){
    echo "Selamat Malam, {$nama}, sekarang pukul {$waktu}:{$waktu_menit}:{$waktu_detik}";

} elseif ($waktu>=15){
    echo "Selamat Sore, {$nama}, sekarang pukul {$waktu}:{$waktu_menit}:{$waktu_detik}";

} elseif ($waktu>=11) {
    echo "Selamat Siang, {$nama}, sekarang pukul {$waktu}:{$waktu_menit}:{$waktu_detik}";

} elseif ($waktu>=5){
    echo "Selamat Pagi, {$nama}, sekarang pukul {$waktu}:{$waktu_menit}:{$waktu_detik}";
    
} else{
    echo "Selamat Malam, {$nama}, sekarang pukul {$waktu}:{$waktu_menit}:{$waktu_detik}";
}
?>