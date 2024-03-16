<?php
class JobModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllJob()
    {
        $this->db->query("SELECT * FROM job");
        return $this->db->resultAll();
    }
    public function getAllPendaftar()
    {
        $query = "SELECT p.*, j.nama AS nama_job FROM pendaftar p JOIN job j ON p.idjob = j.id";
        $this->db->query($query);
        return $this->db->resultAll();
    }

    public function getJobById($id)
    {
        $query = "SELECT * FROM job WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
    public function getPendaftarById($id)
    {
        $query = "SELECT p.*, j.nama AS nama_job FROM pendaftar p JOIN job j ON p.idjob = j.id WHERE p.idpendaftar = :idpendaftar";
        $this->db->query($query);
        $this->db->bind(':idpendaftar', $id);
        return $this->db->single();
    }

    public function updateJob($data)
    {
        $query = "UPDATE job SET nama = :nama, jobdesc = :jobdesc, jobstart = :jobstart, jobend = :jobend, registerend = :registerend, lokasi = :lokasi, workingtype = :workingtype WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':jobdesc', $data['jobdesc']);
        $this->db->bind(':jobstart', $data['jobstart']);
        $this->db->bind(':jobend', $data['jobend']);
        $this->db->bind(':registerend', $data['registerend']);
        $this->db->bind(':lokasi', $data['lokasi']);
        $this->db->bind(':workingtype', $data['workingtype']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteJob($id)
    {
        $query = "DELETE FROM job WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function deletePendaftar($id)
    {
        $query = "DELETE FROM pendaftar WHERE idpendaftar = :idpendaftar";
        $this->db->query($query);
        $this->db->bind(':idpendaftar', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function applyJob($data)
    {
        $query = "INSERT INTO pendaftar (idjob, namapendaftar, email, ttl, jenkel, alamat, telp, linkedin, portofolio) VALUES (:idjob, :namapendaftar, :email, :ttl, :jenkel, :alamat, :telp, :linkedin, :portofolio)";

        $this->db->query($query);
        $this->db->bind(':idjob', $data['idjob']);
        $this->db->bind(':namapendaftar', $data['namapendaftar']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':ttl', $data['ttl']);
        $this->db->bind(':jenkel', $data['jenkel']);
        $this->db->bind(':alamat', $data['alamat']);
        $this->db->bind(':telp', $data['telp']);
        $this->db->bind(':linkedin', $data['linkedin']);
        $this->db->bind(':portofolio', $data['portofolio']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tambahJob($data)
    {
        $query = "INSERT INTO job (nama, jobdesc, jobstart, jobend, registerend, lokasi, workingtype) VALUES (:nama, :jobdesc, :jobstart, :jobend, :registerend, :lokasi, :workingtype)";

        $this->db->query($query);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':jobdesc', $data['jobdesc']);
        $this->db->bind(':jobstart', $data['jobstart']);
        $this->db->bind(':jobend', $data['jobend']);
        $this->db->bind(':registerend', $data['registerend']);
        $this->db->bind(':lokasi', $data['lokasi']);
        $this->db->bind(':workingtype', $data['workingtype']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function searchJob()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM job WHERE 
              nama LIKE :keyword OR 
              lokasi LIKE :keyword OR 
              workingtype LIKE :keyword OR 
              jobdesc LIKE :keyword";
        $this->db->query($query);
        $this->db->bind(':keyword', "%$keyword%");
        return $this->db->resultSet();
    }
    public function searchPendaftar()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT p.*, j.nama AS nama_job FROM pendaftar p JOIN job j ON p.idjob = j.id WHERE j.nama LIKE :keyword OR namapendaftar LIKE :keyword OR email LIKE :keyword OR jenkel LIKE :keyword OR alamat LIKE :keyword OR telp LIKE :keyword";
        $this->db->query($query);
        $this->db->bind(':keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
