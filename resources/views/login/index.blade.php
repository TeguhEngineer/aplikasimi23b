<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in (v2)</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="adminlte/css/adminlte.min.css?v=3.2.0">
    
</head>

<body class="hold-transition login-page">
    <div class="login-box">

        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <span class="h3">APLIKASI INI KHUSUS <br> UNTUK MI23B</span> <br> 
                <small class="h6"><b>POLITEKNIK LP3I TASIKMALAYA</b></small>
            </div>
            <div class="card-body">
                <form action="/admin" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="nim" class="form-control" placeholder="NIM">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block mt-2">Sign In</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>

    </div>


    <script src="plugins/jquery/jquery.min.js"></script>

    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="adminlte/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>
