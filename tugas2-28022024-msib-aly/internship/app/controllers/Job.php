<?php
class Job extends Controller
{
    public function index()
    {
        $data['title'] = "Job Tersedia";
        $data['job'] = $this->model("JobModel")->getAllJob();
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('job/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id){
        $data['title'] = 'Detail Job';
        $data['job'] = $this->model('JobModel')->getjobById($id);
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('job/detail', $data);
        $this->view('templates/footer');
    }
    public function apply($id)
    {
        $data["title"] = "Apply Data";
        $data["job"] = $this->model('JobModel')->getjobById($id);
        $this->view("templates/header", $data);
        $this->view('templates/navbar');
        $this->view("job/apply", $data);
        $this->view("templates/footer");
    }

    public function applydata()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $dataPost = [
                'idjob' => $_POST['idjob'],
                'namapendaftar' => $_POST['namapendaftar'],
                'email' => $_POST['email'],
                'ttl' => $_POST['ttl'],
                'jenkel' => $_POST['jenkel'],
                'alamat' => $_POST['alamat'],
                'telp' => $_POST['telp'],
                'linkedin' => $_POST['linkedin'],
                'portofolio' => $_POST['portofolio']

            ];

            if ($this->model('JobModel')->applyJob($dataPost) > 0) {
                $this->flash->setFlashMessage('berhasil', 'daftar', 'success');
            } else {
                $this->flash->setFlashMessage('gagal', 'daftar', 'danger');
            }
            header('Location: ' . BASE_URL . 'job/index');
            exit;
        }
    }

    public function search()
    {
        $data['title'] = "Data Job";
        $data['job'] = $this->model("JobModel")->searchJob();

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('job/index', $data);
        $this->view('templates/footer');
    }
}
