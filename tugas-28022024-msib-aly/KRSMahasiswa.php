<?php
interface KrsMhs
{
    public function getInfoKRS();
}

class Identitas
{
    protected $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }
}

class Mahasiswa extends Identitas implements KrsMhs
{
    protected $nim, $kampus, $dosenWali, $krs = [], $semester;

    public function __construct($nama, $nim, Kampus $kampus, Dosen $dosenWali, $semester)
    {
        parent::__construct($nama);
        $this->nim = $nim;
        $this->kampus = $kampus;
        $this->dosenWali = $dosenWali;
        $this->semester = $semester;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function getSem()
    {
        return $this->semester;
    }

    public function tambahMatkulKeKRS($mataKuliah, $sks)
    {
        $this->krs[] = new MataKuliah($mataKuliah, $sks);
    }

    public function getKRS()
    {
        return $this->krs;
    }

    public function tampilkanKRS()
    {
        if (!empty($this->krs)) {
            echo '<table border="1" cellspacing="0" width="50%">';
            echo '<tr><th>No</th><th>Matakuliah</th><th>SKS</th><th>Semester</th></tr>';

            $counter = 1;
            foreach ($this->getKrs() as $mataKuliah) {
                echo "<tr><td align='center'>{$counter}</td><td>{$mataKuliah->getNama()}</td><td>{$mataKuliah->getSks()}</td><td>{$this->getSem()}</td></tr>";
                $counter++;
            }
            echo '</table>';
        } else {
            echo '<p>Tidak ada matakuliah yang diambil.</p>';
        }
    }

    public function getTotalSks()
    {
        $totalSks = 0;
        foreach ($this->getKrs() as $mataKuliah) {
            $totalSks += $mataKuliah->getSks();
        }
        return $totalSks;
    }

    public function getInfoKRS()
    {
        return "Nama : {$this->getNama()}<br>Nim : {$this->getNim()}<br>Dosen Wali : {$this->dosenWali->getNama()}<br>Kampus : {$this->kampus->getNama()}<br>Semester : {$this->getSem()}";
    }
}

class Kampus extends Identitas
{
    public function __construct($nama)
    {
        parent::__construct($nama);
    }

    public function getInfoKRS()
    {
        return "Kampus {$this->nama} memiliki beberapa mahasiswa.";
    }
}

class Dosen extends Identitas
{
    public function __construct($nama)
    {
        parent::__construct($nama);
    }

}

class MataKuliah
{
    protected string $nama; 
    protected int $sks;

    public function __construct($nama, $sks)
    {
        $this->nama = $nama;
        $this->sks = $sks;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getSks()
    {
        return $this->sks;
    }
}

$kampus = new Kampus("Politeknik Harapan Bersama");
$dosenWali = new Dosen("Ida Afriliana");

$mahasiswa1 = new Mahasiswa("Sabina Izatul Zahrani", "21040109", $kampus, $dosenWali, 6);
$mahasiswa1->tambahMatkulKeKRS("Tugas Akhir", 6);
$mahasiswa1->tambahMatkulKeKRS("Bahasa Inggris", 2);
$mahasiswa1->tambahMatkulKeKRS("Technopreneur", 2);

echo "<center><h2>Kartu Rencana Studi Mahasiswa</h2></center>";
echo $mahasiswa1->getInfoKRS();
echo "<br>";
echo "<h3>Daftar Matakuliah yang diambil:</h3>";
echo $mahasiswa1->tampilkanKRS();
echo "<p>Total SKS : " . $mahasiswa1->getTotalSks() . "</p>";
?>