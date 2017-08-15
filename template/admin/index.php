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
            <span class="navbar-brand">Dashboard</span>
            <a href="/admin/logout" class="btn btn-outline-success float-right">LOGOUT</a>
        </nav>
        <div class="wrap">
            <div class="row">
                <div class="col-md-3 col-sm-12 nolink">
                    <a href="/admin/post/new">
                        <div class="fast-link text-center">
                            <span class="align-middle">NEW POST</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-12 nolink">
                    <a href="/admin/category/new">
                        <div class="fast-link text-center">
                            NEW CATEGORY
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-12 nolink">
                    <a href="/admin/page/new">
                        <div class="fast-link text-center">
                            NEW PAGE
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-12 nolink">
                    <a href="/admin/user/new">
                        <div class="fast-link text-center">
                            NEW USER
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>
</div>

<?php require 'layout/footer.php'; ?>
</body>
</html>