<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require 'layout/head.php'; ?>
</head>

<body>
<?php require 'layout/navbar-mobile.php'; ?>
<div class="container-fluid">
    <?php require 'layout/sidebar.php'; ?>

    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 nopadding">
        <nav class="bg-faded hidden-xs-down">
            <span class="navbar-brand">Manage Categories</span>
            <a href="/admin/logout" class="btn btn-outline-success float-right">LOGOUT</a>
        </nav>
        <div class="wrap">
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead class="thead-default">
                        <tr>
                            <th>Category ID</th>
                            <th>Name</th>
                            <th>Color</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(empty($categories)){
                            echo "There are no registered categories";
                        }else {
                            foreach ($categories as $category):
                                ?>
                                <tr>
                                    <th><?= $category->id ?></th>
                                    <td><?= $category->category_name ?></td>
                                    <td> <div style="width: 15px; height: 15px; background: <?= $category->color ?>"></div></td>
                                    <td>
                                        <a href="/admin/category/manage/<?= $category->id ?>/edit/" class="btn btn-secondary">Edit</a>
                                        <a href="/admin/category/manage/<?= $category->id ?>/delete/" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php
                            endforeach;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
</div>

<?php require 'layout/footer.php'; ?>
</body>
</html>