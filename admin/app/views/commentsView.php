<?php include("app/views/layout/header.inc.php") ?>
    <?php include("app/views/layout/sidebar.inc.php") ?>
        <main>
            <div class="container-fluid">
                <a href="index.php"><h1 class="mt-4">Dashboard</h1></a>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Commentaires du Blog
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Auteur</th>
                                        <th>Commentaire</th>
                                        <th>Article</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($comments as $comment) { ?>
                                        <tr>
                                            <td><?= $comment["display_name"] ?></td>
                                            <td><?= $comment["comment_content"] ?></td>
                                            <td><a href="../single.php?id=<?= $comment["post_ID"] ?>" target="_blank"><?= $comment["post_title"] ?></a></td>
                                            <td><?= $comment["comment_date"] ?></td>
                                            <td><a href="comment_delete.php?id=<?= $comment["comment_ID"] ?>" class="suppr"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Auteur</th>
                                        <th>Commentaire</th>
                                        <th>Article</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include("app/views/layout/footer.inc.php") ?>

        