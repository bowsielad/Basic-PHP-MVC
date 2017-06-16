<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../Basic-PHP-MVC/public/css/repoMain.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700,900" rel="stylesheet">

<title>repoList</title>

<style></style>

</head>
<body>

<div class="grid">
  <div class="col-2-3">
  
  <div id="logoDiv"><img src="../Basic-PHP-MVC/public/images/github.svg" id="logo" alt="MyLogo-Pic"/></div>
  
  <h1>github repos.</h1>
  

<?php 

		foreach ($books as $title => $book)
		{
			echo '<a href="index.php?repo='.$book->title.'">'.$book->title.'</a>';
		}

?>
 
    
</br> 
</br> 
  
<h4>ryan bowers</h4>
<h4>bowers81@hotmail.com</h4>
<h4>www.bowsiedesign.com</h4>

<h3 onClick="goTogithub();"><a href="#">github profile link</a></h3>
    
</div>


<script type="text/javascript">
	
function goTogithub() {
	
window.location="https://github.com/bowsielad";
     
};

</script>

</body>
</html>