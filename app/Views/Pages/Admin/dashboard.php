<body>
        <?= $this->include('Components/admin/head'); ?>
        <?= $this->include('Components/admin/navbar'); ?>
    
        <div class="container p-3">
            <div style="border-left: 5px solid blue; border-radius: 5px;" class="p-3">
                <h3><b>Total Scholar<b></h3>
                <p>Total Scholars: <?php echo $res["total_scolar"] ?></p>
            </div>
            <center>
                <div style="width:50%" class="p-5">
                    <canvas id="myChart"></canvas>
                </div>
            </center>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [
                    'ODSP',
                    'ODSP+',
                    'EDSP',
                    "EDSP+",
                    "ELAP",
                ],
                datasets: [{
                    label: 'Total',
                    data: [ <?php echo $res["odsp"] . "," . $res["odsp_plus"] . "," . $res["edpse"] . "," . $res["edpse_plus"] . "," . $res["ELAP"]; ?> ],

                    backgroundColor: [
                        'rgb(92, 255, 143)',
                        'rgb(255, 108, 92)',
                        'rgb(255, 255, 92)',
                        'rgb(92, 233, 255)',
                        'rgb(228, 92, 255)'
                    ],
                    hoverOffset: 4
                }]
            }
        });
    </script>
    
    <?= $this->include('Components/admin/script'); ?>
    
</body>

</html>