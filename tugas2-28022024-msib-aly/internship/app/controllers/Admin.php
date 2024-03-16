<?php
class Admin extends Controller
{

    public function index()
    {
        if (!isset($_SESSION['user'])) {
            header("Location: " . BASE_URL . "login");
            exit();
        }
        $data['title'] = 'Admin';
        $this->view('templates/header', $data);
        $this->view('templates/navbar2');
        $this->view('homeadmin/index');
        $this->view('templates/footer');
    }
    public function job()
    {
        if (!isset($_SESSION['user'])) {
            header("Location: " . BASE_URL . "login");
            exit();
        }
        $data['title'] = 'Kelola Job';
        $data['job'] = $this->model("JobModel")->getAllJob();
        $this->view('templates/header', $data);
        $this->view('templates/navbar2');
        $this->view('jobadmin/index', $data);
        $this->view('templates/footer');
    }
    public function pendaftar()
    {
        if (!isset($_SESSION['user'])) {
            header("Location: " . BASE_URL . "login");
            exit();
        }
        $data['title'] = 'Kelola Pendaftar';
        $data['pendaftar'] = $this->model("JobModel")->getAllPendaftar();
        $this->view('templates/header', $data);
        $this->view('templates/navbar2');
        $this->view('pendaftar/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id){
        $data['title'] = 'Detail Pendaftar';
        $data['pendaftar'] = $this->model('JobModel')->getPendaftarById($id);
        $this->view('templates/header', $data);
        $this->view('templates/navbar2');
        $this->view('pendaftar/detail', $data);
        $this->view('templates/footer');
    }
    public function edit($id)
    {
        if (!isset($_SESSION['user'])) {
            header("Location: " . BASE_URL . "login");
            exit();
        }
        $data['title'] = 'Edit Data';
        $data['job'] = $this->model("JobModel")->getJobById($id);
        $this->view('templates/header', $data);
        $this->view('templates/navbar2');
        $this->view('jobadmin/edit', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if (!isset($_SESSION['user'])) {
            header("Location: " . BASE_URL . "login");
            exit();
        }
        $data['title'] = 'Kelola Job';
        $this->view('templates/header', $data);
        $this->view('templates/navbar2');
        $this->view('jobadmin/tambah', $data);
        $this->view('templates/footer');
    }
    public function hapus($id)
    {
        if ($this->model('JobModel')->deleteJob($id) > 0) {
            // Jika perubahan berhasil, set pesan flash berhasil
            $this->flash->setFlashMessage('berhasil', 'dihapus', 'success');
        } else {
            // Jika perubahan gagal, set pesan flash gagal
            $this->flash->setFlashMessage('gagal', 'dihapus', 'danger');
        }

        header('Location: ' . BASE_URL . 'admin/job');
        exit;
    }
    public function hapuspendaftar($id)
    {
        if ($this->model('JobModel')->deletePendaftar($id) > 0) {
            // Jika perubahan berhasil, set pesan flash berhasil
            $this->flash->setFlashMessage('berhasil', 'dihapus', 'success');
        } else {
            // Jika perubahan gagal, set pesan flash gagal
            $this->flash->setFlashMessage('gagal', 'dihapus', 'danger');
        }

        header('Location: ' . BASE_URL . 'admin/pendaftar');
        exit;
    }
    public function ubah()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $dataPost = [
                'id' => $_POST['id'],
                'nama' => $_POST['nama'],
                'jobdesc' => $_POST['jobdesc'],
                'jobstart' => $_POST['jobstart'],
                'jobend' => $_POST['jobend'],
                'registerend' => $_POST['registerend'],
                'lokasi' => $_POST['lokasi'],
                'workingtype' => $_POST['workingtype']
            ];

            if ($this->model('JobModel')->updateJob($dataPost) > 0) {
                // Jika perubahan berhasil, set pesan flash berhasil
                $this->flash->setFlashMessage('berhasil', 'diedit', 'success');
            } else {
                // Jika perubahan gagal, set pesan flash gagal
                $this->flash->setFlashMessage('gagal', 'diedit', 'danger');
            }

            header('Location: ' . BASE_URL . 'admin/job');
            exit;
        }
    }
    public function tambahdata()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $dataPost = [
                'nama' => $_POST['nama'],
                'jobdesc' => $_POST['jobdesc'],
                'jobstart' => $_POST['jobstart'],
                'jobend' => $_POST['jobend'],
                'registerend' => $_POST['registerend'],
                'lokasi' => $_POST['lokasi'],
                'workingtype' => $_POST['workingtype']
            ];

            if ($this->model('JobModel')->tambahJob($dataPost) > 0) {
                $this->flash->setFlashMessage('berhasil', 'ditambahkan', 'success');
            } else {
                $this->flash->setFlashMessage('gagal', 'ditambahkan', 'danger');
            }
            header('Location: ' . BASE_URL . 'admin/job');
            exit;
        }
    }
    public function search()
    {
        $data['title'] = "Data Job";
        $data['job'] = $this->model("JobModel")->searchJob();

        $this->view('templates/header', $data);
        $this->view('templates/navbar2');
        $this->view('jobadmin/index', $data);
        $this->view('templates/footer');
    }
    public function searchpendaftar()
    {
        $data['title'] = "Data Pendaftar";
        $data['pendaftar'] = $this->model("JobModel")->searchPendaftar();

        $this->view('templates/header', $data);
        $this->view('templates/navbar2');
        $this->view('pendaftar/index', $data);
        $this->view('templates/footer');
    }
}
