<?php

class JobModel extends CI_Model
{
    function __construct() 
    {
        parent::__construct();
    }
    
    public function internshipJobCount($keyword = '', $cityID = -1)
    {
        if ($keyword == '') 
        {
            return $this->db->count_all_results('InternshipJob');
        }
        else
        {
            $cityIDStr = ($cityID == -1) ? '' : 'AND C.CityID = '.$cityID;
            $queryStr = 'SELECT COUNT(*)
                        FROM InternshipJob IJ, CompanyAddress CA, State S, City C
                        WHERE IJ.JobTitle LIKE "%'.$keyword.'%"
                          AND IJ.AddressID = CA.AddressID
                          AND CA.StateID = S.StateID
                          AND S.CityID = C.CityID
                          '.$cityIDStr.';';
            
            $query = $this->db->query($queryStr);
            
            $result = $query->result();
            $resultArray = get_object_vars($result[0]);
            
            return $resultArray['COUNT(*)'];
        }
    }

    public function searchInternshipJobs($keyword, $cityID, $offset, $limit) {

        $cityIDStr = ($cityID == -1) ? '' : 'AND C.CityID = '.$cityID;
        $queryStr = 'SELECT *
                     FROM InternshipJob IJ, CompanyAddress CA, State S, City C, Company CM
                     WHERE IJ.JobTitle LIKE "%'.$keyword.'%"
                       AND IJ.CompanyID = CM.CompanyID
                       AND IJ.AddressID = CA.AddressID
                       AND CA.StateID = S.StateID
                       AND S.CityID = C.CityID
                       '.$cityIDStr.'
                       LIMIT '.$offset.', '.$limit.';';
        $query = $this->db->query($queryStr);
        return $query->result();
   }
   
   public function internshipJob($jobID)
   {
        $queryStr = 'SELECT *
                    FROM InternshipJob IJ, Company C
                    WHERE IJ.InternshipJobID = '.$jobID.'
                      AND IJ.CompanyID = C.CompanyID';

        $query = $this->db->query($queryStr);
        $result = $query->result();
        return $result[0];
   }
   
    public function deleteJob($jobID){
        $this->db->delete('internshipjob', array('InternshipJobID' => $jobID)); 
    }
    
    public function registerInternshipJob($data){
        $dataForDatabase = array(
                 'InternshipJobID' => NULL,
                 'JobTitle' => $data['jobTitle'],
                 'JobContent' => $data['jobContent'],
                 'IsConfirmed' => 0,
                 'CompanyID' => $data['companyID'],
                 'AddressID' => $data['addressID']
            
        );
        $add = $this->db->insert('internshipjob', $dataForDatabase);

        return $add;
    }
    
    public function internshipJobFinder($companyID){
        $this->db->select('JobTitle, InternshipJobID');
        $query = $this->db->get_where('internshipjob', array('CompanyID' => $companyID));
        return $query->result();
    }
    
   public function appliedBefore($userID, $jobID)
   {
       $this->db->where(array('UserID' => $userID, 'InternshipJobID' => $jobID));
       $this->db->from('apply');
       return ($this->db->count_all_results() > 0);
   }
   
   public function apply($userID, $jobID)
   {
       $data = array(
           'UserID' => $userID,
           'InternshipJobID' => $jobID
       );
       
       $this->db->insert('apply', $data);
   }
   
   public function lastAdded()
   {
       $queryStr = 'SELECT *
                    FROM InternshipJob IJ, CompanyAddress CA, State S, City C, Company CM
                    WHERE IJ.CompanyID = CM.CompanyID
                      AND IJ.AddressID = CA.AddressID
                      AND CA.StateID = S.StateID
                      AND S.CityID = C.CityID
                    ORDER BY IJ.InternshipJobID DESC
                    LIMIT 0, 20';
       
       $query = $this->db->query($queryStr);
       return $query->result();
   }
   
   public function mostCommentedCompanies()
   {
       $queryStr = 'SELECT C . * , U.UserName, COUNT( CC.CompanyID ) AS Count
                    FROM Company C, CompanyComment CC, User U
                    WHERE C.CompanyID = CC.CompanyID
                    AND C.UserID = U.UserID
                    GROUP BY CC.CompanyID
                    ORDER BY COUNT( CC.CompanyID ) DESC';
       
       $query = $this->db->query($queryStr);
       return $query->result();
   }
   
   public function mostCommentedJobs()
   {
       $queryStr = 'SELECT IJ.*, COUNT( IJC.InternshipJobID ) AS Count, C.CompanyName
                    FROM InternshipJob IJ, InternshipjobComment IJC, Company C
                    WHERE IJ.InternshipJobID = IJC.InternshipJobID
                      AND IJ.CompanyID = C.CompanyID
                    GROUP BY IJC.InternshipJobID
                    ORDER BY COUNT( IJC.InternshipJobID ) DESC';
       
       $query = $this->db->query($queryStr);
       return $query->result();
   }
   
   public function jobCount()
    {
        return $this->db->count_all('InternshipJob');
    }
}

?>
