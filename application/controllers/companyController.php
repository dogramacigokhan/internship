<?php
class CompanyController extends CI_Controller{
    
    function __construct(){
        
        parent::__construct();
        $this->load->model('menuModel');
        $this->load->model('addressModel');
        $this->load->model('jobModel');     
        $this->load->model('companyModel');
        $this->load->model('commentModel');
        $this->load->model('userModel');
        
        $this->load->library('dol/LinkObject');
        $this->load->library('form_validation');
        
        $this->load->helper('topMenu');
        $this->load->helper('fragments');
        $this->load->helper('url');
        
        date_default_timezone_set('Europe/Istanbul');
    }
    
    public function showCompany(){
        $errorState = $this->input->get('errorState');
        $message = $this->input->get('message');
        
        $this->load->view('fragments/header', getHeaderData($this));
        
        if($message)
            $this->load->view('fragments/content', $this->_getCompanyContentData(array('errorState' => $errorState, 'message' => $message)));
        else
            $this->load->view('fragments/content', $this->_getCompanyContentData());
       
        $this->load->view('fragments/footer', $this->_getCompanyFooterData());
    }
    
    public function AddCompanyComment(){
        // boÅŸ bÄ±rakma olayÄ±nÄ± ekle
        $loggedID = $this->session->userdata('loggedIn');
        $data['companyID'] = $this->input->get('companyID');
        if($loggedID){
            $this->form_validation->set_rules('commentTitle', 'CommentTitle', 'required');
            $this->form_validation->set_rules('commentText', 'CommentText', 'required');
           
            $data['commentTitle'] = $this->input->post('commentTitle');
            $data['commentText'] = $this->input->post('commentText');

            $data['userID'] = $this->session->userdata('userID');

            $data['commentDate']= date('Y-m-d h:i:s');

            $this->commentModel->registerToCompanyComment($data);
        }
        redirect('http://localhost/Internship/index.php/companyController/showCompany?companyID='.$data['companyID']);
        
    }
    
    public function deleteJob(){
        $jobID = $this->input->get('jobID');
        $companyID = $this->input->get('companyID'); 
        $this->jobModel->deleteJob($jobID);
        redirect('http://localhost/Internship/index.php/companyController/showCompany?companyID='.$companyID);
    }
    
    public function addInternshipJob(){
        $errorState = 0;
        $message = '';
        
        $this->form_validation->set_rules('jobName', 'JobName', 'required');
        $this->form_validation->set_rules('jobContent', 'JobContent', 'required');
        
        $data['companyID'] = $this->input->get('companyID');
        
        if($this->form_validation->run() == FALSE){
            $message = 'Eksik bir veri girdiniz.';
            $errorState = 1;
        }
        else{
            $data['jobTitle'] = $this->input->post('jobName', TRUE);
            $data['jobContent'] = $this->input->post('jobContent', TRUE);
            $addressID = $this->addressModel->companyAddressIDfinder($data['companyID']);
            $data['addressID'] = $addressID[0]->AddressID;
            $result = $this->jobModel->registerInternshipJob($data);
            
            if($result)
                {
                    $message = $data['jobTitle'].' adlÄ± iÅŸiniz baÅŸarÄ±lÄ± bir ÅŸekilde eklenmiÅŸtir.';
                    $errorState = 0;
                }
                else
                {
                    $message = 'iÅŸi eklerken bir hata oluÅŸtu.';
                    $errorState = 1;
                } 
        }
        redirect('http://localhost/Internship/index.php/companyController/showCompany?companyID='.$data['companyID'].'&errorState='.$errorState.'&message='.$message);
    }
    
    private function _getCompanyContentData($extraArgs = array())
    {   
        $contentData['contentType'] = 'company_content';
        
        $contentData['companyID'] = $this->input->get('companyID', TRUE);
        
        $companyInfos = $this->companyModel->companyInfos($contentData['companyID']);
        
        $contentData['companyName'] = $companyInfos->CompanyName;
        $contentData['bossName'] = $companyInfos->Name;
        $contentData['bossSurname'] = $companyInfos->Surname;
        
        $contentData['jobs'] = $this->jobModel->internshipJobFinder($contentData['companyID']);
        
        $contentData['addressInfo'] = $this->addressModel->companyAddressFinder($contentData['companyID']);
        $contentData['userType'] = $this->session->userdata('userType');
        
        $contentData['commentInfo'] = $this->commentModel->companyCommentInfo($contentData['companyID']);
        
        if (count($extraArgs) > 0)
        {
            foreach ($extraArgs as $name => $arg) {
                $contentData[$name] = $arg;
            }
        }
        return $contentData;
    }
    
    private function _getCompanyFooterData()
    {
        $footerData['imgPath'] = "../../Images/";
        return $footerData;
    }
}
?>
