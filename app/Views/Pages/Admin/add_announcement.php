<!DOCTYPE html>
<html lang="en">
<?= $this->include('components/admin/head'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?= $this->include('components/admin/navbar'); ?>

        <!-- /.navbar -->

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
                <div class="container-fluid">
                    <form class="row g-3" id="postDataForm_ann">
                        <div class="col-12">
                            <h3 class="mb-3">Post New Announcement</h3>
                        </div>

                        <div class="col-md-9">
                            <label for="announcement_desc" class="form-label">Body:</label>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Recipient" class="form-label">Recipient:</label>
                                <select class="form-select" id="Recipient" name="Recipient">
                                    <option value="Scholar">All</option>
                                    <option value="Scholar">Scholar</option>
                                    <option value="Parent">Parent</option>
                                    <option value="Parent and Scholar">Parent and Scholar</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-info" name="save" type="submit">
                                <span class="fa fa-save me-2"></span>Save
                            </button>
                        </div>
                    </form>
                </div><!-- /.container-fluid -->
            </section>
        </div>

        <!-- Control Sidebar -->

        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?= $this->include('components/admin/script'); ?>

</body>

</html>