<!--  -->

<div class="container">

    <h3 class="mt-3 mb-3"><?= $title; ?></h3>

    <?= $this->session->flashdata('User_message') ?>
    <!-- Table USer -->
    <?= form_error('id', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= form_error('name', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= form_error('email', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= form_error('Password', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= form_error('role_id', '<div class="alert alert-danger" role="alert">', '</div>') ?>

    <div class="table-responsive">
        <table class="table table-striped ">
            <thead>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($role as $r) : ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $r['name'] ?></td>
                        <td><?= $r['email'] ?></td>
                        <td><?= $r['role_id'] ?></td>


                        <td>
                            <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editUserModal<?= $r['id'] ?>">Edit</a>
                            <a href="<?= base_url('user/deleteUser/') . $r['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin Hapus Data <?= $r['name'] ?>?');">Delete</a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                    <!--Edit  Modal -->
                    <div class="modal fade" id="editUserModal<?= $r['id'] ?>" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5" id="editUserModalLabel">Edit User </h3>
                                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="<?= base_url('user/editUser/') . $r['id']; ?>" method="post">
                                    <div class="modal-body">

                                        <div class=" mb-3">
                                            <input type="hidden" class="form-control" name="id" value="<?= $r['id'] ?>" readonly>
                                        </div>

                                        <div class=" mb-3">
                                            <input type="text" class="form-control" name="name" value="<?= $r['name'] ?>">
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" value="<?= $r['email'] ?>">
                                        </div>



                                        <div class=" mb-3">
                                            <input type="password" class="form-control" name="password" value="<?= $r['password'] ?>">
                                        </div>





                                        <div class="form-group">
                                            <select name="role_id" class="form-control" id="role_id">
                                                <option value="<?= $r['role_id'] ?>"><?= $r['role_id'] ?></option>
                                                <option value="admin">Admin</option>
                                                <option value="user">user</option>

                                            </select>
                                        </div>



                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </tbody>
        </table>

    </div>


</div>