<canvas id="pertanyaan2" width="100%" class="mt-2"></canvas>

<script>
    var ctx = document.getElementById('pertanyaan2');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['ya', 'tidak'],
            datasets: [{
                label: 'Mengetahui PHP',
                data: [<?= $p2Ya; ?>, <?= $p2Tidak; ?>],
                backgroundColor: [
                    '#039be5',
                    '#e53935',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>