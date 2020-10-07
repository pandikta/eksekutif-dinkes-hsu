<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="col-lg-3">
        <?= $this->session->flashdata('message'); ?>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>

        </div>

        <div class="card-body">

            <div class="table-responsive">
                <!-- <a href="<?//= base_url('p2pm/print') ?>" class="btn btn-dark " target="_blank"><i class="fa fa-print"></i> Print</a>
                <a href="<?//= base_url('p2pm/report_pdf') ?>" class="btn btn-dark " target="_blank"><i class="fa fa-file-pdf"></i> PDF</a>
                <a href="<?//= base_url('p2pm/report_pdf') ?>" class="btn btn-dark " target="_blank"><i class="fa fa-file-excel"></i> Excel</a> -->
                <table class="table table-bordered" id="dataTable" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>indikator</th>
                            <th>Sasaran</th>
                            <th>Target</th>
                            <th>Bulan Ke 1</th>
                            <th>Bulan Ke 2</th>
                            <th>Bulan Ke 3</th>
                            <th>Bulan Ke 4</th>
                            <th>Bulan Ke 5</th>
                            <th>Bulan Ke 6</th>
                            <th>Bulan Ke 7</th>
                            <th>Bulan Ke 8</th>
                            <th>Bulan Ke 9</th>
                            <th>Bulan Ke 10</th>
                            <th>Bulan Ke 11</th>
                            <th>Bulan Ke 12</th>
                            <th>Jumlah</th>
                            <th>%</th>
                            <th>Tahun</th>

                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>indikator</th>
                            <th>Sasaran</th>
                            <th>Target</th>
                            <th>Bulan Ke 1</th>
                            <th>Bulan Ke 2</th>
                            <th>Bulan Ke 3</th>
                            <th>Bulan Ke 4</th>
                            <th>Bulan Ke 5</th>
                            <th>Bulan Ke 6</th>
                            <th>Bulan Ke 7</th>
                            <th>Bulan Ke 8</th>
                            <th>Bulan Ke 9</th>
                            <th>Bulan Ke 10</th>
                            <th>Bulan Ke 11</th>
                            <th>Bulan Ke 12</th>
                            <th>Jumlah</th>
                            <th>%</th>
                            <th>Tahun</th>


                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($table as $t) : ?>

                            <tr>
                                <th scope="row"><?= array_search($t, $table) + 1; ?></th>
                                <th scope="row"><?= $t['indikator']; ?></th>
                                <th scope="row"><?= $t['sasaran']; ?></th>
                                <th scope="row"><?= $t['target'] . "%"; ?></th>
                                <th scope="row"><?= $t['bulan_1']; ?></th>
                                <th scope="row"><?= $t['bulan_2']; ?></th>
                                <th scope="row"><?= $t['bulan_3']; ?></th>
                                <th scope="row"><?= $t['bulan_4']; ?></th>
                                <th scope="row"><?= $t['bulan_5']; ?></th>
                                <th scope="row"><?= $t['bulan_6']; ?></th>
                                <th scope="row"><?= $t['bulan_7']; ?></th>
                                <th scope="row"><?= $t['bulan_8']; ?></th>
                                <th scope="row"><?= $t['bulan_9']; ?></th>
                                <th scope="row"><?= $t['bulan_10']; ?></th>
                                <th scope="row"><?= $t['bulan_11']; ?></th>
                                <th scope="row"><?= $t['bulan_12']; ?></th>
                                <th scope="row"><?= round($t['jumlah'], 3); ?></th>
                                <th scope="row"><?= round($t['persentasi'], 3); ?></th>
                                <th scope="row"><?= $t['tahun']; ?></th>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        // exportOptions: {
                        //     columns: ':visible'
                        // }
                    },
                    'colvis'
                ],
                columnDefs: [{
                    targets: -1,
                    visible: false
                }]
            });
        });
    </script> -->


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->