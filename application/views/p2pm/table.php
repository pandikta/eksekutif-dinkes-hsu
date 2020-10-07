<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="col-lg-3">
        <?= $this->session->flashdata('message'); ?>
    </div>
    <div class="col-lg-5">
        <a href="<?= base_url('p2pm') ?>" class="btn btn-primary">Tambah Data Baru</a>
        <a href="" class="btn badge-danger m-3" data-toggle="modal" data-target="#deleteModal">Hapus berdasarkan tahun</a>
    </div>
    <br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3" style="background-color: #7fdbb6;">
            <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" cellspacing="0">
                    <thead>
                        <tr>
                            <th rowspan="2" style="vertical-align:middle">#</th>
                            <th rowspan="2" style="vertical-align:middle">Indikator</th>
                            <th rowspan="2" style="vertical-align:middle">Sasaran</th>
                            <th rowspan="2" style="vertical-align:middle">Target</th>
                            <th colspan="12" style="text-align:center">Bulan</th>
                            <th rowspan="2" style="vertical-align:middle">Jumlah</th>
                            <th rowspan="2" style="vertical-align:middle">%</th>
                            <th rowspan="2" style="vertical-align:middle">Tahun</th>
                            <th rowspan="2" style="vertical-align:middle">Action</th>
                        </tr>
                        <tr>
                            <th>1</>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                            <th>8</th>
                            <th>9</th>
                            <th>10</th>
                            <th>11</th>
                            <th>12</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>indikator</th>
                            <th>Sasaran</th>
                            <th>Target</th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                            <th>8</th>
                            <th>9</th>
                            <th>10</th>
                            <th>11</th>
                            <th>12</th>
                            <th>Jumlah</th>
                            <th>%</th>
                            <th>Tahun</th>
                            <th>Action</th>
                        </tr>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($table as $t) :
                            $indikator = $t['indikator']; ?>

                            <tr>
                                <th scope="row"><?= array_search($t, $table) + 1; ?></th>
                                <th scope="row"><?= wordwrap($indikator, 50, "<br>\n"); ?></th>
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

                                <td>
                                    <a href="" type="button" class="badge badge-pill badge-success" data-toggle="modal" data-target="#editModal<?= $t['id']; ?>"><i class="fas fa-edit"></i></a>
                                    <a href="<?= base_url('p2pm/deletedatabyid/') . $t['id']; ?>" class="badge badge-pill badge-danger" onclick="return confirm('Anda yakin ingin menghapusnya ?')"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Delete -->
    <?php foreach ($table as $t) : ?>
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newRoleModalLabel">Hapus berdasarkan tahun</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- base url mengarah ke folder admin lalu ke file role -->
                        <form action="<?= base_url('p2pm/deleteDataByYear/'); ?>" method="post">

                            <div class="form-group">
                                <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Input Year">
                            </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="Submit" class="btn btn-primary">Delete </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach ?>


    <!-- Modal Edit -->
    <?php foreach ($table as $t) : ?>
        <div class="modal fade" id="editModal<?= $t['id']; ?>" role="dialog" aria-labelledby="editModalLabel<?= $t['id']; ?>" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newRoleModalLabel">Edit Data Indikator <?= $t['indikator']; ?> </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- base url mengarah ke folder admin lalu ke file role -->
                        <form action="<?= base_url('p2pm/edit/' . $t['id']); ?>" method="post">

                            <div class="form-group">

                                <input type="text" class="form-control" id="indikator" name="indikator" value="<?= $t['indikator']; ?>">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" id="sasaran" name="sasaran" value="<?= $t['sasaran']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="target" name="target" value="<?= $t['target']; ?>">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" id="bulan_1" name="bulan_1" value="<?= $t['bulan_1']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="bulan_2" name="bulan_2" value="<?= $t['bulan_2']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="bulan_3" name="bulan_3" value="<?= $t['bulan_3']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="bulan_4" name="bulan_4" value="<?= $t['bulan_4']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="bulan_5" name="bulan_5" value="<?= $t['bulan_5']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="bulan_6" name="bulan_6" value="<?= $t['bulan_6']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="bulan_7" name="bulan_7" value="<?= $t['bulan_7']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="bulan_8" name="bulan_8" value="<?= $t['bulan_8']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="bulan_9" name="bulan_9" value="<?= $t['bulan_9']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="bulan_10" name="bulan_10" value="<?= $t['bulan_10']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="bulan_11" name="bulan_11" value="<?= $t['bulan_11']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="bulan_12" name="bulan_12" value="<?= $t['bulan_12']; ?>">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="Submit" class="btn btn-primary">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach ?>


    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'print', 'pdf'
                ]
            });
        });
    </script>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->