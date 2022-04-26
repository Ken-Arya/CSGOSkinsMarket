<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Admin - Login</title>
        <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="loginstyle.css" rel="stylesheet">
    </head>
    <body class="bg-gradient-primary">
        <div class="form">
            <h3>Silahkan Login</h3>
            <form class="needs-validation" novalidate action="" method="POST">
                <div class="mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                    <button class="btn btn-primary btn-user btn-block" type="submit" name="submit">
                        <i class="fa-fw fas fa-sign-in-alt"></i> Login
                    </button> 
                </div>                               
            </form>
        </div>
        <script src="<?= base_url('assets/js/custom-script.js') ?>"></script>
        <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
        <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>
    </body>
</html>