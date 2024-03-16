<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 480px;">
            <div class="card">
                <div class="card-header">
                    Edit Data Magang
                </div>
                <div class="card-body">
                    <form action="<?= BASE_URL; ?>admin/ubah/<?= $data['job']['id']; ?>" method="POST">
                        <input type="hidden" name="id" value="<?= $data['job']['id']; ?>">
                        <div class="mb-3">
                            <label for="nama">Posisi : </label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['job']['nama']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="jobstart">Tanggal Mulai :</label>
                            <input type="date" class="form-control" id="jobstart" name="jobstart" value="<?= $data['job']['jobstart']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="jobend">Tanggal Selesai : </label>
                            <input type="date" class="form-control" id="jobend" name="jobend" value="<?= $data['job']['jobend']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="registerend">Deadline Pendaftaran : </label>
                            <input type="date" class="form-control" id="registerend" name="registerend" value="<?= $data['job']['registerend']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="lokasi">Lokasi : </label>
                            <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $data['job']['lokasi']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="workingtype">Working Type : </label>
                            <select class="form-control" id="workingtype" name="workingtype">
                                <option value="WFH" <?= ($data['job']['workingtype'] == 'WFH') ? 'selected' : ''; ?>>WFH</option>
                                <option value="WFO" <?= ($data['job']['workingtype'] == 'WFO') ? 'selected' : ''; ?>>WFO</option>
                            </select>                        </div>
                        <div class="mb-3">
                            <label for="jobdesc">Deskripsi : </label>
                            <input type="text" class="form-control" id="jobdesc" name="jobdesc" value="<?= $data['job']['jobdesc']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                        <a href="<?= BASE_URL; ?>admin/job" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>