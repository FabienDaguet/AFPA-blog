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
                        <div class="table-responsive">
                            <form method="post" action="sendArticleUpdate.php">
                                <table>    
                                    <tr>
                                        <th><label for="titre">Titre</label></th>
                                        <td><input type="text" id="titre" name="post_title" value="<?= $post["post_title"] ?>"></td>
                                        <td><input type="hidden" name="id" value="<?= $_GET["id"] ?>"></td>

                                    </tr>
                                    <tr>
                                        <th><label for="category">Categorie</label></th>
                                        <td>
                                            <select name="post_category" id="category">
                                            <?php 
                                                foreach($categories as $category) { ?>
                                                    <option value="<?= $category["cat_id"]?>" <?= ($post["post_category"] == $category["cat_id"])?" selected":"" ?>><?= $category["cat_descr"] ?></option>
                                            <?php 
                                                } ?>
                                                
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th><label for="contenu">Contenu</label></th>
                                        <td><textarea id="contenu" name="post_content" rows="10" cols="100"><?= $post["post_content"] ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>
                                            <input type="submit" value="Enregistrer">
                                            <input type="reset" value="Effacer">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include("app/views/layout/footer.inc.php") ?>

        