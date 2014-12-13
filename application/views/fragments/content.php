<?php


if (isset($contentType))
{
    // Specify the content type and load the content
    switch ($contentType) {
        case 'default':
            require_once 'contents/default_content.php';
            break;
        case 'search':
            require_once 'contents/search_content.php';
            break;
        case 'internshipJob':
            require_once 'contents/internship_job_content.php';
            break;
        case 'apply':
            require_once 'contents/internship_apply_content.php';
            break;
        case 'company_content':
            require_once 'contents/company_content.php';
            break;
        case 'userInfo':
            require_once 'contents/user_info_content.php';
            break;
        case 'adminContent':
            require_once 'contents/admin_content.php';
            break;
        default:
            break;
    }
}

?>
