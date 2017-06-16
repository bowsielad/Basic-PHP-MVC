<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $page_title; ?></title>

</head>
<body>


<div class="col-1-3">
  
<?php 

		echo '<h3>Title: <span>' . $book->title . '</span></h3>';
		echo '<h3>Author: <span>' . $book->author . '</span></h3>';
		//echo 'Description: ' . $book->description . '<br/>';
		echo '<h3>Description: </h3>';


?>

<div id="descriptionWrapper">Some info about the repo!!!!</div>
  
     
</div>

</div>


<script>


var keyInfo = '<?php echo $book->description ;?>';


if(window.Promise){
console.log('Promise found');


function makeAjaxCall(url, methodType){
   var promiseObj = new Promise(function(resolve, reject){
   		 var xhr = new XMLHttpRequest();
         xhr.open('GET', '../Basic-PHP-MVC/app/view/' + keyInfo, true);
         xhr.send();
         xhr.onreadystatechange = function(){
			 
		console.log('readyState: ' + xhr.readyState);
		
		if (xhr.readyState === 200){
              if (xhr.status === 4){
                 console.log("xhr done successfully");
			   document.getElementById("descriptionWrapper").innerHTML = 'Loading.......';
             } else {
              	reject(xhr.status);
                console.log("xhr failed");
			   document.getElementById("descriptionWrapper").innerHTML = 'Sorry more about me will be back up soon!';
              }
           } else {
              console.log("xhr processing going on");
			  document.getElementById("descriptionWrapper").innerHTML = xhr.responseText; 
           }
        }
        console.log("request sent succesfully");
		
		
   });
   
   return promiseObj;
}

} // End Promise //

else{
console.log('Promise not available');
};



window.onload = function()
    {
		
		makeAjaxCall();
	}


</script>

</body>
</html>