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
            <span class="navbar-brand">New Post</span>
            <a href="/admin/logout" class="btn btn-outline-success float-right">LOGOUT</a>
        </nav>
        <div class="wrap">
            <form action="/admin/post/manage/add" method="post">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="titleLabel">Title</label>
                            <input type="text" name="post_title" class="form-control" id="titleLabel" placeholder="Title of my post" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="categoryLabel">Category</label>
                            <select class="form-control" name="post_category" id="categoryLabel">
                                <?php foreach ($categories as $category): ?>
                                    <option value="<?= $category->id ?>"><?= $category->category_name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control" name="post_content" id="editor"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="pathLabel">Path URL (Example: /news/title-your-post)</label>
                            <input type="text" name="post_path" class="form-control" id="pathLabel" placeholder="/news/my-post" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Publish</button>
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