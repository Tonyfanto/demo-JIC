<?php 
//receive file and save
print_r($_FILES);
try{
move_uploaded_file($_FILES['demoimage']['tmp_name'], __DIR__.'/'.$_FILES['demoimage']['name']);
}
catch (Exception $e){
	echo  $e->getTraceAsString();
}
?>