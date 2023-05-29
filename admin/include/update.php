<?php
 include('../../include/connection.inc.php'); 


extract($_POST);
ob_start();

function imagecheck($imagetype)
{
    if ($imagetype == "JPG" || $imagetype == "jpg" || $imagetype == "PNG" || $imagetype == "png" || $imagetype == "jpeg" || $imagetype == "JPEG" || $imagetype == "" ||  $imagetype == "WEBP" || $imagetype == "webp" || $imagetype == "") {
        return true;
    } else {
        return false;
    }
}
switch ($_GET['page']) {
    case 'property':
        $id = $_POST['id'];
        $propertyname = $_POST['propertyname'];
        $propertyprice = $_POST['propertyprice'];
        $description = base64_encode($_POST['description']);
        $agentname = $_POST['agentname'];
        $properyType = $_POST['properyType'];
        $rooms = $_POST['rooms'];
        $buy_rent = $_POST['buy_rent'];
        $agent_phone = str_replace(['-', '(', ')',' '], '', $_POST['agent_phone']);

        $agent_email = $_POST['agent_email']; 

        $selectOldImage = mysqli_query($con, "SELECT * FROM addproperty where id = $id");
        $fetchOldImage = mysqli_fetch_array($selectOldImage);

        

        if ($_FILES['agentimage']['size'] != 0) {
            $OldImageName = $fetchOldImage['agent_img'];
            $propertyfolder = "../../uploads/agent/" . $OldImageName;

            if (file_exists($propertyfolder)) {
                unlink($propertyfolder);
            }

            $agentimage = time() . '' . str_replace(' ', '', $_FILES['agentimage']['name']);
            $temp = $_FILES['agentimage']['tmp_name'];
            $agentfolder = "../../uploads/agent/" . $agentimage;
            move_uploaded_file($temp, $agentfolder);

            $QUERY = mysqli_query($con, "UPDATE `addproperty` SET  `agent_img`='$agentimage'  WHERE id = '$id'");
        }



        $QUERY = mysqli_query($con, "UPDATE `addproperty` SET  `agent_phone`= '$agent_phone', `agent_email` = '$agent_email' , `name`='$propertyname',`property_price`='$propertyprice',`propery_type`='$properyType',`rooms`='$rooms',`descripton`='$description', `agent_name`='$agentname',`buy_rent`='$buy_rent' WHERE id = '$id'");
        // Add Property Images
        if ($QUERY) {
          
            if ($_FILES['gallery']['size'][0] != 0) {

                $last_insert_id = $id;
                foreach ($_FILES['gallery']['tmp_name'] as $key => $val) {
                    $gallery = time() . '' . str_replace(" ", "", basename($_FILES["gallery"]["name"][$key]));
                    $gallery_type = str_replace("", "", basename($_FILES["gallery"]["type"][$key]));
                    $path_gallery = "../../uploads/property/" . $gallery;

                    move_uploaded_file($_FILES["gallery"]["tmp_name"][$key], $path_gallery);

                    $query = mysqli_query($con, "INSERT INTO `property_image` (`image`,`property_id`) VALUE ('$gallery','$last_insert_id')");
                }
            }
        }
        if ($QUERY) {

            echo json_encode(['status' => 'success', 'msg' => "Record Updated successfully"]);
        } else {

            echo json_encode(['status' => 'danger', 'msg' => mysqli_error($con)]);
        }
        break;
    default:
        // code...
        break;
}
