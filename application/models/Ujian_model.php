<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ujian_model extends MY_Model
{
    var $table = "ujian";
    public function __construct()
    {
        parent::__construct($this->table);
    }

    public function getAllSoal()
    {
        return $this->db->get('soal_simpan')->result_array();
    }

    public function getAllWithMinute($where)
    {
        $this->db->select('TIME_TO_SEC(TIMEDIFF(selesai,now() ) ) / 60 as waktu,id,nip,id_jenjang,radom_code');
        return $this->db->get_where($this->table, $where)->row_array();
    }
}
