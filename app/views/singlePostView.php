<?php include("layout/header.inc.php") ?>

    <div class="page-title wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2><i class="fa fa-leaf bg-green"></i> Blog</h2>
                </div><!-- end col -->
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="indexView.php">Acceuil</a></li>
                        <li class="breadcrumb-item active"><?= $post["post_title"] ?></li>
                    </ol>
                </div><!-- end col -->                    
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end page-title -->

    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-title-area">
                            <span class="color-green"><a href="category.php?id=<?=$post["cat_id"] ?>" title=""><?= $post["cat_descr"];?></a></span>

                            <h1><?= $post["post_title"]?></h1>

                            <div class="blog-meta big-meta">
                                <small><a href="single.php" title=""><?= $date[2] . "/" . $date[1] . "/" . $date[0] ?></a></small>
                                <small><a href="blog-author.php" title="">par <?= $post["display_name"];?></a></small>
                                <small><a href="#" title=""><i class="fa fa-eye"></i> 2344</a></small>
                            </div><!-- end meta -->

                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                    <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- end post-sharing -->
                        </div><!-- end title -->

                        <div class="single-post-media">
                            <img src="static/images/<?= $post["post_img_url"]; ?>" alt="tête de noeud" class="img-fluid">
                        </div><!-- end media -->

                        <div class="blog-content">  
                            <div class="pp">
                                <p><?= $post["post_content"] ?></p>
                            </div><!-- end pp -->
                        </div><!-- end content -->

                        <div class="blog-title-area">
                            <div class="tag-cloud-single">
                                <span>Tags</span>
                                <small><a href="#" title="">lifestyle</a></small>
                                <small><a href="#" title="">colorful</a></small>
                                <small><a href="#" title="">trending</a></small>
                                <small><a href="#" title="">another tag</a></small>
                            </div><!-- end meta -->

                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                    <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- end post-sharing -->
                        </div><!-- end title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="static/upload/banner_01.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <hr class="invis1">

                        <div class="custombox authorbox clearfix">
                            <h4 class="small-title">About author</h4>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <img src="static/avatar/<?= $post["user_photo"] ?>" alt="" class="img-fluid rounded-circle"> 
                                </div><!-- end col -->

                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <h4><a href="#"><?= $post["display_name"];?></a></h4>
                                    <p><?= $post["user_descr"] ?></p>

                                    <div class="topsocial">
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Website"><i class="fa fa-link"></i></a>
                                    </div><!-- end social -->

                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end author-box -->

                        <hr class="invis1">

                        <div class="custombox clearfix">
                            <h4 class="small-title">You may also like</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="single.php" title="">
                                                <img src="static/upload/garden_single_03.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span class=""></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a href="single.php" title="">We are guests of ABC Design Studio</a></h4>
                                            <small><a href="blog-category-01.php" title="">Trends</a></small>
                                            <small><a href="blog-category-01.php" title="">21 July, 2017</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->
                                </div><!-- end col -->

                                <div class="col-lg-6">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="single.php" title="">
                                                <img src="static/upload/garden_single_02.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span class=""></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a href="single.php" title="">Nostalgia at work with family</a></h4>
                                            <small><a href="blog-category-01.php" title="">News</a></small>
                                            <small><a href="blog-category-01.php" title="">20 July, 2017</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end custom-box -->

                        <hr class="invis1">
                        <div class="custombox clearfix">
                            <h4 class="small-title"><?= count($comments) ?> Commentaires</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="comments-list">
                                        <?php if ($comments) { 
                                            foreach($comments as $comment) { ?>
                                                <?php
                                                    $tab = explode(" ", $comment["comment_date"]);
                                                    //var_dump($tab);
                                                    $date = explode("-", $tab[0]);
                                                    //var_dump($date);
                                                ?>
                                                <div class="media">
                                                    <a class="media-left" href="#">
                                                        <img src="static/avatar/<?= $comment["user_photo"] ?>" alt="" class="rounded-circle">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading user_name"><?= $comment["display_name"]?> Le <small><?= $date[2] . "/" . $date[1] . "/" . $date[0] ?> </small></h4>
                                                        <p><?= $comment["comment_content"] ?></p>
                                                        <!--<a href="#" class="btn btn-primary btn-sm">Reply</a>-->
                                                        <?php if (isset($_SESSION["userFO"]) && (($_SESSION["userFO"]["ID"] == $comment["comment_author"]) || ($_SESSION["userFO"]["user_admin"] == 1) || ($_SESSION["userFO"]["user_admin"] == 2))) { ?>
                                                            <a href="comment_delete.php?id=<?= $comment["comment_ID"] ?>" class="suppr"><i class="far fa-trash-alt"></i></a>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            <?php } 
                                            } else { ?>
                                            <div>Soyez le premier à commenter</div>
                                        <?php } ?>
                                    </div><!-- end coments-list -->    
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end custom-box -->
                        
                                                 
                        <hr class="invis1">

                        <div class="custombox clearfix">
                            <h4 class="small-title">Laisser un commentaire</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php if(isset($_SESSION["userFO"])) { ?>
                                        <form class="form-wrapper" action="comment_insert.php" method="post">
                                            <input type="hidden" name="comment_post_ID" value="<?= $_GET["id"] ?>">
                                            <textarea class="form-control" placeholder="Votre commentaire" name="comment_content"></textarea>
                                            <button type="submit" class="btn btn-primary">Envoyer</button>
                                        </form>
                                    <?php } else { ?>
                                        <div><a href="login.php">Connectez vous</a> pour commenter</div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div><!-- end page-wrapper -->
                </div><!-- end col -->
                <?php include("app/views/layout/sidebar.inc.php") ?>
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
<?php include("layout/footer.inc.php")?>