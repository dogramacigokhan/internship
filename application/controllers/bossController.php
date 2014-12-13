<?php
class BossController extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->library("session");
        $this->load->library('form_validation');
        $this->load->model('jobModel');
        $this->load->helper('topMenu');
        $this->load->helper('fragments');
        $this->load->helper('url');
        $this->load->library('dol/LinkObject');
        
        $this->load->model('menuModel');
        $this->load->model("userModel");
        $this->load->model("companyModel");
        $this->load->model('addressModel');
    }
    
    public function deleteCompany(){
        $companyID = $this->input->get('companyID');
        $this->companyModel->deleteCompany($companyID);
        redirect('http://localhost/Internship/index.php/bossController/showBossPage');
    }
    
    public function addCompany()
    {
        $errorState = 0;
        $message = '';
        
        $this->form_validation->set_rules('companyName', 'Password', 'required');
        $this->form_validation->set_rules('address', 'FirstName', 'required');
        
        if($this->form_validation->run() == FALSE)
        {
            $message = 'Eksik bir veri girdiniz.';
            $errorState = 1;
        }
        else
        {
            $state = $this->input->post('states', TRUE);
            $city = $this->input->post('cities', TRUE);
            if(!$state || !$city){
                $errorState = 1;
                $message = 'Sehir veya semt secmediniz.';
            }else{
                $companyName = $this->input->post('companyName', TRUE);
                $userID = $this->session->userData('userID');
                $data = array($companyName, $userID);
                $result1 = $this->companyModel->registerCompany($data);
                $address = $this->input->post('address', TRUE);

                $data2 = array($companyName, $state, $address);
                $this->load->model('addressModel');
                $result2 = $this->addressModel->registerCompanyAddress($data2);

                if($result1 && $result2)
                {
                    $message = $companyName.' adlÄ± ÅŸirketiniz baÅŸarÄ±lÄ± bir ÅŸekilde eklenmiÅŸtir.';
                    $errorState = 0;
                }
                else
                {
                    $message = 'Sirketi eklerken bir hata olustu.';
                    $errorState = 1;
                }
            }
        }
            
        redirect('http://localhost/Internship/index.php/bossController/showBossPage?errorState='.$errorState.'&message='.$message);
    }
    
    public function showBossPage(){
        $errorState = $this->input->get('errorState');
        $message = $this->input->get('message');
        
        $this->load->view('fragments/header', getHeaderData($this));
        
        if($message)
            $this->load->view('bossContentView', $this->_getContentData(array('errorState' => $errorState, 'message' => $message)));
        else
            $this->load->view('bossContentView', $this->_getContentData());
        $this->load->view('fragments/footer', $this->_getFooterData());
        
    }
    
    private function _getContentData($extraArgs = array())
    {
        $username = $this->session->userdata('username');
        $userID = $this->userModel->userFinder($username);

        $contentData['username'] = $username;
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
        
        return $contentData;
    }

    private function _getFooterData()
    {
        $footerData['imgPath'] = "../../Images/";
        return $footerData;
    }
}
?>