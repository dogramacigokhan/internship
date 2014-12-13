<?php

class CommentModel extends CI_Model
{
    function __construct(){
        parent::__construct();
    }
    
    public function companyCommentInfo($companyID){
        $query = $this->db->query('SELECT U.Username, CC.CommentTitle, CC.CommentText, U.UserID,
                                   CC.CommentID, CC.CompanyID, CC.CommentDate
                                   FROM companycomment CC, user U
                                   WHERE CC.UserID = U.UserID AND CC.CompanyID = '.$companyID);
        return $query->result();
    }
    
    public function jobCommentInfo($jobID){
        $query = $this->db->query('SELECT U.Username, JC.CommentTitle, JC.CommentText, U.UserID,
                                   JC.CommentID, JC.InternshipJobID, JC.CommentDate
                                   FROM internshipjobcomment JC, user U
                                   WHERE JC.UserID = U.UserID AND JC.InternshipJobID = '.$jobID);
        return $query->result();
    }
    
    public function registerToCompanyComment($data){
        $dataForDatabase = array('CommentID' => NULL,
                                 'CommentTitle' => $data['commentTitle'],
                                 'Rating' => NULL,
                                 'CommentText' => $data['commentText'],
                                 'CommentDate' => $data['commentDate'],
                                 'CommentParentID' => NULL,
                                 'UserID' => $data['userID'],
                                 'CompanyID' => $data['companyID'],
                                 'IsConfirmed' => 0);
        
        $add = $this->db->insert('companycomment', $dataForDatabase);
        return $add;
    }
    
    public function registerToJobComment($data){
        $dataForDatabase = array('CommentID' => NULL,
                                 'CommentTitle' => $data['commentTitle'],
                                 'Rating' => NULL,
                                 'CommentText' => $data['commentText'],
                                 'CommentDate' => $data['commentDate'],
                                 'CommentParentID' => NULL,
                                 'InternshipJobID' => $data['jobID'],
                                 'UserID' => $data['userID'],
                                 'IsConfirmed' => 0);
        
        $add = $this->db->insert('internshipjobcomment', $dataForDatabase);
        return $add;
    }
}

?>
