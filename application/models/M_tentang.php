<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_tentang extends CI_Model
{
    public function GetTentang()
    {

        $tentang = $this->db->query('SELECT * FROM tentang;');
        return $tentang;
    }
}