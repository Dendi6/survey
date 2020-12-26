<style>
</style>

<nav class="light-blue darken-1">
    <div class="container">
        <div class="nav-wrapper">
            <a href="<?= base_url('home'); ?>" class="brand-logo left"><i class="material-icons">all_inclusive</i></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="<?= base_url('home'); ?>">Beranda</a></li>
                <li><a href="<?= base_url('riwayat'); ?>">Riwayat</a></li>
                <li><a href="<?= base_url('detail'); ?>">Detail</a></li>
            </ul>
        </div>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="<?= base_url('home'); ?>">Beranda</a></li>
    <li><a href="<?= base_url('riwayat'); ?>">Riwayat</a></li>
    <li><a href="<?= base_url('detail'); ?>">Detail</a></li>
</ul>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        M.Sidenav.init(elems);
    });
</script>