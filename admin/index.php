<?php
include('top.php');
$seelct = mysqli_query($con, "SELECT count(id) as countProperty FROM `addproperty`");
$fetchProperty = mysqli_fetch_array($seelct);

$selectVideo = mysqli_query($con, "SELECT count(id) as countplaylist FROM `playlist`");
$fetchPlaylist = mysqli_fetch_array($selectVideo);

?>
<style>
    .dashboard-welcom-heading {
        text-align: center;
        padding: 20px;
        margin-top: 10px;
        background-color: #010756;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 20px #9499d7;
    }

    .dashboard-button-grp a {
        padding: 10px 20px;
        background: #010756;
        color: #fff;
        text-transform: uppercase;
        border-radius: 4px;
        text-decoration: none !important;
    }

    .dashboard-button-grp {
        background: #fff;
        padding: 30px 20px;
        border-radius: 5px;
        margin: 20px 0;
        box-shadow: 0px 0px 20px #cbbfbfc9;
    }

    .dashboard-customecard {
        background-image: linear-gradient(45deg, #f5d98a, #ecc63b);
        margin-top: 20px;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 20px #ebd483;
        color: #010756;
    }

    .card-inner {
        display: flex;
        align-items: baseline;
        gap: 20px;
        margin-top: 20px;
        justify-content: space-between;
    }

    .card-inner i {
        font-size: 4rem;
        width: fit-content;
        color: #010756;
    }

    .card-inner span {
        font-size: 4rem;
        line-height: 0;
        font-family: Montserrat;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="dashboard-welcom-heading">Hello Welcome to Dashboard!</h2>
        </div>
        <div class="col-md-12">
            <div class="dashboard-button-grp">
                <a href="add-property">Add Property</a>
                <a href="uploadvideo">Add Video</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class=" dashboard-customecard">
                <h4>Total Properties</h4>
                <div class="card-inner">
                    <i class="fa-light fa fa-building"></i>
                    <span><?= $fetchProperty['countProperty'] ?></span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class=" dashboard-customecard">
                <h4>Total Videos</h4>
                <div class="card-inner">
                    <i class="fa-brands fa-youtube"></i>
                    <span><?= $fetchPlaylist['countplaylist'] ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>