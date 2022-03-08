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
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#myModal").modal('show');
        });
    </script>
    <title>Inventory Manager | Register</title>
</head>
<body>
<div id="myModal" class="modal fade warning" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header primary">
                    <h5 class="modal-title">Important Information</h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Currently all new accounts must be accepted. You will recieve and email when your account has been approved.</p>
                </div>
                <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
</body>

<div class="container">
    <div class="logo">
        <img src="../global/images/logo.png" alt="Logo" width="150em" height="150em">
    </div>
    <div class="flex-container">
        <div class="box-header">
            <p>Register</p>
        </div>
        <div class="box">

            <div class="box-content">
                <form>
                    <div class="row">
                    <div class="col">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                    <div class="row">
                    <div class="col">
                            <div class="form-group">
                                <label for="pass">Password</label>
                                <input type="password" class="form-control" id="pass" placeholder="Password">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="passRepeat">Repeat Password</label>
                                <input type="password" class="form-control" id="passRepeat" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Register</button>
                    <p>Already have an account? Login <a href="../login/index.php">Here</a>!</p>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>