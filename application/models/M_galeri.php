<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_galeri extends CI_Model
{

    public function Get_Galeri()
    {

        $galeri = $this->db->query('SELECT * FROM galeri;');
        return $galeri;
    }
}