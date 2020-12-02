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
                        Liste des utilisateurs
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Noms</th>
                                        <th>Email</th>
                                        <th>Photos</th>
                                        <th>Droits</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($users as $user) { ?>
                                        <tr>
                                            <td><?= $user["display_name"] ?></td>
                                            <td><?= $user["user_email"] ?></td>
                                            <td><?= $user["user_photo"] ?></td>
                                            <td class="text-center">
                                                <form class="m-0" method="post" action="adminUsers.php">
                                                    <input  type="hidden" name="user_ID" value="<?= $user["ID"] ?>">
                                                    <select name="user_admin">
                                                        <option value="0">Utilisateur</option>
                                                        <option value="1" <?= ($user["user_admin"] == 1)?" selected":"" ?>>Modérateur</option> <!-- 2 façons d'écrire notre if: sans le if  -->
                                                        <option value="2" <?php if($user["user_admin"] == 2) { ?> selected <?php } ?> >Super Admin</option> <!-- avec le if -->
                                                    </select>
                                                    <input type="submit" value="ok">
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Noms</th>
                                        <th>Email</th>
                                        <th>Photos</th>
                                        <th>Droits</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include("app/views/layout/footer.inc.php") ?>

        