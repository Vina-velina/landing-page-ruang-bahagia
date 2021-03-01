<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	private $email_admin = array('riyan@undiksha.ac.id', 'ruangbahagia30@gmail.com');
	function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');
	}
	
	public function getEmailAdmin(){
		return $this->email_admin;
	}
	public function index()
	{
		$this->data['id_header'] = 1;
		$this->load->view('master/header',$this->data);
		$this->load->view('page/index',$this->data);
		$this->load->view('master/footer',$this->data);
	}
	public function about()
	{
		$this->data['id_header'] = 2;
		$this->load->view('master/header',$this->data);
		$this->load->view('page/about',$this->data);
		$this->load->view('master/footer',$this->data);
	}
	public function contact()
	{
		$this->data['id_header'] = 3;
		$this->load->view('master/header', $this->data);
		$this->load->view('page/contact', $this->data);
		$this->load->view('master/footer', $this->data);
	}
	public function send_email(){
		if(!empty($_POST)){
			// Data Email
			$ip = $this->input->ip_address();
			if ($this->agent->is_browser()) {
				$agent = $this->agent->browser() . ' ' . $this->agent->version();
			} elseif ($this->agent->is_mobile()) {
				$agent = $this->agent->mobile();
			} else {
				$agent = 'Data user gagal di dapatkan';
			}
			$message = "[ Email Pengirim : " . $_POST['email'] . ", IP Address : " . $ip . ", Platform : " . $this->agent->platform() . ",Browser : " . $agent . " ] ~ " . $_POST['pesan'];
			
			// Konfigurasi Send Email
			$config = [
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_user' => 'ganatech.id@gmail.com',
				'smtp_pass' => '-ganatech2020-',
				'smtp_port' => 465,
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'crlf' 		=> "\r\n",
				'newline' 	=> "\r\n"
			];
			// Load library email dan konfigurasinya
			$this->load->library('email', $config);

			// Send Email
			$this->load->library('encrypt');
			$this->email->clear();
			$this->email->from($_POST['email'], "Dari [ " . $_POST['nama'] . " ]");
			$this->email->to($this->getEmailAdmin());
			$this->email->subject('Help Desk Ruang Bahagia');
			$this->email->message($message);
			$this->email->set_newline("\r\n");
			if ($this->email->send()) {
				echo true;
			} else {
				// echo $this->email->print_debugger();
				echo false;
			}
		}
	}
}