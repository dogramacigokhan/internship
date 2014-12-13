<?php
class Admin extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('jobModel');
        $this->load->helper('topMenu');
        $this->load->helper('fragments');
        $this->load->library('Pdf');
        $this->load->library('dol/LinkObject');
        
        $this->load->model('menuModel');
        $this->load->model('userModel');
        $this->load->model('companyModel');
        $this->load->model('addressModel');
        $this->load->model('insert');
    }
    
    public function index(){
        $load = FALSE;
        
        $menu = $this->input->get('m', TRUE);
        $menu = (!$menu) ? 1 : $menu;
        
        $create_users_pdf = $this->input->post('create_users_pdf', TRUE);
        $create_most_company_pdf = $this->input->post('create_most_company_pdf', TRUE);
        $create_most_job_pdf = $this->input->post('create_most_job_pdf', TRUE);
        
        if ($create_users_pdf != FALSE)
        {
            $menu = 1;
            $load = TRUE;
        }
        else if ($create_most_company_pdf != FALSE)
        {
            $menu = 2;
            $load = TRUE;
        }
        else if ($create_most_job_pdf != FALSE)
        {
            $menu = 3;
            $load = TRUE;
        }
        
        $this->load->view('fragments/header', $this->_getHeaderData());
        
        $html = $this->load->view('fragments/content', $this->_getContentData($menu), $load);
        
        $this->load->view('fragments/footer', $this->_getFooterData());
        
        if ($create_users_pdf)
        {
            $html = str_replace(array('<img src="http://localhost/Internship/Images/cop.png" />',
                                      '<th class="column05"><a>Sil</a></th>'), '', $html);
            $this->_createPdf($html, 'users.pdf');
        }
        else if ($create_most_company_pdf)
        {
            $this->_createPdf($html, 'most_voted_companies.pdf');
        }
        else if ($create_most_job_pdf)
        {
            $this->_createPdf($html, 'most_voted_jobs.pdf');
        }
        
    }
    
    private function _getHeaderData()
    {
        $headerData = getHeaderData($this);
        $headerData['jsFiles'] = array('istatistik.js');
        
        return $headerData;
    }
    
    private function _createPdf($text, $fileName)
    {
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetFont('dejavusans', '', 10);
        $pdf->AddPage();
        $pdf->writeHTML($text, true, false, true, false, '');
        ob_end_clean();
        $pdf->Output($fileName, 'I');
    }
    
    private function _getContentData($menu)
    {
        $deleteUserID = $this->input->get('du', TRUE);
        if ($deleteUserID)
        {
            $contentData['deletedUserID'] = $deleteUserID;
            $this->userModel->deleteUser($deleteUserID);
        }
        
        if ($menu == 1)
        {
            // Users
            $contentData['users'] = $this->userModel->users();
        }
        else if ($menu == 2)
        {
            // EN çok yorumlanan ilanlar
            $contentData['mostCommentedCompanies'] = $this->jobModel->mostCommentedCompanies();
        }
        else if ($menu == 3)
        {
            // EN çok yorumlanan ilanlar
            $contentData['mostCommentedJobs'] = $this->jobModel->mostCommentedJobs();
        }
        else if ($menu == 4)
        {
            // EN çok yorumlanan ilanlar
            $contentData['users'] = $this->userModel->users();
        }
        
        $contentData['m'] = $menu;
        $contentData['contentType'] = 'adminContent';
        return $contentData;
    }

    private function _getFooterData()
    {
        $footerData['imgPath'] = "../../Images/";
        return $footerData;
    }
}
?>