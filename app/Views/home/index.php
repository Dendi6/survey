<?= $this->extend('layout/index'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="center mt-2">
        <button data-target="modal1" class="btn modal-trigger light-blue darken-1">Ikuti Survei</button>
    </div>

    <?php if (session()->getFlashdata('pesan')) : ?>
        <nav class="mt-2 green">
            <div class="nav-wrapper">
                <div class="col s12">
                    <a href="#!" class="breadcrumb"> <?= session()->getFlashdata('pesan'); ?></a>
                </div>
            </div>
        </nav>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')) : ?>
        <nav class="mt-2 red">
            <div class="nav-wrapper">
                <div class="col s12">
                    <a href="#!" class="breadcrumb"> <?= session()->getFlashdata('error'); ?></a>
                </div>
            </div>
        </nav>
    <?php endif; ?>

    <?= $this->include('home/grafik/index'); ?>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content row">
            <!-- memanggil form  -->
            <?= $this->include('home/form'); ?>

        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        M.Modal.init(elems);

        var select = document.querySelectorAll('select');
        M.FormSelect.init(select);
    });
</script>

<?= $this->endSection(); ?>