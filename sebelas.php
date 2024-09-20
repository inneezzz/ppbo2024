<?php 

require_once 'vendor/autoload.php';

use App\Admin\Dosen;

$dian = new Dosen(
    nama : "Dian Prawira",
    nip : 198411132015041001,
    no_hp : 62111111,
    alamat : "Jln Purnama",
    nidn : "0013118405"
);

$dian->mengajar();