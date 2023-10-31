<body class="d-flex flex-column h-100 bg-light">
    <main class="flex-shrink-0">
        <!-- Navigation-->

        <!-- Projects Section-->



        <section class="py-5">
            <div class="container px-5 mb-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
                    </div>

                </div>
                <?= $this->session->flashdata('project_message') ?>
                <?php foreach ($web as $no => $w) : ?>

                    <?= form_error('nama', '<div class="alert alert-danger" role="alert">', '</div>') ?>
                    <?= form_error('deskripsi', '<div class="alert alert-danger" role="alert">', '</div>') ?>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-8 col-xxl-8">
                            <!-- Project Card 1-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5 ">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h3 class="fw-bolder"><?= $w['nama'] ?></h3>
                                            <p><?= $w['deskripsi'] ?></p>
                                            <div class="py-5">
                                                <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#htmlProjectModal<?= $w['id'] ?>">HTML</button>
                                                <!--HTML Modal -->
                                                <div class="modal fade" id="htmlProjectModal<?= $w['id'] ?>" tabindex="-1" aria-labelledby="htmlProjectModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h3 class="modal-title fs-5" id="newProjectModalLabel">HTML</h3>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <textarea type="text" class="form-control" id="html" name="html" placeholder="HTML"><?= $w['html'] ?></textarea>
                                                                </div>
                                                            </div>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cssProjectModal<?= $w['id']; ?>">CSS</button>
                                                <!--CSS Modal -->
                                                <div class="modal fade" id="cssProjectModal<?= $w['id']; ?>" tabindex="-1" aria-labelledby="cssProjectModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h3 class="modal-title fs-5" id="newProjectModalLabel">CSS</h3>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <textarea type="text" class="form-control" id="css" name="css" placeholder="css"><?= $w['css'] ?></textarea>
                                                                </div>
                                                            </div>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#JSProjectModal<?= $w['id']; ?>">JS</button>
                                                <!--JS Modal -->
                                                <div class="modal fade" id="JSProjectModal<?= $w['id']; ?>" tabindex="-1" aria-labelledby="JSProjectModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h3 class="modal-title fs-5" id="newProjectModalLabel">JS</h3>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <textarea type="text" class="form-control" id="js" name="js" placeholder="js"><?= $w['js'] ?></textarea>
                                                                </div>
                                                            </div>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <img class="img-fluid" src="<?= base_url('assets/img/') . $w['image'] ?>" width="400px" alt="..." />

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </section>
        <!-- Add Card-->
        <section class="py-7 px-3 justify-content-center">
            <div class="container px-3 mb-3 justify-content-center">
                <div class="row gx-3 justify-content-center">
                    <div class="col-lg-11 col-xl-8 col-xxl-8">
                        <div class=" card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5align-items-center">
                                        <div class="container px-5 mb-5 mt-5 text-center">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newProjectModal">
                                                Tambah
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
    <!-- Modal -->
    <div class="modal fade" id="newProjectModal" tabindex="-1" aria-labelledby="newProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="newProjectModalLabel">Data Project</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="<?= base_url('project/tambahProject'); ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="mb-3">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Project">
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="deskripsi">
                        </div>


                        <div class="mb-3">
                            <input type="file" class="form-control" id="userfile" name="userfile" placeholder="Userfile">
                        </div>

                        <div class="mb-3">
                            <textarea type="text" class="form-control" id="html" name="html" placeholder="HTML"></textarea>
                        </div>

                        <div class="mb-3">
                            <textarea type="text" class="form-control" id="css" name="css" placeholder="CSS"></textarea>
                        </div>

                        <div class="mb-3">
                            <textarea type="text" class="form-control" id="js" name="js" placeholder="JS"></textarea>
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