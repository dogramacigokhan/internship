<?php

class Search extends CI_Controller
{
    
    function __construct() {
        parent::__construct();
        // Load models
        $this->load->database();
        
        $this->load->library('dol/LinkObject');
        
        $this->load->model('menuModel');
        $this->load->model('addressModel');
        $this->load->model('jobModel');
        
        $this->load->helper('url');
        $this->load->helper('topMenu');
        $this->load->helper('fragments');
    }
    
    public function searchInternship() {
        
        $this->load->view('fragments/header', $this->_getHeaderData());
        
        $this->load->view('fragments/content', $this->_getContentData());
        
        $this->load->view('fragments/footer', $this->_getFooterData());
    }
    
    private function _getHeaderData()
    {
        $headerData = getHeaderData($this);
        
        $jsFiles = array(
                        'AdPreview.js',
                        'draganddrop.js',
                        'Ilanlar.js',
                        'jqModal.js',
                        'jquery.highlight-3.js',
                        'jquery.hoverIntent.min.js',
                        'jquery.qtip-1.0.0-rc3-dm-min.js',
                        'jquery.scrollTo-min.js',
                        'jquery-toplink.js',
                        'SavedSearchHelper.js',
                        'SmartListBox.js',
                        'YBPopup_Ilanlar.js',);
        
        $headerData['jsFiles'] = $jsFiles;

        return $headerData;
    }
    
    private function _getContentData()
    {
        $offset = 0;
        $limit = 20;
        
        $keyword = $this->input->get('keyword', TRUE);
        $cityID = $this->input->get('city', TRUE);
        $jobCount = $this->jobModel->internshipJobCount($keyword, $cityID);
        
        if ($this->input->get('p', TRUE))
                $offset = ($this->input->get('p', TRUE) - 1) * $limit;
        
        $contentData['currentPage'] = ($this->input->get('p', TRUE) != NULL) ? $this->input->get('p', TRUE) : 1;
        $contentData['pageCount'] = ($jobCount % $limit == 0) ? $jobCount/$limit : (int)($jobCount/$limit)+1;
        
        $contentData['contentType'] = 'search';
        
        $contentData['keyword'] = $this->input->get('keyword');
        $contentData['cityID'] = $cityID;
        $contentData['city'] = $this->addressModel->city($cityID);
        
        $contentData['baseUrl'] = "";
        $contentData['perPage'] = $limit;
        
        $contentData['jobCount'] = $jobCount;
        $contentData['jobs'] = $this->jobModel->searchInternshipJobs($keyword, $cityID, $offset, $limit);
        
        return $contentData;
    }
    
    private function _getFooterData()
    {
        $footerData['imgPath'] = '../../Images/';
        
        return $footerData;
    }
}

?>
