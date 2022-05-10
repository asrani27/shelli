<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pengadilan Tinggi NEgeri Banjarmasin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/theme/template//vendors/feather/feather.css">
    <link rel="stylesheet" href="/theme/template//vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/theme/template//vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/theme/template//css/vertical-layout-light/style.css">
    <!-- endinject -->
    @toastr_css
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0" style="background: silver">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5 text-center">
                            <div class="brand-log">
                                <img src="/theme/logo.png" alt="logo" height="90px" width="80px">
                            </div>
                            <h4>Registrasi Dan Penjadwalan Sidang Perkara <br /> Pengadilan Negeri
                                Banjarmasin </h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>

                            <form class="pt-3" method="post" action="/login">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-lg"
                                        id="exampleInputEmail1" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <button type="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN
                                        IN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/theme/template//vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/theme/template/js/off-canvas.js"></script>
    <script src="/theme/template/js/hoverable-collapse.js"></script>
    <script src="/theme/template/js/template.js"></script>
    <script src="/theme/template/js/settings.js"></script>
    <script src="/theme/template/js/todolist.js"></script>
    @toastr_js
    @toastr_render
    <!-- endinject -->
</body>

</html>