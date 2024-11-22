<?php

class Mahasiswa_model {
    private $dbh, $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die("Terjadi Error : " . $e->getMessage());
        }
    }

    // private $mhs = [
    //     [
    //         "nama" => "",
    //         "nrp" => "",
    //         "email" => "",
    //         "jurusan" => ""
    //     ],
    //     [
    //         "nama" => "",
    //         "nrp" => "",
    //         "email" => "",
    //         "jurusan" => ""
    //     ],
    //     [
    //         "nama" => "",
    //         "nrp" => "",
    //         "email" => "",
    //         "jurusan" => ""
    //     ]
    // ];

    public function getAllMahasiswa() {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}