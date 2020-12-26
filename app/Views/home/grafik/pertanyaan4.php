<canvas id="pertanyaan4" width="100%" class="mt-2"></canvas>

<script>
    var ctx = document.getElementById('pertanyaan4');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Tidak Pernah', 'CodeIgniter', 'Laravel', 'keduanya'],
            datasets: [{
                label: 'survey pengetahuan',
                data: [<?= $p4satu; ?>, <?= $p4dua; ?>, <?= $p4tiga; ?>, <?= $p4empat; ?>],
                backgroundColor: [
                    '#e53935',
                    '#f4511e',
                    '#fb8c00',
                    '#43a047',
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