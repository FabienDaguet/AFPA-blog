<?php include("app/views/layout/header.inc.php") ?>
<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="page-wrapper">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <form class="form-wrapper" method="post" action="loginProcess.php">
                                <input type="hidden" name="referer" value="<?= $_SERVER["HTTP_REFERER"] ?>">
                                <input type="text" name="user_login" class="form-control" placeholder="login" required>
                                <input type="password" name="user_pass" class="form-control" placeholder="mot de passe" required>
                                <button type="submit" class="btn btn-primary">Me connecter<i class="fa fa-envelope-open-o"></i></button>
                            </form>
                        </div>
                    </div>
                </div><!-- end page-wrapper -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<?php include("app/views/layout/footer.inc.php") ?>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAkADq7R0xf6ami9YirAM1N-yl7hdnYBhM "></script>
<!-- MAP & CONTACT -->
<script src="static/js/garden-map.js"></script>