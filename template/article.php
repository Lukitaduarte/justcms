<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Just Digital - CMS">
    <meta name="author" content="Lucas Duarte">

    <title>JustCMS - <?= $post->title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="../public/css/bootstrap.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="logo"></div>
</header>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/">Home</a>
                <a class="nav-item nav-link" href="/admin">Login</a>
                <?php foreach ($pages as $page): ?>
                <a class="nav-item nav-link" href="<?= $page->path ?>"><?= $page->title ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row margin-top-20">
        <article class="col-md-8 col-sm-12">
            <div class="card">
                <div class="card-block">
                    <h2 class="card-title"><?= $post->title ?></h2>
                    <?= $post->content ?>
                </div>
            </div>
        </article>
        <aside class="col-md-4 col-sm-12">
            <div class="list-group">
                <span style="background: #4e3d83; color: #fff" class="list-group-item list-group-item-action">Categories</span>
                <?php foreach ($categories as $category): ?>
                <span style="border-left: inset 5px <?= $category->color ?>;" class="list-group-item list-group-item-action"><?= $category->category_name ?></span>
                <?php endforeach; ?>
            </div>
        </aside>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="../public/js/jquery.min.js"></script>
<script src="../public/js/tether.js"></script>
<script src="../public/js/bootstrap.js"></script>
</body>
</html>