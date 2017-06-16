<?php
include_once("app/model/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	
	public function findRepo()
	{
	
	
	if(isset($_GET['repo']))
	
		{
		
		if($_GET["repo"] !== "git-basics" && $_GET["repo"] !== "github-basics" && $_GET["repo"] !== "sliding-drawer" && $_GET["repo"] !== "basic-mvc-app")
				{
   					header('location:index.php');
				}
				else
				{ 
				//echo 'this is a match!';
				}
		
		}
	
	}
	
	
	public function invoke()
	{
		if (isset($_GET['repo']))
		{
			
			// no special book is requested, we'll show a list of all available books
			$books = $this->model->getRepoList();
			include 'app/view/repoList.php';
			
			// show the requested book
			$book = $this->model->getRepo($_GET['repo']);
			include 'app/controller/pgController.php';
			include 'app/view/viewRepo.php';
				
		}
		else
		{
			// no special book is requested, we'll show a list of all available books
			$books = $this->model->getRepoList();
			include 'app/view/repoList.php';
		}
		
		
	}


	
}

?>