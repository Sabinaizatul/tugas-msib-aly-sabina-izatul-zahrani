<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 480px;">
            <div class="card">
                <div class="card-header">
                    Tambah Data Magang
                </div>
                <div class="card-body">
                    <form action="<?= BASE_URL; ?>admin/tambahdata" method="POST">
                        <div class="mb-3">
                            <label for="nama">Posisi : </label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="jobstart">Tanggal Mulai : </label>
                            <input type="date" class="form-control" id="jobstart" name="jobstart" required>
                        </div>
                        <div class="mb-3">
                            <label for="jobend">Tanggal Selesai : </label>
                            <input type="date" class="form-control" id="jobend" name="jobend" required>
                        </div>
                        <div class="mb-3">
                            <label for="registerend">Deadline Pendaftaran : </label>
                            <input type="date" class="form-control" id="registerend" name="registerend" required>
                        </div>
                        <div class="mb-3">
                            <label for="lokasi">Lokasi : </label>
                            <input type="text" class="form-control" id="lokasi" name="lokasi" required>
                        </div>
                        <div class="mb-3">
                            <label for="workingtype">Working Type</label>
                            <select class="form-control" id="workingtype" name="workingtype" required>
                                <option value="WFH">WFH</option>
                                <option value="WFO">WFO</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jobdesc">Deskripsi : </label>
                            <input type="text" class="form-control" id="jobdesc" name="jobdesc" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                        <a href="<?= BASE_URL; ?>admin/job" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>