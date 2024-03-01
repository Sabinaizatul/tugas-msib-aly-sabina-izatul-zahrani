<?php
class Film {
    private $judul;
    private $director;
    private $tahunRilis;
    private $genre;

    public function __construct($judul, $director, $tahunRilis, $genre){
        $this->judul = $judul;
        $this->director = $director;
        $this->tahunRilis = $tahunRilis;
        $this->genre = $genre;
    }

    public function setTahunRilis($tahunRilis){
        return $this->tahunRilis = $tahunRilis;
    }

    public function getLabel(){
        return "$this->judul, $this->tahunRilis";
    }

    public function cetakInfo(){
        echo "Judul : {$this->judul}<br>";
        echo "Sutradara : {$this->director}<br>";
        echo "Tahun Rilis : {$this->tahunRilis}<br>";
        echo "Genre : {$this->genre}";
    }

}

$film = new Film("Inception", "Christopher Nolan", 2010, "Sci-Fi");

echo "Film : ".$film->getLabel();
$film->setTahunRilis("2012"); // mengubah tahun rilis
echo "<hr>";

$film->cetakInfo();
?>