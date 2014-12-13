<?php
class RegisterController extends CI_Controller
{
	function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->library('dol/LinkObject');
            $this->load->helper(array('form', 'url', 'topMenu', 'fragments'));
            $this->load->library('form_validation');
            $this->load->model("userModel");
            $this->load->model("addressModel");
            $this->load->model("menuModel");
            $this->load->library("session");
            $this->load->helper('url');
	}
		
	
        public function addUser(){
            if($this->session->userdata('loggedIn') == NULL)
                $data['loggedIn'] = 0;
            else {
                $this->load->model('addressModel');
                $data['loggedIn'] = 1;
            }   
            $data['cities'] = $this->addressModel->cities();
            $data['states'] = $this->addressModel->states();
            
            $data['cssPath'] = "../../css/";
            $data['jsPath'] = "../../js";
            $data['imgPath'] = "../../Images/";
            
            if ($data['loggedIn'])
                $data['userName'] = $this->session->userdata('username');
            
            $this->load->view('fragments/header', getHeaderData($this));
            $this->load->view('registerView', $data);
            $this->load->view('fragments/footer', $data);
        }
	
	function registerUser(){
            //define all rules
            $this->form_validation->set_rules('passwordForRegister', 'Password', 'required');
            $this->form_validation->set_rules('firstName', 'FirstName', 'required');
            $this->form_validation->set_rules('lastName', 'LastName', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]');
            $this->form_validation->set_rules('userName', 'UserName', 'required|is_unique[user.Username]');
            $this->form_validation->set_rules('rePassword', 'rePassword', 'required');
            $this->form_validation->set_rules('birthday', 'Birthday', 'required');
            $this->form_validation->set_rules('sex', 'Sex', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('txtAddress', 'TxtAddress', 'required');
            $this->form_validation->set_rules('secretQuestion', 'SecretQuestion', 'required');
            $this->form_validation->set_rules('secretAnswer', 'SecretAnswer', 'required');


            if($this->form_validation->run() == FALSE)
                    redirect('http://localhost/Internship/index.php/registerController/addUser');
            else{
                //TRUE argument is used to avoid xss vulnerability
                $firstName = $this->input->post('firstName', TRUE);
                $lastName = $this->input->post('lastName', TRUE);
                $secretQuestion = $this->input->post('secretQuestion', TRUE);
                $email = $this->input->post('email', TRUE);
                $phone = $this->input->post('phone', TRUE);
                $userName = $this->input->post('userName', TRUE);
                $passwordForRegister = $this->input->post('passwordForRegister', TRUE);
                $secretAnswer = $this->input->post('secretAnswer', TRUE);
                $birthday = $this->input->post('birthday', TRUE);
                $sex = $this->input->post('sex', TRUE);
                $rePassword = $this->input->post('rePassword', TRUE);
                date_default_timezone_set('Europe/Istanbul');
                $date = date('Y-m-d', time());

                if($sex == "Male")
                        $sex = 1;
                else
                        $sex = 2;
                //assign all variables to data array
                $data = array($firstName, $lastName, $secretQuestion, $email, $phone, $userName, 
                        $passwordForRegister, $secretAnswer, $birthday, $sex, $date);
                //load userModel

                $this->userModel->register($data);
                
                $txtAddress = $this->input->post('txtAddress', TRUE);
                $state = $this->input->post('states', TRUE);
                $userID = $this->userModel->userFinder($userName);
                
                
                $data = array($txtAddress, $state, $userID);
                $this->addressModel->registerUserAddress($data);

                redirect(base_url());
            }
	}
}
?>