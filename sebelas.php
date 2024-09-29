<?php 

use App\Model\Akademik\Dosen;

require_once 'vendor/autoload.php';

$dian = new Dosen(
    nama : "Dian Prawira",
    nip : 198411132015041001,
    no_hp : 62111111,
    alamat : "Jln Purnama",
    nidn : "1000121184001"
);

$dian->mengajar();
$dian->nidn = "1000121184001";
$dian->getNoHp();