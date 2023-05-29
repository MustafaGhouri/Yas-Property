<?php include('top.php');

function get_safe_value($con, $str)
{
    if ($str != '') {
        $str = trim($str);
        return mysqli_real_escape_string($con, $str);
    }
}

if (isset($_GET['type'])) {
    $type = get_safe_value($con, $_GET['type']);
    if ($type == 'delete') {
        $id = get_safe_value($con, $_GET['id']);

        mysqli_query($con, "DELETE FROM `addproperty` WHERE `id` = $id");
    }
}

$sql = "SELECT property_image.image as prop_image ,addproperty.* FROM `property_image` JOIN addproperty ON property_image.property_id = addproperty.id GROUP BY property_id ORDER BY `addproperty`.id DESC";
$res = mysqli_query($con, $sql);
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card p-3">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h2 class="text-center ">Manage Propety Cards</h2>
                        </div>
                        <div class="col-md-6 justify-content-end align-items-center d-flex">
                            <a href="add-property" class="btn btn-primary">Add Property Cards</a>
                        </div>
                    </div>
                    <div class="w-100">

                        <table class="table d-block table-striped table-responsive responsive w-100" id="example">
                            <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Property Image</th>
                                    <th>Agent Image</th>
                                    <th>Agent Name</th>
                                    <th>Beds</th>
                                    <th>Rooms</th>
                                    <th>Square ft</th>
                                    <th>Location</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                    <tr>
                                        <td class="serial"><?= $i ?></td>
                                        <td><?= $row['id'] ?></td>
                                        <td><?= $row['name'] ?></td>
                                        <td><?= $row['property_price'] ?></td>
                                        <td>
                                            <img src="<?= $url . 'uploads/property/' . $row['prop_image'] ?>" style="height: 60px; width: 70px;border-radius:10px;">
                                        </td>

                                        <td>
                                            <img src="<?php echo $url . 'uploads/agent/' . $row['agent_img'] ?>" style="height: 50px; width: 50px;border-radius:50px;">
                                        </td>
                                        <td><?= $row['agent_name'] ?></td>
                                        <td><?= $row['beds'] ?></td>
                                        <td><?= $row['bathroom'] ?></td>
                                        <td><?= $row['sq_ft'] ?></td>
                                        <td><?= $row['location'] ?></td>
                                        <td>
                                            <div class="d-flex">
                                                <a class='btn  btn-success text-white' href='add-property?edit=<?= $row['id'] ?>'><i class="fa-solid fa fa-pen-to-square"></i></a>

                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#deletemodal" class='btn btn-danger delList text-white' data-page="property" id='<?= $row['id'] ?>'><i class="fa-solid fa fa-trash"></i></a>

                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php


    ?>


    <?php include('footer.php'); ?>