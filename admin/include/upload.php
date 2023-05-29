<?php 
 
include '../../include/connection.php';
extract($_POST);
ob_start();
  

 
      if (!empty($_FILES)) 
      {
             $tempFile = $_FILES['file']['tmp_name'];
 

             $file_name = date('dmYHis') . str_replace(" ", "", basename($_FILES["file"]["name"]));
			
        
            $path_picture = $url."uploads/tinyUpload/".$file_name;
 
       			echo $path_picture;
        
             if(move_uploaded_file($_FILES["file"]["tmp_name"])){
                echo json_encode(array('location' => $path_picture));
                   //die($path_picture );
               exit();
              }else{
                   die('Fail');
              }

       }
