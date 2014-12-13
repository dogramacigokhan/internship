<?php

class AddressModel extends CI_Model
{
    function __construct(){
        parent::__construct();
    }

    function cities(){
        $this->db->select('CityName, CityID');
        $query = $this->db->get('city');		
        return $query->result();
    }

    function states(){
        $query = $this->db->get('state');
        return $query->result();
    }
    
    function city($cityID)
    {
        $this->db->select('CityName');
        $query = $this->db->get_where('city', array('CityID' => $cityID));		
        return $query->result();
    }
    
    
    public function registerUserAddress($data){
        $address = $data[0];
        $stateName = $data[1];
        $userID = $data[2];
        $stateID = $this->stateIDfinder($stateName);
        
        $dataForDatabase = array(
                        'Address' => $address,
                        'State_StateID' => $stateID,
                        'AddressID' => NULL,
                        'UserID' => $userID
        );
        
        $add = $this->db->insert('useraddress', $dataForDatabase);
        return $add;
        
    }
    
    public function registerCompanyAddress($data){
        $companyName = $data[0];
        $stateName = $data[1];
        $address = $data[2];
        $stateID = $this->stateIDfinder($stateName);
        $companyID = $this->companyIDfinder($companyName);
        
        $dataForDatabase = array(
                        'Address' => $address,
                        'StateID' => $stateID,
                        'AddressID' => NULL,
                        'CompanyID' => $companyID
        );
        $add = $this->db->insert('companyaddress', $dataForDatabase);
        return $add;
    }
    
    
    private  function companyIDfinder($companyName){
        $this->db->select('CompanyID');
        $query = $this->db->get_where('company', array('CompanyName' => $companyName));
        $row = $query->row();
        return $row->CompanyID;
    }
    
    public function userAddressFinder($userID){
        $query = $this->db->query('SELECT useraddress.Address, state.StateName, city.CityName
                                   FROM state, city, useraddress, user
                                   WHERE state.StateID=useraddress.State_StateID AND
                                         state.CityID=city.CityID AND 
                                         useraddress.UserID = user.UserID AND
                                         user.UserID = '.$userID);
        return $query->result();
    }
    
    public function companyAddressFinder($companyID){
        $query = $this->db->query('SELECT companyaddress.Address, state.StateName, city.CityName
                                   FROM state, city, companyaddress, company
                                   WHERE state.StateID=companyaddress.StateID AND
                                         state.CityID=city.CityID AND
                                         companyaddress.CompanyID=company.CompanyID AND
                                         company.CompanyID='.$companyID);
        return $query->result();
    }
    
    private function stateIDfinder($stateName){
        $this->db->select('StateID');
        $query = $this->db->get_where('state', array('StateName' => $stateName));		
        $row = $query->row();
        return $row->StateID;
    }
    
    public function companyAddressIDfinder($companyID){
        $this->db->select('AddressID');
        $query = $this->db->get_where('companyaddress', array('CompanyID' => $companyID));	
        return $query->result();
    }
}

?>
