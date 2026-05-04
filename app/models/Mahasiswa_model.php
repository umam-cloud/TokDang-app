<?php 

class Mahasiswa_model{
    private $table = 'mahasiswa';
    private $db;

    public function __construct(){
        $this->db = new Database;

    }

    public function getAllMahasiswa(){
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultset();
    }

    public function getMahasiswa($id){
        $this->db->query('SELECT * FROM '. $this->table.' WHERE id_mahasiswa =:id');
        $this->db->bind('id', $id);
        return $this->db->resultsingel();
    }
}

?>

