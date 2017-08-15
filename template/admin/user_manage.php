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
            <span class="navbar-brand">Manage Users</span>
            <a href="/admin/logout" class="btn btn-outline-success float-right">LOGOUT</a>
        </nav>
        <div class="wrap">
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead class="thead-default">
                        <tr>
                            <th>User ID</th>
                            <th>Username</th>
                            <th>E-mail</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(empty($users)){
                            echo "There are no registered users";
                        }else {
                            foreach ($users as $user):
                                ?>
                                <tr>
                                    <th><?= $user->id ?></th>
                                    <td><?= $user->username ?></td>
                                    <td><?= $user->email ?></td>
                                    <td>
                                        <a href="/admin/user/manage/<?= $user->id ?>/edit/" class="btn btn-secondary">Edit</a>
                                        <a href="/admin/user/manage/<?= $user->id ?>/delete/" class="btn btn-danger">Delete</a>
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