<?php

class Mahasiswa_model {
    private $table  = 'mahasiswa';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllMahasiswa() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($dataPost) {
        $query = "INSERT INTO mahasiswa (nama, nrp, email, jurusan) VALUES (:nama, :nrp, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $dataPost['nama']);
        $this->db->bind('nrp', $dataPost['nrp']);
        $this->db->bind('email', $dataPost['email']);
        $this->db->bind('jurusan', $dataPost['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id) {
        $query = "DELETE FROM mahasiswa WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}