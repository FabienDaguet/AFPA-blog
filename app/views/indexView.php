<?php include("layout/header.inc.php") ?>

    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-list clearfix">
                            <?php foreach ($posts as $post) {  
                                $tab = explode(" ", $post["post_date"]);
                                //var_dump($tab);
                                $date = explode("-", $tab[0]);
                                //var_dump($date);
                            ?>
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="single.php?id=<?= $post["post_ID"]?>" title="">
                                                <img src="static/images/<?= $post["post_img_url"]; ?>" alt="tête de noeud" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->
                                
                                    <div class="blog-meta big-meta col-md-8">
                                        <span class="bg-aqua"><a href="category.php?id=<?= $post["cat_id"]?>" title=""><?= $post["cat_descr"];?></a></span>
                                        <h4><a href="single.php?id=<?= $post["post_ID"]?>" title=""><?= $post["post_title"]?></a></h4>
               
                                        <p><?= $post["post_content"]; ?>... <a href="article.php?id=<?= $post["post_ID"]?>">Lire la suite</a></p>
                                        <small><a href="category.php?id=<?= $post["cat_id"]?>" title=""><i class="fa fa-eye"></i> 1887</a></small>
                                        <small><a href="single.php" title=""><?= $date[2] . "/" . $date[1] . "/" . $date[0] ?></a></small>
                                        <small><a href="#" title="">par <?= $post["display_name"];?></a></small>
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

<?php include("layout/footer.inc.php")?>