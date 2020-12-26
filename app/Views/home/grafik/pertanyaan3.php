<canvas id="pertanyaan3" width="100%" class="mt-2"></canvas>

<script>
    var ctx = document.getElementById('pertanyaan3');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['ya', 'tidak'],
            datasets: [{
                label: 'Mengetahui PHP',
                data: [<?= $p3Ya; ?>, <?= $p3Tidak; ?>],
                backgroundColor: [
                    '#039be5',
                    '#e53935',
                ],
                borderWidth: 1
            }]
        }
    });
</script>