<?php

class bk extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('book');
}
function index() {
//Including validation library
$this->load->library('form_validation');

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Name Field
$this->form_validation->set_rules('firsname', 'required|min_length[5]|max_length[15]');

//Validating ID Field
$this->form_validation->set_rules('idno', 'required|min_length[5]|max_length[15]');

//Validating Mobile no. Field
$this->form_validation->set_rules('phone', 'required|regex_match[/^[0-9]{10}$/]');

//Validating Address Field
$this->form_validation->set_rules('address', 'required|min_length[10]|max_length[50]');

//Validating Date Field
$this->form_validation->set_rules('date', 'required|min_length[10]|max_length[50]');


if ($this->form_validation->run() == FALSE) {
$this->load->view('booking');
} else {
//Setting values for tabel columns
$data = array(
'Firstname' => $this->input->post('firstname'),
'idno' => $this->input->post('idno'),
'phone' => $this->input->post('phone'),
'address' => $this->input->post('address'),
'date' => $this->input->post('date')

);
//Transfering data to Model
$this->insert_model->form_insert($data);
$data['message'] = 'Data Inserted Successfully';
//Loading View
$this->load->view('booking', $data);
}
}

}

?>