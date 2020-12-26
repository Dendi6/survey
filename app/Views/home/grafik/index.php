<style>
    .card {
        border-radius: 10px;
    }
</style>
<div class="row mt-2">
    <!-- jenis kelamin -->
    <div class="col s12 m6">
        <div class="card">
            <div class="card-content">
                <p><b>Jenis Kelamin yang Mengikuti Survey.</b></p>
                <?= $this->include('home/grafik/jeniskelamin'); ?>
            </div>
        </div>
    </div>
    <!-- akhir jenis kelamin -->
    <!-- pertanyaan 1 -->
    <div class="col s12 m6">
        <div class="card">
            <div class="card-content">
                <p><b>Tahukah anda tentang bahasa pemogramanan PHP ?</b></p>
                <?= $this->include('home/grafik/pertanyaan1'); ?>
            </div>
        </div>
    </div>
    <!-- akhir pertanyaan 1 -->
    <!-- pertanyaan 2 -->
    <div class="col s12 m6">
        <div class="card">
            <div class="card-content">
                <p><b>Pernahkan anda membuat program menggunakan bahasa PHP ?</b></p>
                <?= $this->include('home/grafik/pertanyaan2'); ?>
            </div>
        </div>
    </div>
    <!-- akhir pertanyaan 2 -->
    <!-- pertanyaan 3 -->
    <div class="col s12 m6">
        <div class="card">
            <div class="card-content">
                <p><b>Tahukah anda PHP terdiri dari banyak framework ?</b><br>show</p>
                <?= $this->include('home/grafik/pertanyaan3'); ?>
            </div>
        </div>
    </div>
    <!-- akhir pertanyaan 3 -->
    <!-- pertanyaan 4 -->
    <div class="col s12 m12">
        <div class="card">
            <div class="card-content">
                <p><b>Framework yang pernah anda kenali ?</b></p>
                <?= $this->include('home/grafik/pertanyaan4'); ?>
            </div>
        </div>
    </div>
    <!-- akhir pertanyaan 4 -->
</div>