<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('auth');
	}

	public function process(){
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$this->load->model('user_m');
			$query = $this->user_m->login($post);

			if($query->num_rows()>0){
				// echo "Login sukses";
				$row = $query->row();
				$params = array(
					'userid' => $row->user_id,
					'level' => $row->level
				);
				$this->session->set_userdata($params);
				echo "<script>
				alert('Login Sukses');
				window.location='".site_url('dashboard')."';
				</script>";
				// echo $row->username;
			}else{
				echo "<script>
				alert('Login gagal');
				window.location='".site_url('auth')."';
				</script>";			}
		}

	}
}
