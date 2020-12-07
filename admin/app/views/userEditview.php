<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link href="static/css/styles.css" rel="stylesheet" />
        <link href="static/css/styles2.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Mise à jour de vos informations</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="userUpdate.php">
                                            <input type="hidden" name="id" value="<?= $user["ID"] ?>">
                                        <div class="form-group">
                                                <label class="small mb-1" for="user_name" >Login</label>
                                                <input class="form-control py-4" name="user_login" id="user_login" type="text" placeholder="" value="<?= $user["user_login"] ?>" required/>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="user_name" >Nom d'utilisateur</label>
                                                <input class="form-control py-4" name="display_name" id="user_name" type="text"  value="<?= $user["display_name"] ?>"required/>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="user_pass">Mot de passe</label>
                                                <input class="form-control py-4" id="user_pass" name="user_pass" type="password" value="<?= $user["user_pass"] ?>"required/>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="user_pass-confirm">Email</label>
                                                <input class="form-control py-4" id="user_email" name="user_email" type="email" value="<?= $user["user_email"] ?>" required/>
                                            </div><div class="form-group">
                                                <label class="small mb-1" for="user_descr">Description</label>
                                                <textarea class="form-control resize" id="user_descr" name="user_descr" cols="72" rows="15" ><?= $user["user_descr"] ?></textarea>
                                            </div>
                                            <div class="form-group text-center">
                                                <!--<a class="small" href="password.html">Forgot Password?</a>-->
                                                <input type="submit" class="btn btn-primary w-100" value="Envoyer">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <!--
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
                -->
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="static/js/scripts.js"></script>
    </body>
</html>
