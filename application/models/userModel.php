<?php

class UserModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    //find UserID from "user" table. Then, search for UserID in "$userType" table.
    //if it is found return TRUE, else return FALSE
    function userTypeChecker($userID)
    {
        
        $userType = '';
        
        $query = $this->db->get_where('Boss', array('UserID' => $userID));
        if ($query->result())
        {
            if ($userType == '')
                $userType = 'Boss';
            else
                $userType .= ', Boss';
        }
        
        $queryAdmin = $this->db->get_where('Administrator', array('UserID' => $userID));
        if ($queryAdmin->result())
        {
            if ($userType == '')
                $userType = 'Admin';
            else
                $userType .= ', Admin';
        }
        
        return $userType;
        
    }
    
    function deleteUser($userID)
    {
        $this->db->where('UserID', $userID);
        $this->db->delete('user'); 
    }
    
    //get $username as argument and return $UserID
    function userFinder($username){
        $this->db->select('UserID');
        $query = $this->db->get_where('user', array('Username' => $username));
        $row = $query->row();
        return $row->UserID;
    }
    function user($userID)
    {
        $query = $this->db->get_where('user', array('UserID' => $userID));
        
        return $query->result()->row();
    }
    
    function users()
    {
        $query = $this->db->get('user');
        
        return $query->result();
    }
    
    function userNameFinder($userID){
        $this->db->select('Username');
        $query = $this->db->get_where('user', array('UserID' => $userID));
        $row = $query->row();
        return $row->Username;
    }
    
    function userInfoFinder($username){
        $this->db->select('UserID, Name, Surname, Email, PhoneNumber, DateOfBirth, RegistrationDate');
        $query = $this->db->get_where('user', array('Username' => $username));
        return $query->result();
    }
    
    //if entered username and password is in database return TRUE, else return FALSE
    function userLoginControl($data){
        $username = $data[0];
        $password = $data[1];
        $this->db->select('Password');
        $query = $this->db->get_where('user', array('Username' => $username));
        if($query){
            $row = $query->row();
            if($row){
                if($row->Password == $password)
                    return TRUE;
                else
                    return FALSE;
            }
            else{
                return FALSE;
            }
        }
    }

    function register($data){
        $firstName = $data[0];
        $lastName = $data[1];
        $secretQuestion = $data[2];
        $email = $data[3];
        $phone = $data[4];
        $userName = $data[5];
        $passwordForRegister = $data[6];
        $secretAnswer = $data[7];
        $birthday = $data[8];;
        $sex = $data[9];
        $date = $data[10];


        $dataForDatabase = array(
                'UserID' => NULL,
                'Name' => $firstName,
                'Surname' => $lastName,
                'SelectedPictureID' => NULL,
                'SecretQuestion' => $secretQuestion,
                'Email' => $email,
                'PhoneNumber' => $phone,
                'UserName' => $userName,
                'Password' => $passwordForRegister,
                'EmailSubscription' => 0,
                'SecretAnswer' => $secretAnswer,
                'DateOfBirth' => $birthday,
                'IsActivated' => 0,
                'IsBanned' => 0,
                'RegistrationDate' => $date,
                'SexID' => $sex
                );
        $add = $this->db->insert('user', $dataForDatabase);

        return $add;
    }
    
    public function mostCommenterToCompany()
    {
        $queryStr = 'SELECT U.UserName
                    FROM Company C, CompanyComment CC, User U
                    WHERE C.CompanyID = CC.CompanyID
                    AND C.UserID = U.UserID
                    GROUP BY CC.CompanyID
                    ORDER BY COUNT( CC.CompanyID ) DESC';
       
       $query = $this->db->query($queryStr);
       return $query->result();
    }
    
    public function mostCommenterToJob()
    {
        $queryStr = 'SELECT U.UserName
                    FROM InternshipJob IJ, InternshipjobComment IJC, Company C, User U
                    WHERE IJ.InternshipJobID = IJC.InternshipJobID
                      AND IJ.CompanyID = C.CompanyID
                      AND IJC.UserID = U.UserID
                    GROUP BY IJC.InternshipJobID
                    ORDER BY COUNT( IJC.InternshipJobID ) DESC';
       
       $query = $this->db->query($queryStr);
       return $query->result();
    }
    
    public function userCount()
    {
        return $this->db->count_all('user');
    }
    
    public function bossCount()
    {
        return $this->db->count_all('boss');
    }
    
    public function haveCompanyRatio()
    {
        $haveCompanyStr = 'SELECT COUNT(DISTINCT U.UserID) AS Count
                            FROM User U, Company C
                            WHERE U.UserID = C.UserID';
        
        $haveCompany = $this->db->query($haveCompanyStr);
        $haveResult = $haveCompany->result();
        
        return $haveResult[0]->Count / $this->userCount();
    }
    
    public function applyCount()
    {
        return $this->db->count_all('apply');
    }
    
    public function applyRatio()
    {
        $queryStr = 'SELECT COUNT(DISTINCT UserID) AS Count
                     FROM apply';
        
        $query = $this->db->query($queryStr);
        $result = $query->result();
        
        return $result[0]->Count / $this->userCount();
    }
    
    public function mostAppliedUser()
    {
        $queryStr = 'SELECT U.UserName
                    From user U, apply A
                    Where U.UserID = A.UserID
                    GROUP BY A.UserID
                    ORDER BY COUNT(A.UserID) DESC
                    LIMIT 0, 1';
        
        $query = $this->db->query($queryStr);
        $result = $query->result();
        
        return $result[0]->UserName;
    }
}

?>