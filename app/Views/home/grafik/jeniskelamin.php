<canvas id="jenisKelamin" width="100%" class="mt-2"></canvas>

<script>
    var ctx = document.getElementById('jenisKelamin');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['laki-laki', 'perempuan'],
            datasets: [{
                label: 'Jenis Kelamin',
                data: [<?= $pria; ?>, <?= $wanita; ?>],
                backgroundColor: [
                    '#039be5',
                    '#d81b60',
                ],
                borderWidth: 1
            }]
        }
    });
</script>