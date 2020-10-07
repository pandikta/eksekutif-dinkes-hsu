<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800" style="text-align: center;"><?= $title; ?></h1>



    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-8 col-lg-7">

            <?php

            $this->db->select('indikator, target , (bulan_1 + bulan_2 + bulan_3 + bulan_4 + bulan_5 + bulan_6 + bulan_7 + bulan_8 + bulan_9 + bulan_10 + bulan_11 + bulan_12) as jumlah , 
((bulan_1 + bulan_2 + bulan_3 + bulan_4 + bulan_5 + bulan_6 + bulan_7 + bulan_8 + bulan_9 + bulan_10 + bulan_11 + bulan_12)/sasaran)*(100) as persentasi');
            $Chartpencapain = $this->db->get('yankes')->result();
            foreach ($Chartpencapain as $chart => $c) {
                $arrPencapaian[] = ['label' => $c->indikator, 'y' => $c->persentasi];
            }
            // print_r(json_encode($arrPencapaian, JSON_NUMERIC_CHECK));
            // die();
            ?>

            <script>
                window.onload = function() {

                    var chart = new CanvasJS.Chart("chartContainer", {
                        animationEnabled: true,
                        exportEnabled: true,
                        theme: "light2", // "light1", "light2", "dark1", "dark2"
                        title: {
                            text: "Grafik Persentasi Pencapaian"
                        },
                        axisX: {
                            title: "Indikator"
                        },
                        axisY: {
                            title: "Persentasi",
                            titleFontColor: "#4F81BC",
                            lineColor: "#4F81BC",
                            labelFontColor: "#4F81BC",
                            tickColor: "#4F81BC",
                            suffix: "%"
                        },
                        data: [{
                            type: "column", //change type to bar, line, area, pie, etc
                            //indexLabel: "{y}", //Shows y value on all Data Points
                            indexLabelFontColor: "#5A5757",
                            indexLabelFontSize: 16,
                            indexLabelPlacement: "outside",
                            yValueFormatString: "#,##0.0#\"%\"",
                            // dataPoints: [{
                            //         x: 50,
                            //         y: 92,
                            //         indexLabel: "\u2605 Highest"
                            //     },
                            //     
                            //     {
                            //         x: 90,
                            //         y: 54
                            //     },

                            //     {
                            //         x: 130,
                            //         y: 21,
                            //         indexLabel: "\u2691 Lowest"
                            //     }
                            // ]
                            dataPoints: <?= json_encode($arrPencapaian, JSON_NUMERIC_CHECK); ?>

                        }]
                    });
                    chart.render();

                }
            </script>
        </div>
        <!-- canvas js -->
        <div id="chartContainer" style="height: 370px; width: 100%; text-align:center"></div>
    </div>


</div> <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->