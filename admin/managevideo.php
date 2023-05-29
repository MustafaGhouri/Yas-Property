<?php
include('top.php');

if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = get_safe_value($con, $_GET['type']);
    if ($type == 'delete') {
        $id = get_safe_value($con, $_GET['id']);
        $delete_sql = "DELETE FROM `playlist` WHERE id='$id'";
        mysqli_query($con, $delete_sql);
    }
}

$sql = "SELECT * FROM `playlist` order by id desc";
$res = mysqli_query($con, $sql);
?>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                    <a href="uploadvideo.php" class="btn btn-primary">Add Property Video</a>
                        <h2 class="text-center ">Manage Videos</h2>
                    
                            <table class="table" id="example">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Thumbnail Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($res)) {
                                    ?>
                                        <tr>
                                            <td class="serial"><?php echo $i ?></td>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['title'] ?></td>
                                            <td>
                                                <img src="<?php echo $row['yt_img']?>" style="height: 60px; width: 80px;">
                                            </td>
                                            <td>
                                                <?php
                                                echo "
                                              <a class='btn btn-danger delList text-white' href='?type=delete&id=" . $row['id'] . "'><i class='fa-solid fa fa-trash'></i></a>";
                                                ?> </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
        </div>
    </div>
</div>
<?php

function get_safe_value($con, $str)
{
    if ($str != '') {
        $str = trim($str);
        return mysqli_real_escape_string($con, $str);
    }
}
?>


<?php include('footer.php'); ?>



<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>


<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>