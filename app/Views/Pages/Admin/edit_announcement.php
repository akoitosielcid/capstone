
<!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap Icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <!-- Custom styles -->
        <link href="dist/css/style.css" rel="stylesheet">
        <?= $this->include('components/admin/head'); ?>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="<?= base_url('admin/dist/img/AdminLTELogo.png') ?>" alt="AdminLTELogo" height="60" width="60">
            </div>

            <!-- Navbar -->
            <?= $this->include('components/admin/navbar'); ?>

            <!-- Main Sidebar Container -->
            <?= $this->include('components/admin/sidebar'); ?>

            <!-- Content Wrapper. Contains page content -->
            <?= $this->include('components/admin/content_wrapper'); ?>

            <!-- /.content-wrapper -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Announcements</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Dashboard v1</li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">

                    <form class="form-horizontal" action="<?= base_url('admin/update-announcement') ?>" method="POST">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Edit Announcement</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <input type="hidden" name="id_announcement" value="<?= $announcement_desc['id_announcement'] ?>">
                                            <div class="mb-3">
                                                <label for="announcement_desc" class="form-label">Body:</label>
                                                <textarea class="form-control" id="announcement_desc" name="announcement_desc" rows="3"><?= $announcement_desc['announcement_desc'] ?></textarea>
                                            </div>
                                        
                                            <div class="mb-3" style="display: none;">
                                                <label for="date_posted" class="form-label">Date Posted:</label>
                                                <input type="date" class="form-control" id="date_posted" name="date_posted">
                                            </div>

                                            <button class="btn btn-info" name="save" type="submit">
                                                <span class="fas fa-save me-2"></span>Save
                                            </button>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                        </div><!-- /.container-fluid -->
                    </form>

</section>
            </div>

            <!-- Control Sidebar -->

            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- Bootstrap Bundle with Popper -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <?= $this->include('components/admin/script'); ?>

    </body>

    </html>