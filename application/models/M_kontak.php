<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_kontak extends CI_Model
{
    public function GetKontak()
    {

        $kontak = $this->db->query('SELECT * FROM kontak;');
        return $kontak;
    }
}