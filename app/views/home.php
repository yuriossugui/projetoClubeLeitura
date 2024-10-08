<?php $this->layout("master"); ?>

<link rel="stylesheet" href="/css/home.css">


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
        responsive: false, // Set responsive to false to disable responsiveness
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>