<?php
include('../../include/connection.inc.php');

extract($_POST);
ob_start();

function imagecheck($imagetype)
{
    if ($imagetype == "JPG" || $imagetype == "jpg" || $imagetype == "PNG" || $imagetype == "png" || $imagetype == "jpeg" || $imagetype == "JPEG" || $imagetype == "") {
        return true;
    } else {
        return false;
    }
}


function sanitize($data)
{
    global $con;
    $var1 = mysqli_real_escape_string($con, $data);
    $var2 = htmlentities($var1);
    $var3 = htmlspecialchars($var2);
    $var4 = addslashes($var3);

    return strip_tags($var4);
}


function generateRandomString($length)
{
    return substr(str_shuffle(str_repeat($x = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
}

switch ($_GET['page']) {
    case 'imageUploader':
        if (!empty($_FILES)) {
            $tempFile = $_FILES['file']['tmp_name'];


            $file_name = date('dmYHis') . str_replace(" ", "", basename($_FILES["file"]["name"]));


            $path_picture = "../../uploads/tinyUpload/" . $file_name;

            if (move_uploaded_file($_FILES["file"]["tmp_name"], $path_picture)) {
                //echo json_encode(array('location' => $path_picture));
                die($url.'uploads/tinyUpload/'.$file_name);
                //exit();
            } else {
                die('Fail');
            }
        }
        break;
    case 'property':
        $propertyname = $_POST['propertyname'];
        $propertyprice = $_POST['propertyprice'];
        $description = base64_encode($_POST['description']);
        $agentname = $_POST['agentname'];
        $properyType = $_POST['properyType'];
        $rooms = $_POST['rooms'];
        $buy_rent = $_POST['buy_rent'];
        $bed = $_POST['beds'];
        $bathroom = $_POST['bathroom'];
        $sqft = $_POST['sq_ft'];
        $location = $_POST['location'];
        $agent_phone = str_replace(['-', '(', ')', ' '], '', $_POST['agent_phone']);

        $agent_email = $_POST['agent_email'];

        // Agent Image
        $agentimage = $_FILES['agentimage']['name'];
        $temp = $_FILES['agentimage']['tmp_name'];
        $agentfolder = "../../uploads/agent/" . $agentimage;
        move_uploaded_file($temp, $agentfolder);


        // Sql Query
        $sql = "INSERT INTO `addproperty`(`name`, `property_price`,`descripton`, `agent_img`, `agent_name`,`agent_phone`,`agent_email`,`propery_type`,`rooms`,`buy_rent`,`beds`,`bathroom`,`sq_ft`,`location`) VALUES('$propertyname','$propertyprice','$description','$agentimage','$agentname','$agent_phone','$agent_email','$properyType','$rooms','$buy_rent','$bed','$bathroom','$sqft','$location')";

        // Add Property Images
        if (mysqli_query($con, $sql)) {
            $select = mysqli_query($con, "SELECT * FROM `addproperty` ORDER BY `id` DESC LIMIT 1");
            $fetch = mysqli_fetch_array($select);
            $last_insert_id = $fetch['id'];
            foreach ($_FILES['gallery']['tmp_name'] as $key => $val) {
                $gallery = time() . '' . str_replace(" ", "", basename($_FILES["gallery"]["name"][$key]));
                $gallery_type = str_replace("", "", basename($_FILES["gallery"]["type"][$key]));
                $path_gallery = "../../uploads/property/" . $gallery;

                move_uploaded_file($_FILES["gallery"]["tmp_name"][$key], $path_gallery);

                $query = mysqli_query($con, "INSERT INTO `property_image` (`image`,`property_id`) VALUE ('$gallery','$last_insert_id')");
            }
        }


        if ($query) {
            echo json_encode(['status' => 'success', 'msg' => 'New Record added successfully']);
        } else {
            echo json_encode(['status' => 'danger', 'msg' => mysqli_error($con)]);
        }
        break;



    default:
        // code...
        break;
}
