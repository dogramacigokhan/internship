<?php
class LoginController extends CI_Controller{
        
    function __construct(){
        parent::__construct();
        $this->load->library('dol/LinkObject');
        $this->load->model('menuModel');
        
        $this->load->helper('topMenu');
        $this->load->helper('fragments');
        $this->load->helper('url');

        $this->load->model('addressModel');
        $this->load->model('jobModel');
        $this->load->model('userModel');
    }
        
    public function login(){    
        //create variables and get their values from login form
        $userName = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
        $rememberMe = $this->input->post('rememberMe', TRUE);
        
        $errorMsg = $this->input->get('err', TRUE);
           
        if(!$errorMsg && !$this->_checkUserAndLogin($userName, $password, $rememberMe)){

            //user not found in database
            redirect('loginController/login?err=1');
        } 
        
        $this->load->view('fragments/header', $this->_getLoginHeaderData());
        $this->load->view('fragments/content', $this->_getLoginContentData());
        $this->load->view('fragments/footer', $this->_getLoginFooterData());
    }
    
    private function _getLoginHeaderData()
    {
        $loginError = 'Eksik veya hatalı bir bilgi girdiniz.';
        
        $headerData = getHeaderData($this);
        
        $errorMsg = $this->input->get('err', TRUE);
        if ($errorMsg) $headerData['loginError'] = $loginError;
        
        return $headerData;
    }
    
    private function _getLoginContentData()
    {
        $contentData['contentType'] = 'default';
        $contentData['cities'] = $this->addressModel->cities();
        $contentData['jobCount'] = $this->jobModel->internshipJobCount();
        $contentData['jobs'] = $this->jobModel->lastAdded();
        return $contentData;
    }
    
    private function _getLoginFooterData()
    {
        $footerData['imgPath'] = "../../Images/";
        
        return $footerData;
    }
    
    private function _checkUserAndLogin($userName, $password, $rememberMe)
    {
        if($this->userModel->userLoginControl(array($userName, $password))) 
        {

            $userID = $this->userModel->userFinder($userName);
            $userType = $this->userModel->userTypeChecker($userID);
            
            $sessionData = array(
                    'username' => $userName,
                    'userID'   => $userID,
                    'loginDate'=> date('Y-m-d'),
                    'loggedIn' => TRUE,
                    'userType' => $userType
             );

            $this->session->set_userdata($sessionData);

            //if rememberMe box is checked, then never expire 
            if($rememberMe == 'on')
                $this->session->sess_expiration = 0;
            
            return true;
        }
        //user not found in database
        else     
        {
            redirect('loginController/login?err=1');;
        }
    }
    
    public function logout(){
        $this->load->helper('url');
        $this->session->sess_destroy();
        redirect(base_url());
    }

}
?>