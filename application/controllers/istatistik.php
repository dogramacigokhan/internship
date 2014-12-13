<?php


class Istatistik extends CI_Controller
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
    
    public function index()
    {
        $op = $this->input->post('op', TRUE);
        
        if ($op == 1)
        {
            $result = $this->userModel->mostCommenterToCompany();
            echo $result[0]->UserName;
        }
        else if ($op == 2)
        {
            $result = $this->userModel->mostCommenterToJob();
            echo $result[0]->UserName;
        }
        else if ($op == 3)
        {
            echo $this->userModel->userCount();
        }
        else if ($op == 4)
        {
            echo $this->jobModel->jobCount();
        }
        else if ($op == 5)
        {
            echo $this->userModel->bossCount();
        }
        else if ($op == 6)
        {
            echo $this->userModel->haveCompanyRatio();
        }
        else if ($op == 7)
        {            
            echo $this->jobModel->jobCount() / $this->userModel->bossCount();
        }
        else if ($op == 8)
        {            
            echo $this->userModel->applyCount();
        }
        else if ($op == 9)
        {            
            echo $this->userModel->applyRatio();
        }
        else if ($op == 10)
        {            
            echo $this->userModel->mostAppliedUser();
        }
    }
}

?>
