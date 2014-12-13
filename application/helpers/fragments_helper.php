<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('getHeaderData'))
{
    function getHeaderData($outerClass)
    {
        $defaultTopMenuItems = $outerClass->menuModel->topMenuItems();
        $headerData['topMenuItems'] = privateTopMenuItems($defaultTopMenuItems);
        $headerData['loggedIn'] = $outerClass->session->userdata('loggedIn');

        if($headerData['loggedIn'])
        {
            $userType = $outerClass->session->userdata('userType');
            $headerData['topMenuItems'] = privateTopMenuItems($defaultTopMenuItems, $userType);
            
            $headerData['userName'] = $outerClass->session->userdata('username');
            $headerData['userID'] = $outerClass->session->userdata('userID');
        }
        
        $headerData['cssPath'] = "http://localhost/Internship/css/";
        $headerData['jsPath'] = "http://localhost/Internship/js/";

        return $headerData;
    }
}
    
?>
