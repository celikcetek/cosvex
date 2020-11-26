<?php

class Oturum_model extends CI_Model {
    public function __construct() {
        parent::__construct();	
        
        date_default_timezone_set('Europe/Istanbul');
    }

	public function ulkeler() {
        $this->db->order_by('name', 'asc');

		return $this->db->get('countries');
	}

	public function faaliyet_alanlari() {
        $this->db->order_by('title', 'asc');

		return $this->db->get('fields_of_activities');
	}

	public function sektorler() {
        $this->db->order_by('title', 'asc');

		return $this->db->get('sectors');
    }
    
    public function kayit($data) {
        $this->db->set('name_surname', $data['isim_soyisim']);
        $this->db->set('email', $data['email']);
        $this->db->set('tel', $data['tel']);
        $this->db->set('country_id', $data['ulke']);
        $this->db->set('register_time', date('Y-m-d H:i:s'));
        $this->db->set('password', password_hash($data['sifre'], PASSWORD_DEFAULT));
        $this->db->insert('users');

        $user_id = $this->db->insert_id();

        $this->db->set('name', $data['sirket']);
        $this->db->set('user_id', $user_id);
        $this->db->insert('companies');

        $company_id = $this->db->insert_id();

        for ($i = 0; $i < count($data['faaliyetAlani']); $i++) {
            $this->db->set('company_id', $company_id);
            $this->db->set('field_id', $data['faaliyetAlani'][$i]);
            $this->db->insert('company_fields');
        }

        for ($i = 0; $i < count($data['sektor']); $i++) {
            $this->db->set('company_id', $company_id);
            $this->db->set('sector_id', $data['sektor'][$i]);
            $this->db->insert('company_sectors');
        }

        return true;
    }
    
    public function email_ile_kullanici($email) {
        $this->db->where('email', $email);

        return $this->db->get('users')->row();
    }

    public function giris($data) {
        $this->db->where('email', $data['email']);

        $sonuc = $this->db->get('users');

        if ($sonuc->num_rows() > 0) {
            if (password_verify($data['sifre'], $sonuc->row()->password)) {
                $this->db->set('last_login', date('Y-m-d H:i:s'));
                $this->db->where('email', $data['email']);
                
                return $this->db->update('users');
            } else {
                $this->session->set_flashdata('hata_mesaji', 'Email and password are incorrect.');

                return false;
            }
        } else {
            $this->session->set_flashdata('hata_mesaji', 'Email and password are incorrect.');

            return false;
        }
    }
}
