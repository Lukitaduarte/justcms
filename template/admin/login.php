<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Just Digital - CMS">
    <meta name="author" content="Lucas Duarte">

    <title>JustCMS - Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="../../public/css/bootstrap.css" rel="stylesheet">
    <link href="../../public/css/login.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <div class="row align-items-center">
        <div class="offset-md-4 col-md-4 col-sm-12">
            <div class="card">
                <div class="card-block">
                    <img src="../../public/img/logo.png" width="150" height="auto" class="rounded-circle mx-auto d-block margin-bottom">
                    <?php if(isset($error)) echo $error; ?>
                    <form method="post">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control form-control-lg custom-input" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control form-control-lg custom-input" placeholder="*******">
                        </div>
                        <button type="submit" class="btn btn-view btn-block">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'layout/footer.php'; ?>
</body>
</html>