<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 480px;">
            <div class="card">
                <?php
                $this->flash->getFlashMessage();
                ?>
                <div class="card-header">
                    Kelola Job
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="<?= BASE_URL; ?>admin/tambah" class="btn btn-primary">Tambah data</a>
                        </div>
                        <div class="col">
                            <form class="form-inline float-end d-flex align-items-center" method="POST" action="<?= BASE_URL; ?>admin/search">
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
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Deadline Pendaftaran</th>
                                        <th>Lokasi</th>
                                        <th>Working Type</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($data['job'] as $job) :
                                        $no++;
                                    ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $job['nama']; ?></td>
                                            <td><?php echo $job['jobstart']; ?></td>
                                            <td><?php echo $job['jobend']; ?></td>
                                            <td><?php echo $job['registerend']; ?></td>
                                            <td><?php echo $job['lokasi']; ?></td>
                                            <td><?php echo $job['workingtype']; ?></td>
                                            <td><?php echo $job['jobdesc']; ?></td>
                                            <td>
                                                <a href="<?= BASE_URL; ?>admin/edit/<?= $job['id']; ?>" class="badge bg-primary ms-2">Edit</a>
                                                <a href="<?= BASE_URL; ?>admin/hapus/<?= $job['id']; ?>" class="badge bg-danger ms-2" onclick="return confirm('yakin?');">Hapus</a>
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