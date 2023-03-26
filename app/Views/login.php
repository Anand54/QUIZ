<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>QUIZ Login</title>
</head>
<body>
    <div style="float:right;" class="me-3">
        <a href="<?php echo base_url(); ?>home/adminLogin" class="fw-bold" style="text-decoration:none;color:black;"><i class="bi bi-speedometer2 fw-bold"></i> Admin</a>
    </div>
    <div class="container">
        <div class="text-center fw-bold mt-3 fs-3">
            Login
        </div>

        <div class="col-md-4 m-auto mt-3">
        <form method="POST" action="<?php echo base_url(); ?>home/login">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary" >Submit</button>
        </form>
        <div class="text-center mt-2">
            New User ? <a href="<?php echo base_url(); ?>home/registerForm">Register Now</a>
        </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>   
</body>
</html>