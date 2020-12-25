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
                        Nouvel Article
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="post" action="sendArticle.php?token=<?= $_SESSION["userBO"]["token"] ?>" enctype="multipart/form-data">
                                <table>
                                <tr>
                                    <td><input name="author" type="hidden" value="<?= $_SESSION["userBO"]["ID"] ?>"></td>
                                </tr>
                                <tr>
                                    <td><label for="title">Titre</label></td>
                                    <td><input type="text" id="title" name="title"></td>
                                </tr>
                                <tr>
                                    <td><label for="category">Catégorie</label></td>
                                    <td><select name="category" id="category">
                                        <?php foreach($categories as $category) { ?>
                                            <option value="<?= $category["cat_id"] ?> "><?= $category["cat_descr"] ?></option>
                                        <?php } ?></td>
                                    </select> 
                                </tr>
                                <tr>
                                    <td><label for="content">Artcile</label></td>
                                    <td><textarea name="content" id="content" cols="100" rows="15"></textarea></td>
                                </tr>
                                <tr>
                                    <td>Image</td>
                                    <td><input class="form-control-file" type="file" id="post_img_url" name="post_img_url" placeholder="Choisissez un fichié"></td>
                                </tr>
                                </table>
                                <input type="submit" value="Publier">    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include("app/views/layout/footer.inc.php") ?>

        