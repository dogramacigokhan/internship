<?php

class InternshipJob extends CI_Controller
{
    
    function __construct() {
        parent::__construct();
        // Load models
        $this->load->database();
        
        $this->load->library('dol/LinkObject');
        $this->load->library('form_validation');

        $this->load->model('menuModel');
        $this->load->model('addressModel');
        $this->load->model('jobModel');
        $this->load->model('commentModel');
        
        $this->load->helper('url');
        $this->load->helper('topMenu');
        $this->load->helper('fragments');
        
        date_default_timezone_set('Europe/Istanbul');
    }
    
    public function job()
    {
        $this->load->view('fragments/header', getHeaderData($this));
        
        $this->load->view('fragments/content', $this->_getJobContentData());
        
        $this->load->view('fragments/footer', $this->_getFooterData());
    }
    
    public function apply()
    {
        $this->load->view('fragments/header', getHeaderData($this));
        
        $this->load->view('fragments/content', $this->_getApplyContentData());
        
        $this->load->view('fragments/footer', $this->_getFooterData());
    }
    
    public function addJobComment(){
        // boş bırakma olayını ekle
        $this->form_validation->set_rules('commentTitle', 'CommentTitle', 'required');
        $this->form_validation->set_rules('commentText', 'CommentText', 'required');
        
        $data['jobID'] = $this->input->get('id');
        $loggedIn = $this->session->userdata('loggedIn');
        if($loggedIn){
            $data['commentTitle'] = $this->input->post('commentTitle');
            $data['commentText'] = $this->input->post('commentText');

            $data['commentDate'] = date('Y-m-d h:i:s');

            $data['userID'] = $this->session->userdata('userID');

            $this->commentModel->registerToJobComment($data);
        }
        redirect('http://localhost/Internship/index.php/InternshipJob/job?id='.$data['jobID']);
        
    }

        private function _getHeaderData()
    {
        $defaultTopMenuItems = $this->menuModel->topMenuItems();
        $headerData['topMenuItems'] = privateTopMenuItems($defaultTopMenuItems);
        
        $headerData['loggedIn'] = ($this->session->userdata('loggedIn') == NULL) ? 0 : 1;
        
        if ($headerData['loggedIn'])
            $headerData['userName'] = $this->session->userdata('username');
        
        $headerData['cssPath'] = '../../css/';
        $headerData['jsPath'] = '../../js/';

        return $headerData;
    }
    
    private function _getJobContentData()
    {
        $userID = $this->session->userdata('userID');
        $contentData['loggedIn'] = $this->session->userdata('loggedIn');
        
        $jobID = $this->input->get('id', TRUE);
        
        $contentData['contentType'] = 'internshipJob';
        $contentData['job'] = $this->jobModel->internshipJob($jobID);
        $contentData['jobID'] = $jobID;
        
        $contentData['commentInfo'] = $this->commentModel->jobCommentInfo($jobID);
        
        $contentData['appliedBefore'] = FALSE;
        
        if ($userID && $this->jobModel->appliedBefore($userID, $jobID))
        {
            $contentData['appliedBefore'] = TRUE;
        }
        
        return $contentData;
    }
    
    private function _getApplyContentData()
    {
        $userID = $this->session->userdata('userID');
        $jobID = $this->input->get('id', TRUE);
        
        $contentData['contentType'] = 'apply';
        
        if ($userID && !$this->jobModel->appliedBefore($userID, $jobID))
        {
            $this->jobModel->apply($userID, $jobID);
        }
        
        return $contentData;
    }
    
    private function _getFooterData()
    {
        $footerData['imgPath'] = '../../Images/';
        return $footerData;
    }
}

?>
