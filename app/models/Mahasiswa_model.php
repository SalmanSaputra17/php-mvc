<?php

class Mahasiswa_model {

    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa() 
    {
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM '.$this->table.' WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahData($data)
    {
        $query = "INSERT INTO ".$this->table." 
                    VALUES('', :nama, :nrp, :email, :jurusan)";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }   

    public function hapusData($id)
    {
        $this->db->query('DELETE FROM '.$this->table.' WHERE id = :id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahData($data)
    {
        $query = "UPDATE ".$this->table." SET 
                    nama = :nama,
                    nrp = :nrp,
                    email = :email,
                    jurusan = :jurusan 
                    WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }

    public function searchDataMahasiswa($data)
    {
        $keyword = $data['search'];
        $query = "SELECT * FROM ".$this->table." WHERE nama LIKE :nama";
        $this->db->query($query);
        $this->db->bind('nama', "%$keyword%");
        $this->db->execute();
        
        return $this->db->resultSet();

    }

}
