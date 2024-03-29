<!DOCTYPE html>
<html lang="en">
<?= $this->include('components/admin/head'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url('admin/dist/img/AdminLTELogo.png') ?>" alt="AdminLTELogo" height="60" width="60">
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
                    <a href="add-announcements">
                        <button type="button" class="btn btn-success">
                            <i class="fas fa-plus"></i> New Announcement
                        </button>
                    </a>
                    <?php if(session()->getFlashdata("success")): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            
                <strong>
                    <?= session()->getFlashdata("success") ?>
                </strong>
            </div>
        <?php endif; ?>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Announcement</th>
                                <th scope="col">Date Posted</th>
                                <th scope="col">Author</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($announcement as $a): ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $a['announcement_desc'] ?></td>
                            <td><?= $a['date_posted'] ?></td>
                            <td><?= $a['author'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/edit-announcement/' . $a['id_announcement']) ?>"class="btn btn-success">Edit</a>
                                <a href="<?= base_url('admin/delete-announcement/' . $a['id_announcement']) ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
                        </tbody>  
                    </table>
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