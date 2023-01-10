<?php

class Join_model extends CI_model
{
    public function getAllAnggota()
    {
        return $this->db->get('anggota')->result_array();
    }

    public function getAllSimpanan()
    {
        return $this->db->get('simpanan')->result_array();
    }

    public function join()
    {
        $this->db->select('*');
        $this->db->from('simpanan');
        $this->db->join('anggota', 'anggota.id_anggota = simpanan.id_anggota');
        $query = $this->db->get();
        return $query;
    }
}
