<?php

class MenuModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }
      
    function topMenuItems(){
        $this->db->select('itemHref, itemTitle, itemContent');
        $query = $this->db->get('topmenuitems');
        
        return $query->result();
    }
    
}
?>
