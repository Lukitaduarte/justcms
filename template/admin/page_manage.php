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
            <span class="navbar-brand">Manage Pages</span>
            <a href="/admin/logout" class="btn btn-outline-success float-right">LOGOUT</a>
        </nav>
        <div class="wrap">
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead class="thead-default">
                        <tr>
                            <th>Page ID</th>
                            <th>Title</th>
                            <th>Friendly URL</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(empty($pages)){
                            echo "There are no registered pages";
                        }else {
                            foreach ($pages as $page):
                                ?>
                                <tr>
                                    <th><?= $page->id ?></th>
                                    <td><?= $page->title ?></td>
                                    <td><?= $page->path ?></td>
                                    <td>
                                        <a href="/admin/page/manage/<?= $page->id ?>/edit/" class="btn btn-secondary">Edit</a>
                                        <a href="/admin/page/manage/<?= $page->id ?>/delete/" class="btn btn-danger">Delete</a>
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