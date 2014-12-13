<?php


class Insert extends CI_Model
{
   public function insertInternshipJob()
   {
       
       for ($i = 0; $i < 200; $i++)
       {
           $data = array(
               'InternshipJobID' => 'NULL',
               'JobTitle' => $this->rand_string(rand(10, 30)),
               'JobContent' => $this->rand_string(rand(100, 300)),
               'IsConfirmed' => 1,
               'CompanyID' => rand(1, 3),
               'AddressID' => rand(1, 2)
           );
           $this->db->insert('InternshipJob', $data); 
       }
            
   }
   
   public function insertState()
   {
        //StateID 	StateName 	CityID 
       for ($i = 0; $i < 200; $i++)
       {
           $data = array(
               'StateID' => 'NULL',
               'StateName' => $this->rand_string(rand(10, 30)),
               'CityID' => rand(1, 81)
           );
           $this->db->insert('State', $data); 
       }
   }
   
   public function insertCompanyComment()
   {
        // CommentID CommentTitle Rating CommentText CommentDate CommentParentID UserID CompanyID IsConfirmed  
       for ($i = 0; $i < 2000; $i++)
       {
           $data = array(
               'CommentID' => 'NULL',
               'CommentTitle' => $this->rand_string(rand(10, 15)),
               'Rating' => 'NULL',
               'CommentText' => $this->rand_string(rand(10, 15)).' '.$this->rand_string(rand(10, 15)),
               'CommentDate' => '2012-12-'.rand(1, 30).' 01:02:21',
               'CommentParentID' => 'NULL',
               'UserID' => rand(1, 180),
               'CompanyID' => rand(1, 400),
               'IsConfirmed' => 1
           );
           $this->db->insert('CompanyComment', $data); 
       }
   }
   
   public function insertUser()
   {
       
       //UserID Name Surname 	SelectedPictureID 	SecretQuestion 	Email 	PhoneNumber 	Username 	Password 	EmailSubscription 	SecretAnswer 	DateOfBirth 	IsActivated 	IsBanned 	RegistrationDate 	SexID 
   
       for ($i = 0; $i < 200; $i++)
       {
           $data = array(
               'UserID' => 'NULL',
               'Name' => $this->rand_string(rand(5, 15)),
               'Surname' => $this->rand_string(rand(5, 15)),
               'SelectedPictureID' => NULL,
               'SecretQuestion' => $this->rand_string(rand(5, 15)),
               'Email' => $this->rand_string(rand(5, 15)),
               'PhoneNumber' => 1111111,
               'Username' => $this->rand_string(rand(5, 15)),
               'Password' => $this->rand_string(rand(5, 15)),
               'EmailSubscription' => rand(0, 1),
               'SecretAnswer' => $this->rand_string(rand(10, 30)),
               'DateOfBirth' => '199'.rand(0, 9).'-'.rand(1, 12).'-'.rand(1, 30),
               'IsActivated' => 1,
               'IsBanned' => 0,
               'RegistrationDate' => '2012'.'-'.rand(1, 12).'-'.rand(1, 30),
               'SexID' => rand(1, 2)
           );
           $this->db->insert('User', $data); 
       }
   }
   
   public function insertBoss()
   {
       for ($i = 100; $i < 200; $i++)
       {
           $data = array(
               'UserID' => $i
           );
           $this->db->insert('Boss', $data); 
       }
   }
   
   public function insertCompany()
   {
        //CompanyID 	CompanyName 	IsConfirmed 	SelectedPictureID 	UserID 
       for ($i = 1; $i < 200; $i++)
       {
           $data = array(
               'CompanyID' => 'NULL',
               'CompanyName' => $this->rand_string(rand(10, 30)),
               'IsConfirmed' => 1,
               'SelectedPictureID' => 'NULL',
               'UserID' => rand(100, 180)
               
           );
           $this->db->insert('Company', $data); 
       }
   }
   
   public function insertCompanyAddress()
   {
        // Address 	StateID 	AddressID 	CompanyID 
       for ($i = 0; $i < 200; $i++)
       {
           $data = array(
               'AddressID' => 'NULL',
               'Address' => $this->rand_string(rand(100, 200)),
               'StateID' => rand(1, 150),
               'CompanyID' => rand(1, 150)
           );
           $this->db->insert('CompanyAddress', $data); 
       }
   }
   
   function rand_string( $length ) {
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";	

	$size = strlen( $chars );
        $str = '';
	for( $i = 0; $i < $length; $i++ ) {
		$str .= $chars[ rand( 0, $size - 1 ) ];
	}

	return $str;
    }
}
?>
