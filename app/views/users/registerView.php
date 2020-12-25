<?php include("app/views/layout/header.inc.php") ?>
<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="page-wrapper">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <h1>Inscription</h1>
                            <form class="form-wrapper" method="post" action="">
                                <input type="text" name="user_login" class="form-control" placeholder="login" required>
                                <input type="password" name="user_pass" class="form-control" placeholder="mot de passe" id="user_pass" required>
                                <i class="fas fa-eye" id="eye"></i>
                                <input type="email" name="user_email" class="form-control" placeholder="Votre email" required>
                                <input type="text" name="display_name" class="form-control" placeholder="votre nom" required>
                                <textarea class="form-control" name="user_descr" cols="30" rows="6" placeholder="Votre description"></textarea>
                                <button type="submit" class="btn btn-primary">M'inscrire<i class="fa fa-envelope-open-o"></i></button>
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