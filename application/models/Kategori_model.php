<?php

class Kategori_model extends CI_Model{

    public function __construct(){
        //fungsion yang sering digunakan (tb_buku)
        $this->table = 'tb_kategori_buku';

        parent::__construct();
    }

    function tampil_data($number = NULL, $offset = NULL){
        //
        $query = $this->db->get($this->table, $number, $offset);

        return $query->result();
    }

    function jumlah_data(){
        $query = $this->db->get($this->table);

        return $query->num_rows();
    }


    function input_data($data){
        $this->db->insert($this->table, $data);
    }


    function spesifik_data($id){
        //fungsi sama dengan 'select * from tb_buku
        $query = $this->db->get_where($this->table, array('id'=>$id));
        return $query->row();
    }

    function update_data($data, $id_buku){
        $this->db->where('id', $id_buku);
        $this->db->update($this->table, $data);
    }

    function hapus_data($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }

}//end class