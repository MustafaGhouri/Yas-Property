<?php
include('header.php')
?>


<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center text-dark mt-5">Welcome Back!</h2>
            <div class="text-center mb-5 text-dark">Login to <b>YAS Properties</b></div>
            <div class="card my-5">

                <form class="card-body cardbody-color p-lg-5" id="login">

                    <div class="text-center">
                        <img src="<?= $url ?>images/yas-properties-logo.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
                    </div>
                    <div id="alert"></div>
                    <div class="mb-3">
                        <label class="label-control" for='email'>Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email address">
                    </div>
                    <div class="mb-3">
                        <label class="label-control" for='password'>Password</label>
                        <input type="password" name='password' class="form-control" id="password" placeholder="password">
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>

                </form>
            </div>

        </div>
    </div>
</div>
<?php
include('footer.php')
?>

<script src="<?= $url ?>js/customize.js"></script>