<!-- CONTENT HALAMAN UTAMA -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-4 ">
            <form action="<?= base_url('survimun/changepassword') ?>" method="post">
                <?= $this->session->flashdata('message'); ?>

                <div class="form-group row">
                    <label for="current_password">Current Password</label>
                    <input type="password" class="form-control" id="current_password" name="current_password" value="">
                    <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>


                <div class="form-group row">
                    <label for="new_password1">New Password</label>
                    <input type="password" class="form-control" id="new_password1" name="new_password1" value="">
                    <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>


                <div class="form-group row">
                    <label for="new_password2">Repeat Password</label>
                    <input type="password" class="form-control" id="new_password2" name="new_password2" value="">
                    <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </div>


            </form>


        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->