<?php

include_once("app/model/Book.php");

class Model {
	public function getRepoList()
	{
		// here goes some hardcoded values to simulate the database
		return array(
			"git-basics" => new repo("git-basics", "Ryan Bowers", "description01.html"),
			"github-basics" => new repo("github-basics", "Ryan Bowers", "description02.html"),
			"sliding-drawer" => new repo("sliding-drawer", "Ryan Bowers", "description03.html"),
			"basic-mvc-app" => new repo("basic-mvc-app", "Ryan Bowers", "description04.html")
		);
	}
	
	public function getRepo($title)
	{
		
		// we use the previous function to get all the books and then we return the requested one.
		// in a real life scenario this will be done through a db select command
		$allBooks = $this->getRepoList();
		return $allBooks[$title];
		
	}
	
	
}

?>