<?php include('../include/connection.inc.php');
if (isset($_SESSION['user_id'])) {
    $id = $_SESSION['user_id'];
} else {
    echo "<script>window.open('../login','_self');</script>";
    exit();
}

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Admin Panel</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?= $url ?>admin/assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <link href="<?= $url ?>admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= $url ?>admin/assets/css/demo.css" rel="stylesheet" />

    <link href="<?= $url ?>assets/css/pe-icon-7-stroke.css" rel="stylesheet">
</head>
<style>
    .tox-notifications-container {
        display: none !important;
    }

    span.tox-statusbar__branding {
        display: none !important;
    }
</style>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <img src="<?= $url ?>admin/assets/img/yas-properties-logo.png" class="main-logo" alt="">
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="<?= $url . 'admin' ?>">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="add-property">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Add Property</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="manage-property">
                            <i class="nc-icon nc-notes"></i>
                            <p> Manage Property</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="uploadvideo">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Upload Video</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="managevideo">
                            <i class="nc-icon nc-notes"></i>
                            <p> Manage Video</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= $url ?>include/logout">
                            <i class="fa-solid fa fa-arrow-up-left-from-circle"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?= $url . 'admin' ?>"> Dashboard </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">

                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= $url ?>include/logout">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->