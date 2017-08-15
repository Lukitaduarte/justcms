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
            <span class="navbar-brand">New User</span>
            <a href="/admin/logout" class="btn btn-outline-success float-right">LOGOUT</a>
        </nav>
        <div class="wrap">
            <form action="/admin/user/manage/add" method="post">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="usernameLabel">Username</label>
                            <input type="text" name="username" class="form-control" id="usernameLabel" placeholder="admin" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="passwordLabel">Password</label>
                            <input type="password" name="password" class="form-control" id="passwordLabel" placeholder="******" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="emailLabel">E-mail</label>
                            <input type="email" name="email" class="form-control" id="emailLabel" placeholder="my@email.com" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Create User</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</div>

<?php require 'layout/footer.php'; ?>
</body>
</html>