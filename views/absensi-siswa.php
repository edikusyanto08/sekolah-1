<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

require_once 'inc/auth.php';

include 'inc/header.php';
include 'inc/navbar.php';
?>

<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>Absensi Siswa</h1>
        </div>

        <div class="form-horizontal">
            tampilkan per hari ini

            Tanggal
            Data Grid
            filter/search
             - kelas
             - nama
            rekap absen per siswa
        </div>
    </div>
</div>

<?php
include 'inc/footer.php';
