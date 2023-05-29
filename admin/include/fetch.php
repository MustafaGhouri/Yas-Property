<?php
include('../../include/connection.inc.php');


extract($_POST);
ob_start();

switch ($_GET['page']) {
    case 'login':
        $email = htmlspecialchars(mysqli_real_escape_string($con,$_POST['email']));
        $password = htmlspecialchars(mysqli_real_escape_string($con,$_POST['password']));
        $password = md5($password);

        $select = mysqli_query($con,"SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");

        if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_array($select);
            if($fetch['status'] == 1){
                $_SESSION['user_id'] = $fetch['id'];
                $_SESSION['id'] = $fetch['role'];
                echo json_encode(['status'=>'success','msg'=>'Successfully logged-in']);
                exit();
            }else{
                echo json_encode(['status'=>'warning','msg'=>'Please activate your account']);
                exit();
            }
        }else{
            echo json_encode(['status'=>'warning','msg'=>'Credentials not found in our records']);
            exit();
        }



        break;
    case 'propimg':
        $id = mysqli_real_escape_string($con, $_POST['id']);
        $select_images = mysqli_query($con, "SELECT * FROM `property_image` WHERE property_id = $id");
        while ($fetchImage = mysqli_fetch_array($select_images)) { ?>
            <div class="img-item">
                <span class="delete-img" id="<?= $fetchImage['id'] ?>"> &times;</span>
                <img class="updateimg" src="<?= $url . 'uploads/property/' . $fetchImage['image'] ?>" id="prop-<?= $fetchImage['id'] ?>" alt="">
            </div>
<?php }
        break;
}
