<?php $__env->startSection('title','Dashboard'); ?>
<?php $__env->startSection('dashboard','active'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('includes.page-title',['title' => 'Dashboard','paragraph' => 'Melihat statistik cafe'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section class="section">
    <div class="row mb-2">
        <div class="col-12 col-md-4">
            <div class="card card-statistic">
                <div class="card-body p-0">
                    <div class="d-flex flex-column">
                        <div class="px-3 py-3 d-flex justify-content-between">
                            <h3 class="card-title">
                                Pendapatan
                            </h3><br>
                            <div class="card-right d-flex align-items-center">
                                <p>Rp.
                                    <?php if(count($incomes) > 0): ?>
                                    <?php echo e(number_format($incomes[count($incomes) - 1]->total_incomes,0) ?? 0); ?>

                                    <?php else: ?>
                                    0

                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                        <div class="chart-wrapper">
                            <canvas id="canvas1" style="
                                    height: 100px !important;
                                "></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card card-statistic">
                <div class="card-body p-0">
                    <div class="d-flex flex-column">
                        <div class="px-3 py-3 d-flex justify-content-between">
                            <h3 class="card-title">
                                Transaksi
                            </h3>
                            <div class="card-right d-flex align-items-center">
                                <p><?php echo e($transactions[0]->total_transaction  ?? 0); ?></p>
                            </div>
                        </div>
                        <div class="chart-wrapper">
                            <canvas id="canvas2" style="
                                    height: 100px !important;
                                "></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card card-statistic">
                <div class="card-body p-0">
                    <div class="d-flex flex-column">
                        <div class="px-3 py-3 d-flex justify-content-between">
                            <h3 class="card-title">
                                Menu
                            </h3>
                            <div class="card-right d-flex align-items-center">
                                <p><?php echo e($menus); ?></p>
                            </div>
                        </div>
                        <div class="chart-wrapper">
                            <canvas id="canvas3" style="
                                    height: 100px !important;
                                "></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-heading p-1 pl-3">
                        Pengeluaran bahan-bahan bulan ini
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class=" col-12">
                            <canvas id="bar"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-heading p-1 pl-3">
                        Pemasukan bahan-bahan bulan ini
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class=" col-12">
                            <canvas id="bar-pemasukan"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    var config1 = {
        type: "line",
        data: {
            labels: [
               <?php $__currentLoopData = $incomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $income): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                '<?php echo e($income->month); ?>',
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ],
            datasets: [
                {
                    label: "Jumlah",
                    backgroundColor: "#fff",
                    borderColor: "#fff",
                    data: [
                        <?php $__currentLoopData = $incomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $income): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            '<?php echo e($income->total_incomes); ?>',
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ],
                    fill: false,
                    pointBorderWidth: 100,
                    pointBorderColor: "transparent",
                    pointRadius: 3,
                    pointBackgroundColor: "transparent",
                    pointHoverBackgroundColor: "rgba(63,82,227,1)",
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: -10,
                    top: 10,
                },
            },
            legend: {
                display: false,
            },
            title: {
                display: false,
            },
            tooltips: {
                mode: "index",
                intersect: false,
                callbacks: {
                label: function(tooltipItem, chart){
                    var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                    return datasetLabel + ': Rp. ' + number_format(tooltipItem.yLabel, 0);
                }
            },
            },
            hover: {
                mode: "nearest",
                intersect: true,
            },
            scales: {
                xAxes: [
                    {
                        gridLines: {
                            drawBorder: false,
                            display: false,
                        },
                        ticks: {
                            display: false,
                        },
                    },
                ],
                yAxes: [
                    {
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            display: false,
                        },
                    },
                ],
            },
        },
    };
    
    var config2 = {
        type: "line",
        data: {
            labels: [
                <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                '<?php echo e($transaction->month); ?>',
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ],
            datasets: [
                {
                    label: "Transaksi",
                    backgroundColor: "#fff",
                    borderColor: "#fff",
                    data: [
                        <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            '<?php echo e($transaction->total_transaction); ?>',
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ],
                    fill: false,
                    pointBorderWidth: 100,
                    pointBorderColor: "transparent",
                    pointRadius: 3,
                    pointBackgroundColor: "transparent",
                    pointHoverBackgroundColor: "rgba(63,82,227,1)",
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: -10,
                    top: 10,
                },
            },
            legend: {
                display: false,
            },
            title: {
                display: false,
            },
            tooltips: {
                mode: "index",
                intersect: false,
            },
            hover: {
                mode: "nearest",
                intersect: true,
            },
            scales: {
                xAxes: [
                    {
                        gridLines: {
                            drawBorder: false,
                            display: false,
                        },
                        ticks: {
                            display: false,
                        },
                    },
                ],
                yAxes: [
                    {
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            display: false,
                        },
                    },
                ],
            },
        },
    };

    var config3 = {
        type: "line",
        data: {
            labels: [
                "Menu",
                "Menu",
                "Menu",
                "Menu"
            ],
            datasets: [
                {
                    label: "menu",
                    backgroundColor: "#fff",
                    borderColor: "#fff",
                    data: [25, 40, 20, 52],
                    fill: false,
                    pointBorderWidth: 100,
                    pointBorderColor: "transparent",
                    pointRadius: 3,
                    pointBackgroundColor: "transparent",
                    pointHoverBackgroundColor: "rgba(63,82,227,1)",
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: -10,
                    top: 10,
                },
            },
            legend: {
                display: false,
            },
            title: {
                display: false,
                text: "Chart.js Line Chart",
            },
            tooltips: {
                mode: "index",
                intersect: false,
            },
            hover: {
                mode: "nearest",
                intersect: true,
            },
            scales: {
                xAxes: [
                    {
                        gridLines: {
                            drawBorder: false,
                            display: false,
                        },
                        ticks: {
                            display: false,
                        },
                    },
                ],
                yAxes: [
                    {
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            display: false,
                        },
                    },
                ],
            },
        },
    };
    let ctx1 = document.getElementById("canvas1").getContext("2d");
    let incomeChart = new Chart(ctx1, config1);

    let ctx2 = document.getElementById("canvas2").getContext("2d");
    let transaction_total_chart = new Chart(ctx2, config2);

    let ctx3 = document.getElementById("canvas3").getContext("2d");
    let menus_chart = new Chart(ctx3, config3);

    let ctxBar = document.getElementById("bar").getContext("2d");
    let myBar = new Chart(ctxBar, {
        type: "bar",
        data: {
            labels: [
                <?php $__currentLoopData = $totalIngredients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    "<?php echo e($key); ?>",
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ],
            datasets: [
                {
                    label: "Terpakai",
                    backgroundColor: [
                        <?php $__currentLoopData = $sumIngredients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $total): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            getRandomColor(),
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ],
                    data: [
                        <?php $__currentLoopData = $sumIngredients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $total): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            "<?php echo e($total); ?>",
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ],
                },
            ],
        },
        options: {
            responsive: true,
            barRoundness: 1,
            title: {
                display: false,
                text:
                    "Chart.js - Bar Chart with Rounded Tops (drawRoundedTopRectangle Method)",
            },
            legend: {
                display: false,
            },
            scales: {
                yAxes: [
                    {
                        ticks: {
                            suggestedMax: 40 + 20,
                            padding: 10,
                            callback: function(value, index, values) {
                                return  Math.floor(value) + 'gr'; 
                            },
                            stepSize:100
                        },
                        gridLines: {
                            drawBorder: false,
                        },
                    },
                ],
                xAxes: [
                    {
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                    },
                ],
            },
        },
    });

    let ingredientCome = document.getElementById("bar-pemasukan").getContext("2d");
    let ingredientChart = new Chart(ingredientCome, {
        type: "bar",
        data: {
            labels: [
                <?php $__currentLoopData = $ingredientCome; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ingredient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    "<?php echo e($ingredient->name); ?>",
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            ],
            datasets: [
                {
                    label: "Masuk",
                    backgroundColor: [
                        <?php $__currentLoopData = $ingredientCome; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $total): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            getRandomColor(),
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ],
                    data: [
                        <?php $__currentLoopData = $ingredientCome; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ingredient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            "<?php echo e($ingredient->stock); ?>",
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ],
                },
            ],
        },
        options: {
            responsive: true,
            barRoundness: 1,
            title: {
                display: false,
                text:
                    "Chart.js - Bar Chart with Rounded Tops (drawRoundedTopRectangle Method)",
            },
            legend: {
                display: false,
            },
            scales: {
                yAxes: [
                    {
                        ticks: {
                            
                            suggestedMax: 40 + 20,
                            padding: 10,
                            callback: function(value, index, values) {
                                return  Math.floor(value) + 'gr'; 
                            },
                            stepSize:100
                        },
                        gridLines: {
                            drawBorder: false,
                        },
                        
                    },
                ],
                xAxes: [
                    {
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                    },
                ],
            },
        },
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/admin/Desktop/Cafe-POS/Cafe-POS/resources/views/pages/admin/dashboard/index.blade.php ENDPATH**/ ?>