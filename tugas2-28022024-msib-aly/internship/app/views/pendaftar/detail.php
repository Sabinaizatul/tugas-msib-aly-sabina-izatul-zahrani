<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="card-header">
                        Detail Pendaftar
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title"><?= $data['pendaftar']['nama_job']; ?></h4>
                            <p class="card-text">Nama : <?= $data['pendaftar']['namapendaftar']; ?></p>
                            <p class="card-text">Email : <?= $data['pendaftar']['email']; ?></p>
                            <p class="card-text">Tanggal Lahir : <?= $data['pendaftar']['ttl']; ?></p>
                            <p class="card-text">Jenis Kelamin : <?= $data['pendaftar']['jenkel']; ?></p>
                            <p class="card-text">Alamat : <?= $data['pendaftar']['alamat']; ?></p>
                            <p class="card-text">Telp : <?= $data['pendaftar']['telp']; ?></p>
                            <p class="card-text">Link LinkedIn : <?= $data['pendaftar']['linkedin']; ?></p>
                            <p class="card-text">Link Portofolio : <?= $data['pendaftar']['portofolio']; ?></p>
                            <p class="card-text">Tanggal Daftar : <?= $data['pendaftar']['tanggal']; ?></p>

                            <a href="<?= BASE_URL; ?>admin/pendaftar" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>