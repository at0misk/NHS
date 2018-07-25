<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expense extends CI_Controller {

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
	public function check_session(){
		if(!$this->session->id){
			redirect("/");
		}
	}
	public function create()
	{
		$this->check_session();
		$this->load->model("Expense_model");
		$new_expense = $this->Expense_model->create($this->input->post());
		redirect("/expenses");
	}
	public function all(){
		$this->check_session();
		$this->load->model("Expense_model");
		$query['expenses'] = $this->Expense_model->get_expenses_by_user($this->session->id);
		$this->load->view('expenses', $query);
	}
	public function new_expense(){
		$this->check_session();
		$this->load->view('expenses_new');
	}
	public function category($cat){
		$this->check_session();
		$this->load->model("Expense_model");
		$data['expenses'] = $this->Expense_model->get_expenses_by_category($cat);
		$data['cat'] = $cat;
		$this->load->view('expense_category', $data);
	}
}
