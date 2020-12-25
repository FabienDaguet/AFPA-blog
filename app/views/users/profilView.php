<?php include("app/views/layout/header.inc.php") ?>
<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="page-wrapper">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <h1>Vos information de profil</h1>
                            <div class="form-group">
                                
                                <?php if ($_SESSION["userFO"]["user_photo"] != '') { ?>
                                    <p>Photo: </p>
                                    <img src="static/avatar/<?= $_SESSION["userFO"]["user_photo"] ?>" alt="profil pics">
                                <?php } else { ?>
                                    <span>Photo: </span>
                                    Vous n'avez pas de photo de profil
                               <?php } ?>  
                            </div>
                            <div class="form-group">
                                <span>Login: </span>
                                <span><?= $_SESSION["userFO"]["user_login"] ?></span>
                            <div class="form-group">
                                <span>Nom d'utilisateur: </span>
                                <span><?= $_SESSION["userFO"]["display_name"] ?></span>
                            </div>
                            <div class="form-group">
                                <span>Email: </span>
                                <span><?= $_SESSION["userFO"]["user_email"] ?></span>
                            </div><div class="form-group">
                                <span>Description: </span>
                                <span><?= $_SESSION["userFO"]["user_descr"] ?></span>
                            </div>
                            <div class="form-group text-center">
                                <!--<a class="small" href="password.html">Forgot Password?</a>-->
                                <input type="submit" class="btn btn-primary w-100" value="Modifier">
                            </div>
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