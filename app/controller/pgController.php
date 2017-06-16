<?php 

function getValue($key) {
    if (!isset($_GET[$key])) {
        return false;
		echo 'this is not set </br>';
    }
    return $_GET[$key];
};	

	
$repoName = getValue('repo');

switch ($repoName){
    case 'git-basics':
        $page_title = 'git-basics';
		
		break;
		
	case 'github-basics':
        $page_title = 'github-basics';
		
		break;
		
	case 'sliding-drawer':
        $page_title = 'sliding-drawer';
		
		break;
		
	case 'basic-mvc-app':
        $page_title = 'basic-mvc-app';
		
		break;
		
		
	default:
		$page_title = 'index';
		
		echo 'did not find that repo. please try again!';
		
		//header('Location: ../index.php');
		
		break;
}


?>