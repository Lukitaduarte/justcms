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
            <span class="navbar-brand">Manage Posts</span>
            <a href="/admin/logout" class="btn btn-outline-success float-right">LOGOUT</a>
        </nav>
        <div class="wrap">
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead class="thead-default">
                        <tr>
                            <th>Post ID</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Friendly URL</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(empty($posts)){
                            echo "There are no registered posts";
                        }else {
                            foreach ($posts as $post):
                                ?>
                                <tr>
                                    <th><?= $post->id ?></th>
                                    <td><?= $post->title ?></td>
                                    <td><?= $post->category_name ?></td>
                                    <td><?= $post->path ?></td>
                                    <td>
                                        <a href="/admin/post/manage/<?= $post->id ?>/edit/" class="btn btn-secondary">Edit</a>
                                        <a href="/admin/post/manage/<?= $post->id ?>/delete/" class="btn btn-danger">Delete</a>
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