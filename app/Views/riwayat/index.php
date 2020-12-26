<?= $this->extend('layout/index'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="card mt-2">
        <div class="card-content">
            <table class="striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Waktu Survey</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($riwayat as $r) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $r['nim']; ?></td>
                            <td><?= $r['nama']; ?></td>
                            <td><?= $r['gender']; ?></td>
                            <td><?= $r['created_at']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>