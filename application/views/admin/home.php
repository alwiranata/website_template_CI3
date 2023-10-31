<!--  -->

<div class="container">

    <h3 class="mt-3 mb-3"></h3>

    <?= $this->session->flashdata('Home_message') ?>
    <!-- Table Home -->
    <?= form_error('id', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= form_error('title', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= form_error('boostrap', '<div class="alert alert-danger" role="alert">', '</div>') ?>


    <div class="table-responsive">
        <table class="table table-striped ">
            <thead>
                <th>No</th>
                <th>Title</th>
                <th>Boostrap</th>
                <th>Aksi</th>

            </thead>
            <tbody>

                <?php foreach ($home as $h) : ?>
                    <tr>
                        <th>#</th>
                        <td><?= $h['title'] ?></td>
                        <td><?= $h['boostrap'] ?></td>


                        <td>
                            <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editHomeModal<?= $h['id'] ?>">Edit</a>

                        </td>
                    </tr>

                    <!--Edit  Modal -->
                    <div class="modal fade" id="editHomeModal<?= $h['id'] ?>" tabindex="-1" aria-labelledby="editHomeModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5" id="editHomeModalLabel">Edit Home </h3>
                                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="<?= base_url('tampilan/editHome/') . $h['id']; ?>" method="post">
                                    <div class="modal-body">

                                        <div class=" mb-3">
                                            <input type="hidden" class="form-control" name="id" value="<?= $h['id'] ?>" readonly>
                                        </div>

                                        <div class=" mb-3">
                                            <input type="text" class="form-control" name="title" value="<?= $h['title'] ?>">
                                        </div>

                                        <div class=" mb-3">
                                            <input type="text" class="form-control" name="boostrap" value="<?= $h['boostrap'] ?>">
                                        </div>

                                        <div class="form-group">

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