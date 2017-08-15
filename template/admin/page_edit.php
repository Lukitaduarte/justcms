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
    <link href="../../../../../public/css/trumbowyg.min.css" rel="stylesheet">
</head>

<body>
<?php require 'layout/navbar-mobile.php'; ?>
<div class="container-fluid">
    <?php require 'layout/sidebar.php'; ?>

    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 nopadding">
        <nav class="bg-faded hidden-xs-down">
            <span class="navbar-brand">Edit Page</span>
            <a href="/admin/logout" class="btn btn-outline-success float-right">LOGOUT</a>
        </nav>
        <div class="wrap">
            <form action="/admin/page/manage/<?= $page->id ?>/update" method="post">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="titleLabel">Title</label>
                            <input type="text" name="page_title" class="form-control" id="titleLabel" placeholder="Title of my page" value="<?= $page->title ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control" name="page_content" id="editor"><?= $page->content ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="pathLabel">Path URL (Example: /page)</label>
                            <input type="text" name="page_path" class="form-control" id="pathLabel" placeholder="/about" value="<?= $page->path ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Edit Page</button>
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
<script src="../../../../../public/js/trumbowyg.min.js"></script>
<script>
    $('#editor').trumbowyg();
</script>
</body>
</html>