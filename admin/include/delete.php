<?php
 include('../../include/connection.inc.php'); 
switch ($_GET['page']) { 

    case 'propimg':
        $id = htmlspecialchars($_POST['id']);
        $check_img = mysqli_query($con, "SELECT * FROM `property_image` where `id` = '$id'");
        $fetch_check = mysqli_fetch_array($check_img);
        $scan_image = $fetch_check['image'];
        $file_path = "../../uploads/property/";
        $image_handle = opendir($file_path);

        while ($image_file = readdir($image_handle)) {
            if ($image_file == $scan_image) {
                unlink($file_path . "/" . $image_file);
            }
            $delete = mysqli_query($con, "DELETE FROM `property_image` WHERE `id` = '$id'"); 
        }
        closedir($image_handle);
     
        if ($delete) {
            echo json_encode(array("status" => "success","msg"=>"Image successfully deleted"));
        } else {
            echo json_encode(array("status" => "danger","msg" => mysqli_error($con)));
        }
        break;
    
    case 'property':
         $id = htmlspecialchars($_POST['id']);

         
         $selectUser = mysqli_query($con, "SELECT * FROM `addproperty` where `id` = '$id'");
         $fetch_check = mysqli_fetch_array($selectUser);
         if (isset($fetch_check['agent_img'])) {
             $scan_pix = $fetch_check['agent_img'];
             $file_path = "../../uploads/agent/" . $scan_pix;
             if (file_exists($file_path)) {
                 unlink($file_path);
             }
         }


        $check_img = mysqli_query($con, "SELECT * FROM `property_image` where `property_id` = '$id'");
        $fetch_check = mysqli_fetch_array($check_img);
        $scan_image = $fetch_check['image'];
        $file_path = "../../uploads/property/";
        $image_handle = opendir($file_path);
        
        while ($image_file = readdir($image_handle)) {
            if ($image_file == $scan_image) {
                unlink($file_path . "/" . $image_file);
            }
        }
        closedir($image_handle);
        
        $delete = mysqli_query($con, "DELETE FROM `property_image` WHERE `property_id` = '$id'"); 
        $delete = mysqli_query($con, "DELETE FROM `addproperty` WHERE `id` = '$id'"); 
        if ($delete) {
            echo json_encode(array("status" => "success","msg"=>"Property successfully deleted"));
        } else {
            echo json_encode(array("status" => "danger","msg" => mysqli_error($con)));
        }
        break;
    default:
        // code...
        break;
}
