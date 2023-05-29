<?php include('connection.inc.php');

$id = mysqli_real_escape_string($con, $_POST['id']);
$select = mysqli_query($con, "SELECT * FROM `playlist` WHERE `id` = '$id'");
$fetch = mysqli_fetch_array($select);
if ($fetch) {
    $embed = $fetch['embed'];
    echo $embed;
} else {
    echo "<h2>Your browser not supported</h2>";
}
