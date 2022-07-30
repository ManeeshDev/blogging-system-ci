<!--
	@author maneesh
 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function signup(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('mobile', 'Modile', 'trim|required|min_length[10]|max_length[10]');

		if ($this->form_validation->run()) {
			$this->load->model('queries');
			$data = $this->input->post();
			unset($data['submit']);
			if ($this->queries->register($data)) {
				$this->session->set_flashdata('response2', 'Registered Successfully..!');
			}else{
				$this->session->set_flashdata('response2', 'Registeration Faild..!');
			}
			return redirect('welcome');
		}else{
			return $this->index();
		}
	}

	public function  signin(){
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run()) {
			$this->load->model('queries');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$user = $this->queries->login($email, $password);

			if ($user) {
				$session_data = array(
					'userid' => $user->userID,
					'username' => $user->userName,
					'email' => $user->email,
					'mobile' => $user->mobile,
					'user_role' => $user->roleID,
				);

				$this->session->set_userdata($session_data);
				return redirect('dashboard');

			}else{
				$this->session->set_flashdata('response', 'Login Faild..! | Wrong Email or Password');
				return redirect('welcome');

			}
		}else{
			return $this->index();
		}
	}

	public function logout(){

		$userid = $this->session->userdata('userid');
		$this->session->unset_userdata('userid');

		return redirect('welcome');
	}


}

?>
