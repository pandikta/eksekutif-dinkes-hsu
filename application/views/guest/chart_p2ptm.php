<!-- Begin Page Content -->
<div class="container-fluid">



    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-8 col-lg-7 al">

            <!-- Chart Kefarmasian -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
                </div>
                <div class="card-body">
                    <?php

                    $this->db->select('indikator, target , (bulan_1 + bulan_2 + bulan_3 + bulan_4 + bulan_5 + bulan_6 + bulan_7 + bulan_8 + bulan_9 + bulan_10 + bulan_11 + bulan_12) as jumlah , 
((bulan_1 + bulan_2 + bulan_3 + bulan_4 + bulan_5 + bulan_6 + bulan_7 + bulan_8 + bulan_9 + bulan_10 + bulan_11 + bulan_12)/sasaran)*(100) as persentasi');
                    //  $this->db->where('indikator', 'Persentase puskesmas perawatan yang melaksanakan pelayanan kefarmasian sesuai standar');
                    $Chartpencapain = $this->db->get('p2ptm')->result();
                    foreach ($Chartpencapain as $chart => $c) {
                        $arrPencapaian[] = ['label' => $c->indikator, 'y' => $c->persentasi];
                    }
                    // print_r(json_encode($arrPencapaian, JSON_NUMERIC_CHECK));
                    // die();
                    ?>

                    <script>
                        window.onload = function() {

                            var chart = new CanvasJS.Chart("chartKefarmasian", {
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
                                toolTip: {
                                    shared: true
                                },

                                data: [{
                                    type: "column", //change type to bar, line, area, pie, etc
                                    //indexLabel: "{y}", //Shows y value on all Data Points
                                    indexLabelFontColor: "#5A5757",
                                    indexLabelFontSize: 16,
                                    indexLabelPlacement: "outside",
                                    yValueFormatString: "#,##0.0#\"%\"",
                                    dataPoints: <?= json_encode($arrPencapaian, JSON_NUMERIC_CHECK); ?>
                                }]
                            });

                            chart.render();
                        }
                    </script>
                    <div id="chartKefarmasian" style="height: 370px; width: 100%; text-align:center"></div>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->