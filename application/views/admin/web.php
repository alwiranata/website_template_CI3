<!--  -->

<div class="container">

    <h3 class="mt-3 mb-3"><?= $title; ?></h3>

    <?= $this->session->flashdata('web_message') ?>
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
                <th>Deskripsi</th>
                <th>Image</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($web as $w) : ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $w['nama'] ?></td>
                        <td><?= $w['deskripsi'] ?></td>
                        <td><?= $w['image'] ?></td>


                        <td>

                            <a href="<?= base_url('web/deleteWeb/') . $w['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin Hapus Data <?= $w['nama'] ?>?');">Delete</a>
                        </td>
                    </tr>
                    <?php $no++; ?>

                <?php endforeach; ?>
            </tbody>
        </table>

    </div>


</div>