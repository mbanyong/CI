<?php

class Buku_model extends CI_Model{

    public function __construct(){
        //fungsion yang sering digunakan (tb_buku)
        $this->table = 'tb_buku';

        parent::__construct();
    }

    function tampil_data($number, $offset){
        //agar tidak menabrak dengan field id, maka membuat query select
        $this->db->select('tb_buku.id, nama, penerbit, deskripsi, nama_kategori, harga');
        //query join untuk menghubungkan tabel buku dan kategori
        $this->db->join('tb_kategori_buku', 'tb_kategori_buku.id = tb_buku.id_kategori');
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