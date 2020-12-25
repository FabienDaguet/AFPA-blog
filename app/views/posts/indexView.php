<?php include("app/views/layout/header.inc.php") ?>
    <section class="section first-section">
        <div class="container-fluid">
            <div class="masonry-blog clearfix">

                <?php foreach ($mostCommentedPosts as $key => $mostCommentedPost) { ?>
                <div class=" <?php
                    switch ($key) {
                        case 0:
                            echo "left-side";
                            break;
                        case 1: 
                            echo "center-side";
                            break;
                        case 2: 
                            echo "right-side hidden-md-down";
                            break;
                    }
                ?> ">
                    <div class="masonry-box post-media">
                        <img src="static/img/<?= $mostCommentedPost["post_img_url"] ?>" alt="<?= $mostCommentedPost["post_title"] ?>" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-aqua"><a href="?action=category&id=<?= $mostCommentedPost["cat_id"] ?>" title=""><?= $mostCommentedPost["cat_descr"] ?></a></span>
                                    <h4><a href="?action=single&id=<?= $mostCommentedPost["post_ID"] ?>" title=""><?= $mostCommentedPost["post_title"] ?></a></h4>
                                    <small><a href="garden-single.php" title=""><?= displayDate($mostCommentedPost["post_date"], 1) ?></a></small>
                                    <small><a href="#" title=""><?= $mostCommentedPost["display_name"] ?></a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div><!-- end left-side -->
                <?php } ?>

            </div><!-- end masonry -->
        </div>
    </section>

    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-list clearfix">
                            <?php foreach ($posts as $post) { ?>
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="single.php?id=<?= $post["post_ID"]?>" title="">
                                                <img src="static/img/<?= $post["post_img_url"]; ?>" alt="tête de noeud" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->
                                
                                    <div class="blog-meta big-meta col-md-8">
                                        <span class="bg-aqua"><a href="?action=category&id=<?= $post["cat_id"]?>" title=""><?= $post["cat_descr"];?></a></span>
                                        <h4><a href="?action=single&id=<?= $post["post_ID"]?>" title=""><?= $post["post_title"]?></a></h4>
               
                                        <p><?= $post["post_content"]; ?>... <a href="article.php?id=<?= $post["post_ID"]?>">Lire la suite</a></p>
                                        <small><a href="category.php?id=<?= $post["cat_id"]?>" title=""><i class="fa fa-eye"></i> 1887</a></small>
                                        <small><a href="single.php" title=""><?= displayDate($post["post_date"], 1) ?></a></small>
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

<?php include("app/views/layout/footer.inc.php")?>