<?php
class DefaultController extends CI_Controller
{
    
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->library('dol/LinkObject');
        $this->load->model('menuModel');
        $this->load->model('addressModel');
        $this->load->model('jobModel');
        $this->load->helper('topMenu');
        $this->load->helper('fragments');
    }
		
    public function index()
    {
        
        $this->load->view('fragments/header', getHeaderData($this));
        
        $this->load->view('fragments/content', $this->_getContentData());
        
        $this->load->view('fragments/footer');
    }
    
    
    
    private function _getContentData()
    {
        $contentData['contentType'] = 'default';
        $contentData['cities'] = $this->addressModel->cities();
        $contentData['jobCount'] = $this->jobModel->internshipJobCount();
        
        $contentData['jobs'] = $this->jobModel->lastAdded();
        
        return $contentData;
    }
		
}
?>