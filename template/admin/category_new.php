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
            <span class="navbar-brand">New Category</span>
            <a href="/admin/logout" class="btn btn-outline-success float-right">LOGOUT</a>
        </nav>
        <div class="wrap">
            <form action="/admin/category/manage/add" method="post">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="nameLabel">Category Name</label>
                            <input type="text" name="category_name" class="form-control" id="nameLabel" placeholder="Technology" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="colorLabel">Category Color</label>
                            <input type="color" name="category_color" id="colorLabel" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Create Category</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</div>

<?php require 'layout/footer.php'; ?>
</body>
</html>