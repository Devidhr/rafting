<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_paket extends CI_Model
{

    public function Get_Paket()
    {

        $info = $this->db->query('SELECT * FROM paket;');
        return $info;
    }

}