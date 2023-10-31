<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-light-800"><?= $title ?></h1>

    <div class="card mb-5  bg-gradient-light" style="max-width: auto-px;">
        <div class="row g-0">
            <div class="col-md-4 mt-3  px-3 ">
                <img src="<?= base_url('assets/assets/aldo.png')  ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col mt-5 py-5  ">
                <div class="card-body  text-dark">
                    <h5 class="card-title">Nama : <?= $user['name']; ?></h5>
                    <p class="card-text"> ID : <?= $user['role_id']; ?></p>
                    <p class="card-text"><small class="text-body-secondary">Terdaftar dari : <?= date('d M Y', $user['date']);  ?></small></p>
                </div>
            </div>
        </div>
    </div>

</div>