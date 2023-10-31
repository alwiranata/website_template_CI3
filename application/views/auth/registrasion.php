<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Navigation-->

        <!-- Page content-->
        <section class="py-5">
            <div class="container px-5">
                <!-- Contact form-->
                <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline"><?= $title ?></span></h1>

                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">

                            <form action="<?= base_url('auth/registrasion') ?>" method="post">
                                <?= $this->session->flashdata('auth_message'); ?>
                                <!-- Name input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Name" value="<?= set_value('name') ?>">
                                    <label for="name">Name</label>
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <!-- Username input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" name="email" type="text" placeholder="Email" value="<?= set_value('email') ?>">
                                    <label for="name">Email</label>
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <!-- Email address input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="password" name="password" type="password" placeholder="password" value="<?= set_value('password') ?>">
                                    <label for="email">Password</label>
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>
                                <!-- Phone number input-->


                                <!-- Submit Button-->
                                <button class="btn btn-primary col-lg-12" type="submit">Submit</button>

                            </form>
                            <div class=" text-center mb-5 mt-3">

                                <a href="<?= base_url('auth/') ?>" class=" text-gradient d-inline mb-3">Have Account? Login</a>

                            </div>
                        </div>



                    </div>
                </div>
            </div>
            </div>
            </div>
        </section>
    </main>