<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function signin(){
		sudah_login();
		$this->load->model('user_m','mymodel');
		$sessid = '';
		while (strlen($sessid) < 32)
		{
			$sessid .= mt_rand(0, mt_getrandmax());
		}

		// To make the session ID even more secure we'll combine it with the user's IP
		$sessid .= $this->input->ip_address();
		
		$userName= trim($this->input->post('userName'));
		$password= trim($this->input->post('password'));

		$q = $this->mymodel->processLogin($userName,$password);


		$this->form_validation->set_rules('userName', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_message('required', 'Masukan %s');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
			echo "gagal";
		}
		else{
		  $h = $q->row_array();
		  $code_activation = $h['code_activation'];
		  $kata_sandi = $h['password'];
		  $cek=$this->arr2md5(array($code_activation,$password));
		  if($cek==$kata_sandi && $cek<>'')
		  {
			  $query = $q->result();
				$user = array(
				'userid' => $query[0]->userid,
				'nama_user' => $query[0]->nama_user,
				'fullname' => $query[0]->fullname,
				'group_name' => $query[0]->group_name,
				'group_id' => $query[0]->group_id,
				'jurusita_id' => $query[0]->jurusita_id,
				'session_id'	=> md5(uniqid($sessid, TRUE)),
				'ip_address'	=> $this->input->ip_address(),
				'user_agent'	=> substr($this->input->user_agent(), 0, 120),
				'last_activity'	=> time(),
			);
			$this->session->set_userdata($user);
			redirect('/dashboard');
		  }
		  else{
			  $this->form_validation->set_message('validateUser', 'Username atau password salah');
			  $this->session->set_flashdata('error_msg', '<div class="alert alert-danger text-center">Password salah</div>');
			  $this->load->view('login');
		  }
			
	  }
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

	public function validateUser($userName,$recordCount){
	  if ($recordCount != 0){
	   return TRUE;
	  }else{
	   $this->form_validation->set_message('validateUser', 'Username atau password salah');
	   return FALSE;
	  }
	 }
	 
	 function arr2md5($arrinput){
	    $hasil='';
	    foreach($arrinput as $val){
	        if($hasil==''){
	            $hasil=md5($val);
	        }
	        else {
	            $code=md5($val);
	            for($hit=0;$hit<min(array(strlen($code),strlen($hasil)));$hit++){
	                $hasil[$hit]=chr(ord($hasil[$hit]) ^ ord($code[$hit]));
	            }
	        }
	    }
	    return(md5($hasil));
	}

}