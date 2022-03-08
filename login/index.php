<?php

require('../global/database/dbconnect.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="inc/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Inventory Manager | Login</title>
</head>
<body>

<?php

    if (isset($_GET['error'])) {
        if ($_GET['error'] == 1) {
            require_once('inc/modals/modal_error.php');
        }
    }

?>



<div class="container">
    <div class="logo">
        <img src="../global/images/logo.png" alt="Logo" width="150em" height="150em">
    </div>
    <div class="flex-container">
        <div class="box-header">
            <p>Login</p>
        </div>
        <div class="box">

            <div class="box-content">
                <form action="login_handle.php" method="POST">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" placeholder="Password" name="pass" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
                    <a class="btn btn-secondary" href="../register/index.php" role="button">Register</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>