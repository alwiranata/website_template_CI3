<nav class="navbar navbar-expand-lg navbar-light bg-gradient-primary-to-secondary py-3">
    <div class="container px-5">
        <a class="navbar-brand" href="index.html"><span class="fw-bolder text-light">Website Template</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item"><a class="nav-link text-light" href="<?= base_url('home') ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="<?= base_url('project') ?>">Project</a></li>
                <li class="nav-item"><a class="nav-link text-light" onclick="return confirm('Yakin Ingin Logout?');" href="<?= base_url('auth/logout') ?>">logout</a></li>
            </ul>
        </div>
    </div>
</nav>