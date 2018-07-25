<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function new()
	{
		$this->load->view('login');
	}
	public function login_user()
	{
		$this->load->model("User_model");
		$found_user = $this->User_model->get_user_by_email($this->input->post('email'));
		if($found_user){
			if($found_user['password'] == $this->input->post('password')){
						$this->session->set_userdata($found_user);
			}
			else{
				$this->session->set_flashdata('login_error', 'Incorrect Password');
				redirect("/");
			}
		}
		else{
				$this->session->set_flashdata('login_error', 'No User Found');
				redirect("/");
		}
		redirect("/expenses");
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect("/");
	}
}
