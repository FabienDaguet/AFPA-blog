<?php include("app/views/layout/header.inc.php") ?>
    <?php include("app/views/layout/sidebar.inc.php") ?>
        <main>
            <div class="container-fluid">
                <a href="index.php"></a><h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Liste des articles
                    </div>
                    <div class="card-body">
                        <div class=" mb-3">
                            <a class="bg-primary text-white p-2" href="addArticle.php">Nouvel artcile</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Catégorie</th>
                                        <th>Titre</th>
                                        <th>Auteur</th>
                                        <th>Photo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($posts as $post) { ?>
                                        <tr>
                                            <td><?= $post["cat_descr"] ?></td>
                                            <td><?= $post["post_title"] ?></td>
                                            <td><?= $post["display_name"] ?></td>
                                            <td><img class="admin_img" src="../static/images/<?= $post["post_img_url"] ?>" ></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Catégorie</th>
                                        <th>Titre</th>
                                        <th>Auteur</th>
                                        <th>Photo</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include("app/views/layout/footer.inc.php") ?>

        