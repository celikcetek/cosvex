<?php

class Oturum extends CI_Controller {
    public function __construct() {
		parent::__construct();
		
		$this->load->model('oturum_model');
		$this->load->helper('main_helper');
    }

	public function kayit_sayfa() {
        $data = array(
            'baslik' => 'Register',
            'ulkeler' => $this->oturum_model->ulkeler(),
            'faaliyet_alanlari' => $this->oturum_model->faaliyet_alanlari(),
            'sektorler' => $this->oturum_model->sektorler(),
        );

		$this->load->view('oturum/kayit', $data);
    }
    
    public function kayit() {
        if (isset($_POST['submit'])) {
            $data = array(
                'isim_soyisim' => $this->input->post('isim_soyisim'),
                'sirket' => $this->input->post('sirket'),
                'ulke' => $this->input->post('ulke'),
                'sektor' => $this->input->post('sektor'),
                'faaliyetAlani' => $this->input->post('faaliyetAlani'),
                'email' => $this->input->post('email'),
                'tel' => $this->input->post('tel'),
                'sifre' => $this->input->post('sifre'),
                're_sifre' => $this->input->post('re_sifre')
            );

            if ($data['sifre'] == $data['re_sifre']) {
                if ($data['ulke'] != 0 || $data['sektor'] != 0 || $data['faaliyetAlani'] != 0) {
                    if (strlen($data['sifre']) > 8) {
                        if ($this->oturum_model->kayit($data)) {
                            $this->session->set_flashdata('onay_mesaji', 'You have successfully registered.');
                
                            redirect(base_url('register'));
                        } else {
                            $this->session->set_flashdata('hata_mesaji', 'An error occurred while registering.');
                
                            redirect(base_url('register'));
                        }
                    } else {
                        $this->session->set_flashdata('hata_mesaji', 'The password must be at least 8 characters.');
            
                        redirect(base_url('register'));
                    }
                } else {
                    $this->session->set_flashdata('hata_mesaji', 'Please fill in all fields.');
            
                    redirect(base_url('register'));
                }
            } else {
                $this->session->set_flashdata('hata_mesaji', 'Passwords do not match.');

                redirect(base_url('register'));
            }
        } else {
            show_404();
        }
    }
    
    public function giris_sayfa() {
        $data = array(
            'baslik' => 'Login'
        );

		$this->load->view('oturum/giris', $data);
    }

    public function giris() {
		if (isset($_POST['submit'])) {
			$data = array(
				'email' => $this->input->post('email'),
				'sifre' => $this->input->post('sifre')
			);

			if ($this->oturum_model->giris($data)) {
				$this->session->set_userdata('id', email_ile_kullanici($data['email'])->id);

				redirect(base_url());
			} else {
				redirect(base_url('login'));
			}
		} else {
			show_404();
		}
    }
    
    public function cikis() {
        $this->session->unset_userdata('id');

        redirect(base_url());
    }

    public function sifre_unuttum() {
        $data = array(
            'baslik' => 'Fargot Password',
        );
		$this->load->view('oturum/sifre_unuttum', $data);
    }

    public function iletisim() {
        $data = array(
            'baslik' => 'Contact',
        );
		$this->load->view('oturum/iletisim', $data);
    }
}
