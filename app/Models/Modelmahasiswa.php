<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelmahasiswa extends Model
{
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilData()
    {
        return $this->db->table('mahasiswa')->get();
    }

    function simpan($data)
    {
        return $this->db->table('mahasiswa')->insert($data);
    }

    function hapusdata($id)
    {
        return $this->db->table('mahasiswa')->delete(['id' => $id]);
    }

    function ambildata($id)
    {
        return $this->db->table('mahasiswa')->getWhere(['id' => $id]);
    }
    function editdata($data, $id)
    {
        return $this->db->table('mahasiswa')->update($data, ['id' => $id]);
    }
}
