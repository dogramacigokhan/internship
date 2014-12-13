<?php

class CompanyModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    //add specified company to the database. If operation is successful return true
    //else return false
    public function registerCompany($data){
        $companyName = $data[0];
        $userID = $data[1];
        $dataForDatabase = array(
                 'CompanyID' => NULL,
                 'CompanyName' => $companyName,
                 'IsConfirmed' => 0,
                 'SelectedPictureID' => NULL,
                 'UserID' => $userID
            
        );
        $add = $this->db->insert('company', $dataForDatabase);

        return $add;
    }
    
    public function companyFinder($userID){
        $this->db->select('CompanyName, CompanyID');
        $query = $this->db->get_where('company', array('UserID' => $userID));
        return $query->result();
    }
    
    public function deleteCompany($companyID){
        $this->db->delete('company', array('CompanyID' => $companyID)); 
    }
    
    public function companyInfos($companyID)
    {
        $queryStr = 'SELECT *
                     FROM Company C, User U
                     WHERE C.CompanyID = '.$companyID.'
                       AND C.UserID = U.UserID';
        
        $result = $this->db->query($queryStr);
        return $result->row();
    }
    
    public function selectedCompanyPicture($companyID)
    {
        //
    }
}
?>
