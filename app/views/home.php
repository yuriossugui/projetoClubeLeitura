<?php $this->layout("master"); ?>

<link rel="stylesheet" href="/css/content.css">

<div class="d-flex justify-content-center mt-5">
    <canvas id="dashboard"></canvas>
</div>


<script>
    //grafico
    const ctx = document.getElementById('dashboard');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            responsive: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>