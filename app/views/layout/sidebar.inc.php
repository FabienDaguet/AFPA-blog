<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget">
                            <h2 class="widget-title">Recherche</h2>
                            <form class="form-inline search-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Rechercher sur le site">
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </form>
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Postes</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">

                                <?php foreach ($lastestPosts as $lastestPost) { ?>
                                    <a href="?action=single&id=<?= $lastestPost["post_ID"] ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="static/images/<?= $lastestPost["post_img_url"] ?>" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1"><?= $lastestPost["post_title"] ?></h5>
                                            <small><?= displayDate($lastestPost["post_date"], 1) ?></small>
                                        </div>
                                    </a>
                                <?php } ?>
                        
                                </div><!-- end list-group -->
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Advertising</h2>
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <img src="static/upload/banner_04.jpg" alt="" class="img-fluid">
                                </div><!-- end banner-img -->
                            </div><!-- end banner -->
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Instagram Feed</h2>
                            <div class="instagram-wrapper clearfix">
                                <a href="#"><img src="static/upload/garden_sq_01.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="static/upload/garden_sq_02.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="static/upload/garden_sq_03.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="static/upload/garden_sq_04.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="static/upload/garden_sq_05.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="static/upload/garden_sq_06.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="static/upload/garden_sq_07.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="static/upload/garden_sq_08.jpg" alt="" class="img-fluid"></a>
                                <a href="#"><img src="static/upload/garden_sq_09.jpg" alt="" class="img-fluid"></a>
                            </div><!-- end Instagram wrapper -->
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Categories</h2>
                            <div class="link-widget">
                                <ul>
                                    <?php foreach($categories as $category) { ?>
                                        <li><a href="?action=category&id==<?= $category["cat_id"] ?>"><?= $category["cat_descr"] ?> <span>(<?= count(postByClass($category["cat_id"]))?>)</span></a></li>
                                    <?php } ?>

                                </ul>
                            </div><!-- end link-widget -->
                        </div><!-- end widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col -->