<?php
class User extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->library("session");
        $this->load->library('form_validation');
        $this->load->model('jobModel');
        $this->load->helper('topMenu');
        $this->load->helper('fragments');
        $this->load->library('dol/LinkObject');
        
        $this->load->model('menuModel');
        $this->load->model("userModel");
        $this->load->model("companyModel");
        $this->load->model('addressModel');
    }
    
    public function userInfo(){
        
        $this->load->view('fragments/header', getHeaderData($this));
        
        $this->load->view('fragments/content', $this->_getContentData());
        
        $this->load->view('fragments/footer', $this->_getFooterData());
        
    }
    
    private function _getContentData($extraArgs = array())
    {
        $userID = $this->input->get('id', TRUE);
        
        if ($userID)
        {
            $username = $this->session->userdata('username');

            $contentData['contentType'] = 'userInfo';

            $contentData['userID'] = $userID;
            $contentData['currentUserID'] = $this->session->userdata('userID');
            $contentData['username'] = $this->userModel->userNameFinder($userID);
            $contentData['companies'] = $this->companyModel->companyFinder($userID);
            $contentData['cities'] = $this->addressModel->cities();
            $contentData['states'] = $this->addressModel->states();

            $userInfo = $this->userModel->userInfoFinder($username);
            foreach ($userInfo as $info)
            {
                $contentData['name'] = $info->Name;
                $contentData['surname'] = $info->Surname;
                $contentData['email'] = $info->Email;
                $contentData['phone'] = $info->PhoneNumber;
                $contentData['birthday'] = $info->DateOfBirth;
                $contentData['regDate'] = $info->RegistrationDate;
            }

            $addressInfo = $this->addressModel->userAddressFinder($userID);
            foreach ($addressInfo as $info)
            {
                $contentData['addressName'] = $info->Address;
                $contentData['stateName'] = $info->StateName;
                $contentData['cityName'] = $info->CityName;
            }

            if (count($extraArgs) > 0)
            {
                foreach ($extraArgs as $name => $arg) {
                    $contentData[$name] = $arg;
                }
            }
        }
        return $contentData;
    }

    private function _getFooterData()
    {
        $footerData['imgPath'] = "../../Images/";
        return $footerData;
    }
}
?>