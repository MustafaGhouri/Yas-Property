<?php include('connection.inc.php');

$val = trim(mysqli_real_escape_string($con, $_POST['val']), " ");
$property_type = mysqli_real_escape_string($con, $_POST['property_type']);
$rooms = mysqli_real_escape_string($con, $_POST['rooms']);
$price = mysqli_real_escape_string($con, $_POST['price']);
$yasproptype = mysqli_real_escape_string($con, $_POST['poptypebuyrent']);
if ($property_type != 'any') {
    $clause = "`propery_type` = '" . $property_type . "'  AND ";
} else {
    $clause = '';
}
if ($rooms != 'any') {
    $clause1 = "`rooms` = '" . $rooms . "'  AND ";
} else {
    $clause1 = '';
}
if ($price != 'any') {
    $clause1 = "`property_price` = '" . $price . "'  AND ";
} else {
    $clause1 = '';
}
if ($val == '' || empty($val)) {
    exit();
}
$qry = "SELECT * FROM `addproperty` WHERE $clause1 $clause `location` LIKE '%$val%' AND `buy_rent` = '$yasproptype' ";
// echo $qry;
// exit();
$insert = mysqli_query($con, $qry);
if (mysqli_num_rows($insert) > 0) {

    while ($row = mysqli_fetch_array($insert)) {
        $propUrl = $row['location'];
        $id = $row['id'];
        echo '<a class="dropdown-item filterItem" data-value="' . $propUrl . '"  data-id="' . $id . '">' . $row["location"] . '</a> ';
    }
}
