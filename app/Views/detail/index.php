<?= $this->extend('layout/index'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="card mt-2">
        <div class="card-content">
            <span class="card-title">Informasi</span>
            <p>Aplikasi Survey ini di bangun untuk kepetingan tugas pemograman web.</p>
            <span class="card-title mt-2">Spesifikasi :</span>

            <table class="striped">
                <tr>
                    <td>Author</td>
                    <td>Dendi 180155201029</td>
                </tr>
                <tr>
                    <td>Bahasa</td>
                    <td>Javascript, PHP</td>
                </tr>
                <tr>
                    <td>Framework</td>
                    <td>CodeIgniter 4</td>
                </tr>
                <tr>
                    <td>Library</td>
                    <td>Chart Js, Materialize CSS</td>
                </tr>
                <tr>
                    <td>Database</td>
                    <td>Mysql (mariadb) / xampp</td>
                </tr>
                <tr>
                    <td>Di bangun pada</td>
                    <td>26 Desember 2020</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>