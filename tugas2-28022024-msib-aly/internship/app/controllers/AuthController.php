<?php
class AuthController extends Controller
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->model('AuthModel')->getUserByUsername($username);

            if ($user) {
                if ($password === $user['password']) {
                    session_start();
                    $_SESSION['user'] = $user;
                    header("Location: " . BASE_URL . "admin/index");
                    exit;
                } else {
                    // Password salah, tampilkan pesan error
                    $this->flash->setFlashMessage('Gagal', 'Password salah. Silakan coba lagi.', 'danger');
                    header("Location: " . BASE_URL . "login/index");
                    exit;
                }
            } else {
                // User tidak ditemukan, tampilkan pesan error
                $this->flash->setFlashMessage('Gagal', 'User tidak ditemukan. Silakan coba lagi.', 'danger');
                header("Location: " . BASE_URL . "login/index");
                exit;
            }
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();

        header("Location: " . BASE_URL . "home/index");
        exit;
    }
}
