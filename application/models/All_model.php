<?php

defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Name			: All_model
 * 
 * Author		: Ganatech
 *
 * Created		: 01.09.2020
 *
 * Description	: Berisi seluruh syntax database dari seluruh controller yang ada pada website
 *
 * Requirements	: PHP 5.4 atau diatasnya
 *
 * @package    Ruang Bahagia
 * @author     Ganatech
 * @link       https://github.com/deyan-ardi/sso-hmj
 * @filesource
 **/

class All_model extends CI_Model
{
    public function setPengunjungWebsite($ip_address, $agent, $platform, $daerah)
    {
        $data = array(
            'ip_address' => $ip_address,
            'browser' => $agent,
            'platform' => $platform,
            'daerah' => $daerah,
        );
        return $this->db->insert('pengunjung', $data);
    }
    public function getPengunjungWebsite()
    {
        return $this->db->get('pengunjung')->num_rows();
    }
}