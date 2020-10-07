<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Manage User</h1>


    <div class="row">
        <div class="col-lg">
            <div class="col-lg-4">
                <?= $this->session->flashdata('message'); ?>
            </div>

            <!-- Alert jika data input kosong -->
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger col-lg-5" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <a href="" class="btn badge-success m-3" data-toggle="modal" data-target="#newSubMenuModal">Tambah User Baru</a>
            <a href="" class="btn badge-primary m-3" data-toggle="modal" data-target="#ChangePasswordModal">Ubah Password</a>
            <div>
                <p>*Tombol reset akan mengubah password menjadi 1234</p>
            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Image</th>
                        <th scope="col">Password</th>
                        <th scope="col">Role User</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usertampil as $ut) : $password = $ut['password']; ?>

                        <tr>
                            <th scope="row"><?= array_search($ut, $usertampil) + 1; ?></th>
                            <th scope="row"><?= $ut['name']; ?></th>
                            <th scope="row"><?= $ut['username']; ?></th>
                            <th scope="row"><?= $ut['image']; ?></th>
                            <th scope="row"><?= substr($password, 25); ?></th>
                            <th scope="row"><?= $ut['role']; ?></th>



                            <td>
                                <a href="" class="badge badge-pill badge-warning" data-toggle="modal" data-target="#editModal<?= $ut['id']; ?>">Edit</a>
                                <a href="<?= base_url('admin/resetuser/') . $ut['username']; ?>" class="badge badge-pill badge-secondary" onclick="return confirm('Anda yakin ingin meresetnya ?')">Reset</a>
                                <a href="<?= base_url('admin/deleteuser/') . $ut['username']; ?>" class="badge badge-pill badge-danger" onclick="return confirm('Anda yakin ingin menghapusnya ?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal ADD -->
    <div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Tambah User Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/manageuser'); ?>" method="post">

                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="image" name="image" placeholder="default image" value="default.png" readonly>
                        </div>
                        <div class="div form-group">
                            <select name="role_id" id="role_id" class="form-control">
                                <option value="">Select Role</option>
                                <?php foreach ($roletampil as $rt) : ?>
                                    <option value="<?= $rt['id']; ?>"> <?= $rt['role']; ?> </option>
                                <?php endforeach ?>
                            </select>
                            <p>*Role wajib diisi sebelum submit</p>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="Submit" class="btn btn-primary">Tambah </button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <?php foreach ($usertampil as $ut) : ?>
        <div class="modal fade" id="editModal<?= $ut['id']; ?>" role="dialog" aria-labelledby="editModalLabel<?= $ut['id']; ?>" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newRoleModalLabel">Edit Data <?= $ut['username']; ?> </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- base url mengarah ke folder admin lalu ke file role -->
                        <form action="<?= base_url('admin/edit/' . $ut['id']); ?>" method="post">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?= $ut['name']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?= $ut['username']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" id="password" name="password" value="<?= $ut['password']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="image" name="image" placeholder="default image" value="default.png" readonly>
                            </div>
                            <div class="div form-group">
                                <label>Role</label>
                                <select name="role_id" id="role_id" class="form-control">
                                    <option value="">Role</option>
                                    <?php foreach ($roletampil as $rt) : ?>
                                        <option value="<?= $rt['id']; ?>"> <?= $rt['role']; ?> </option>
                                    <?php endforeach ?>
                                </select>
                                <p>*Role wajib diisi sebelum submit</p>
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

    <?php foreach ($usertampil as $ut) : ?>
        <!-- Modal Change Password -->
        <div class="modal fade" id="ChangePasswordModal" role="dialog" aria-labelledby="ChangePasswordModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newRoleModalLabel">Ubah Password </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- base url mengarah ke folder admin lalu ke file role -->
                        <form action="<?= base_url('admin/changepassword/'); ?>" method="post">

                            <div class="form-group row">
                                <select name="username" id="username" class="form-control">
                                    <option value="">Username</option>
                                    <?php foreach ($usertampil as $ut) : ?>
                                        <option value="<?= $ut['username']; ?>"> <?= $ut['username']; ?> </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label for="current_password">Current Password</label>
                                <input type="password" class="form-control" id="current_password" name="current_password" value="">
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

    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
</div>