<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Just Digital - CMS">
    <meta name="author" content="Lucas Duarte">

    <title>JustCMS - Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../../public/css/bootstrap.css" rel="stylesheet">
    <link href="../../../../../public/css/dashboard.css" rel="stylesheet">
</head>

<body>
<?php require 'layout/navbar-mobile.php'; ?>
<div class="container-fluid">
    <?php require 'layout/sidebar.php'; ?>

    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 nopadding">
        <nav class="bg-faded hidden-xs-down">
            <span class="navbar-brand">Edit User</span>
            <a href="/admin/logout" class="btn btn-outline-success float-right">LOGOUT</a>
        </nav>
        <div class="wrap">
            <form action="/admin/user/manage/<?= $user->id ?>/update" method="post">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nameLabel">Username</label>
                            <input type="text" name="username" class="form-control" id="nameLabel" placeholder="admin" value="<?= $user->username ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="passwordLabel">Password</label>
                            <input type="password" name="password" class="form-control" id="passwordLabel" placeholder="******" value="<?= $user->password ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="emailLabel">E-mail</label>
                            <input type="email" name="email" class="form-control" id="emailLabel" placeholder="my@email.com" value="<?= $user->email ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Edit User</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</div>

<!-- Bootstrap core JavaScript -->
<script src="../../../../../public/js/jquery.min.js"></script>
<script src="../../../../../public/js/tether.js"></script>
<script src="../../../../../public/js/bootstrap.js"></script>
</body>
</html>