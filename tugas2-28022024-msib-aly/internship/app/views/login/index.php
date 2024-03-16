<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card border-0 shadow-lg my-5">
                <?php
                $this->flash->getFlashMessage();
                ?>
                <div class="card-header">
                    <h3 class="card-title text-center">Halaman Login</h3>
                </div>
                <div class="card-body">
                    <form action="<?= BASE_URL; ?>AuthController/login" method="post">
                        <div class="mb-2">
                            <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                            <input type="text" id="username" class="form-control" name="username" required />
                        </div>
                        <div class="mb-2">
                            <label for="password-input" class="form-label">Password <span class="text-danger">*</span></label>
                            <input type="password" id="password-input" class="form-control" name="password" required />
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mb-2">Sign In</button>
                        <div class="text-center">
                            <p><strong>Username dan Password : admin</strong></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>