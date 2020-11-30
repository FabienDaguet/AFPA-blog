<?php include("app/views/layout/header.inc.php") ?>

    <div class="page-title wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2><i class="fa fa-leaf bg-green"></i>Categorie: <?= $posts[0]["cat_descr"]?></h2>
                </div><!-- end col -->
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
                        <li class="breadcrumb-item">Categorie</li>
                        <li class="breadcrumb-item active"><?= $posts[0]["cat_descr"] ?></li>
                    </ol>
                </div><!-- end col -->                    
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end page-title -->

    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-s m-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-list clearfix">
                            <?php foreach($posts as $post) { 
                                $tab = explode(" ", $post["post_date"]);
                                //var_dump($tab);
                                $date = explode("-", $tab[0]);
                                //var_dump($date);
                                $mois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
                            ?>
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="single.php?id=<?= $post["post_ID"]?>" title="">
                                                <img src="static/images/<?= $post["post_img_url"]; ?>" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->
                                    <div class="blog-meta big-meta col-md-8">
                                        <!--<span class="bg-aqua"><a href="" title=""><?= $post["cat_descr"];?></a></span>-->
                                        <h4><a href="single.php?id=<?= $post["post_ID"]?>" title=""><?= $post["post_title"] ?></a></h4>
                                        <p><?= $post["post_content"]; ?>... <a href="article.php?id=<?= $post["post_ID"]?>">Lire la suite</a></p>
                                        <!--<small><a href="category.php?" title=""><i class="fa fa-eye"></i> 1887</a></small>-->
                                        <small><a href="single.php?id=<?= $post["post_ID"]?>" title=""><?= $date[2] . "/" . $mois[(int)$date[1]-1] . "/" . $date[0] ?></a></small>
                                        <small><a href="#" title="">Par <?= $post["display_name"] ?></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">
                            <?php } ?>
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="banner-spot clearfix">
                                        <div class="banner-img">
                                            <img src="static/images/bande.jpg" alt="" class="img-fluid">
                                        </div><!-- end banner-img -->
                                    </div><!-- end banner -->
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <hr class="invis">

                        </div><!-- end blog-list -->
                    </div><!-- end page-wrapper -->

                    <hr class="invis">

                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->
                <?php include("app/views/layout/sidebar.inc.php") ?>
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

<?php include("app/views/layout/footer.inc.php") ?>ca