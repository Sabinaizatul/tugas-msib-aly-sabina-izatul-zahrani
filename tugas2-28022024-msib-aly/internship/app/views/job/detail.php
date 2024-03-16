<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="../../../public/img/landing.jpg" class="img-fluid rounded-start" alt="Job">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h4 class="card-title"><?= $data['job']['nama']; ?></h4>
                    <p class="card-text"><?= $data['job']['jobstart']; ?> sampai <?= $data['job']['jobend']; ?>, <?= $data['job']['workingtype']; ?></p>
                    <p class="card-text"><?= $data['job']['lokasi']; ?></p>
                    <p class="card-text">Deadline Pendaftaran : <?= $data['job']['registerend']; ?></p>
                    <p class="card-text"><?= $data['job']['jobdesc']; ?></p>

                    <a href="<?= BASE_URL; ?>job/index" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>