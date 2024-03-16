<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 480px;">
            <div class="card">
                <?php
                $this->flash->getFlashMessage();
                ?>
                <div class="card-header">
                    Kelola Pendaftar
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form class="form-inline float-end d-flex align-items-center" method="POST" action="<?= BASE_URL; ?>admin/searchpendaftar">
                                <input type="text" class="form-control" style="max-width: 300px;" name="keyword" id="keyword" placeholder="Cari job">
                                <input type="submit" class="btn btn-primary" name="cari" id="tombolCari" value="Cari">
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <table class="table table-bordered table-striped">
                                <thead style="background-color: brown;">
                                    <tr>
                                        <th>No</th>
                                        <th>Posisi</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($data['pendaftar'] as $pendaftar) :
                                        $no++;
                                    ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $pendaftar['nama_job']; ?></td>
                                            <td><?php echo $pendaftar['namapendaftar']; ?></td>
                                            <td><?php echo $pendaftar['email']; ?></td>
                                            <td>
                                                <a href="<?= BASE_URL; ?>admin/detail/<?= $pendaftar['idpendaftar']; ?>" class="badge bg-success ms-2">Detail</a>
                                                <a href="<?= BASE_URL; ?>admin/hapuspendaftar/<?= $pendaftar['idpendaftar']; ?>" class="badge bg-danger ms-2" onclick="return confirm('yakin?');">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>