<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('getTopMenuItems'))
{
    function privateTopMenuItems($items, $userType = '')
    {
        $defaultItems = array();
        
        foreach ($items as $item) {
            $link = new LinkObject();
            $link->href = $item->itemHref;
            $link->title = ($item->itemTitle == null) ? '' : $item->itemTitle;
            $link->content = $item->itemContent;
            
            array_push($defaultItems, $link);
        }
        
        $userType = str_replace(' ', '', $userType);
        $userTypes = explode(',', $userType);
        
        if (in_array('Admin', $userTypes))
        {
            $link = new LinkObject();
            $link->href = 'http://localhost/Internship/index.php/admin/index';
            $link->title = 'Admin Sayfası';
            $link->content = 'Admin Sayfası';
            array_push($defaultItems, $link);
        }
        
        if (in_array('Boss', $userTypes))
        {
            $link = new LinkObject();
            $link->href = 'http://localhost/Internship/index.php/bossController/showBossPage';
            $link->title = 'İşveren Sayfası';
            $link->content = 'İşveren Sayfası';
            array_push($defaultItems, $link);
        }
        
        return $defaultItems;
    }   
}

?>
