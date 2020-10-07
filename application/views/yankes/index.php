<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="col-lg-3">
        <?= $this->session->flashdata('message'); ?>
    </div>

    <button type="button" name="add" id="add" class="btn btn-success">Masukkan lebih</button>
    <p>*Semua form wajib diisi semua<br>*Jika terdapat data kosong maka masukkan data dengan angka 0</p>

    <form id="forminput" action="<?= base_url('yankes/index'); ?>" method="post">

        <br>
        <table class="table col-lg-12" id="dynamic_field">

            <tr>
                <th scope="col">#</th>
                <th scope="col" style="width: 400px;">Indikator</th>
                <th scope="col">Sasaran</th>
                <th scope="col">Target</th>
                <th scope="col">Bulan Ke 1</th>
                <th scope="col">Bulan Ke 2</th>
                <th scope="col">Bulan Ke 3</th>
                <th scope="col">Bulan Ke 4</th>
                <th scope="col">Bulan Ke 5</th>
                <th scope="col">Bulan Ke 6</th>
                <th scope="col">Bulan Ke 7</th>
                <th scope="col">Bulan Ke 8</th>
                <th scope="col">Bulan Ke 9</th>
                <th scope="col">Bulan Ke 10</th>
                <th scope="col">Bulan Ke 11</th>
                <th scope="col">Bulan Ke 12</th>
            </tr>


            <tr id="row">
                <td>1</td>
                <td>
                    <input type="text" class="form-control" id="indikator[]" name="indikator[]">
                    <?= form_error('indikator[]', '<small class="text-danger pl-3">', '</small>'); ?>
                </td>
                <td>
                    <input type="text" class="form-control" id="sasaran[]" name="sasaran[]">
                    <?= form_error('sasaran[]', '<small class="text-danger pl-3">', '</small>'); ?>
                </td>
                <td>
                    <input type="text" class="form-control" id="target[]" name="target[]">
                    <?= form_error('target[]', '<small class="text-danger pl-3">', '</small>'); ?>
                </td>
                <td>
                    <input type="text" class="form-control" id="bulan_1[]" name="bulan_1[]">
                    <?= form_error('bulan_1[]', '<small class="text-danger pl-3">', '</small>'); ?>
                </td>

                <td>
                    <input type="text" class="form-control" id="bulan_2[]" name="bulan_2[]">
                    <?= form_error('bulan_2[]', '<small class="text-danger pl-3">', '</small>'); ?>
                </td>
                <td>
                    <input type="text" class="form-control" id="bulan_3[]" name="bulan_3[]">
                    <?= form_error('bulan_3[]', '<small class="text-danger pl-3">', '</small>'); ?>
                </td>
                <td>
                    <input type="text" class="form-control" id="bulan_4[]" name="bulan_4[]">
                    <?= form_error('bulan_4[]', '<small class="text-danger pl-3">', '</small>'); ?>
                </td>
                <td>
                    <input type="text" class="form-control" id="bulan_5[]" name="bulan_5[]">
                    <?= form_error('bulan_5[]', '<small class="text-danger pl-3">', '</small>'); ?>
                </td>
                <td>
                    <input type="text" class="form-control" id="bulan_6[]" name="bulan_6[]">
                    <?= form_error('bulan_6[]', '<small class="text-danger pl-3">', '</small>'); ?>
                </td>
                <td>
                    <input type="text" class="form-control" id="bulan_7[]" name="bulan_7[]">
                    <?= form_error('bulan_7[]', '<small class="text-danger pl-3">', '</small>'); ?>
                </td>
                <td>
                    <input type="text" class="form-control" id="bulan_8[]" name="bulan_8[]">
                    <?= form_error('bulan_8[]', '<small class="text-danger pl-3">', '</small>'); ?>
                </td>
                <td>
                    <input type="text" class="form-control" id="bulan_9[]" name="bulan_9[]">
                    <?= form_error('bulan_9[]', '<small class="text-danger pl-3">', '</small>'); ?>
                </td>
                <td>
                    <input type="text" class="form-control" id="bulan_10[]" name="bulan_10[]">
                    <?= form_error('bulan_10[]', '<small class="text-danger pl-3">', '</small>'); ?>
                </td>
                <td>
                    <input type="text" class="form-control" id="bulan_11[]" name="bulan_11[]">
                    <?= form_error('bulan_11[]', '<small class="text-danger pl-3">', '</small>'); ?>
                </td>
                <td>
                    <input type="text" class="form-control" id="bulan_12[]" name="bulan_12[]">
                    <?= form_error('bulan_12[]', '<small class="text-danger pl-3">', '</small>'); ?>
                </td>
                <td>
                    <input type="hidden" class="form-control" id="tahun[]" name="tahun[]" value="<?= date("Y"); ?>">

                </td>
                <td></td>
            </tr>


        </table>

        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>

    <script>
        $(document).ready(function() {
            var i = 1;
            $('#add').click(function() {
                i++;
                $('#dynamic_field').append('<tr id="row' + i + '"> <td>' + i + '</td> <td><input type="text" class="form-control" id="indikator[]" name="indikator[]"></td> <td><input type="text" class="form-control" id="sasaran[]" name="sasaran[]"></td> <td><input type="text" class="form-control" id="target[]" name="target[]"></td><td><input type="text" class="form-control" id="bulan_1[]" name="bulan_1[]"></td> <td><input type="text" class="form-control" id="bulan_2[]" name="bulan_2[]"></td> <td><input type="text" class="form-control" id="bulan_3[]" name="bulan_3[]"></td> <td><input type="text" class="form-control" id="bulan_4[]" name="bulan_4[]"></td> <td><input type="text" class="form-control" id="bulan_5[]" name="bulan_5[]"></td> <td><input type="text" class="form-control" id="bulan_6[]" name="bulan_6[]"></td>  <td><input type="text" class="form-control" id="bulan_7[]" name="bulan_7[]"></td> <td><input type="text" class="form-control" id="bulan_8[]" name="bulan_8[]"></td> <td><input type="text" class="form-control" id="bulan_9[]" name="bulan_9[]"></td> <td><input type="text" class="form-control" id="bulan_10[]" name="bulan_10[]"></td> <td><input type="text" class="form-control" id="bulan_11[]" name="bulan_11[]"></td> <td><input type="text" class="form-control" id="bulan_12[]" name="bulan_12[]"></td> <td><input type="hidden" class="form-control" id="tahun[]" name="tahun[]" value="<?= date("Y"); ?>"></td> <td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td> </tr>');
            });

            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();

            });

        });
    </script>


</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->