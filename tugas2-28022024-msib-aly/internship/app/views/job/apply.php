<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 480px;">
            <div class="card">
                <div class="card-header">
                    Daftar Magang
                </div>
                <div class="card-body">
                    <form action="<?= BASE_URL; ?>job/applydata" method="POST">
                    <input type="hidden" name="idjob" value="<?= $data['job']['id']; ?>">
                        <div class="mb-3">
                            <label for="namapendaftar">Nama : </label>
                            <input type="text" class="form-control" id="namapendaftar" name="namapendaftar" required>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email : </label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="ttl">Tanggal Lahir : </label>
                            <input type="date" class="form-control" id="ttl" name="ttl" required>
                        </div>
                        <div class="mb-3">
                            <label for="jenkel">Jenis Kelamin : </label>
                            <select class="form-control" id="jenkel" name="jenkel" required>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="alamat">Alamat : </label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="mb-3">
                            <label for="telp">Telp : </label>
                            <input type="text" class="form-control" id="telp" name="telp" required>
                        </div>
                        <div class="mb-3">
                            <label for="linkedin">LinkedIn : </label>
                            <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Masukkan link LinkedIn Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="portofolio">Portofolio : </label>
                            <input type="text" class="form-control" id="portofolio" name="portofolio" placeholder="Masukkan link Portofolio Anda" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Apply</button>
                        <a href="<?= BASE_URL; ?>job/index" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
