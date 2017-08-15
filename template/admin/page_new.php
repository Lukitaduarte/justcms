<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require 'layout/head.php'; ?>
    <link href="../../public/css/trumbowyg.min.css" rel="stylesheet">
</head>

<body>
<?php require 'layout/navbar-mobile.php'; ?>
<div class="container-fluid">
    <?php require 'layout/sidebar.php'; ?>

    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 nopadding">
        <nav class="bg-faded hidden-xs-down">
            <span class="navbar-brand">New Page</span>
            <a href="/admin/logout" class="btn btn-outline-success float-right">LOGOUT</a>
        </nav>
        <div class="wrap">
            <form action="/admin/page/manage/add" method="post">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="titleLabel">Title</label>
                            <input type="text" name="page_title" class="form-control" id="titleLabel" placeholder="Title of my page" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control" name="page_content" id="editor"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="pathLabel">Path URL (Example: /page)</label>
                            <input type="text" name="page_path" class="form-control" id="pathLabel" placeholder="/about-site" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Create Page</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</div>

<?php require 'layout/footer.php'; ?>
<script src="../../public/js/trumbowyg.min.js"></script>
<script>
    $('#editor').trumbowyg();
</script>
</body>
</html>