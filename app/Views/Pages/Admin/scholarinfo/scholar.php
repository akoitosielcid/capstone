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
                            <h1 class="m-0">Scholars</h1>
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
                    <a href="add-scholars">
                        <button type="button" class="btn btn-success">
                            <i class="fas fa-plus"></i> Add New Scholar
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

                    <table class="table table-striped table-bordered table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Address</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($scholar_info as $s): ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $s['firstname'] ?> <?= $s['lastname'] ?></td>
                            <td><?= $s['age'] ?></td>
                            <td><?= $s['gender'] ?></td>
                            <td><?= $s['street'] . ', ' . $s['barangay'] . ', ' . $s['city'] . ', ' . $s['province'] ?></td>
                            <td><?= $s['email'] ?></td>
                            <td>
                            <a href="<?= base_url('admin/edit-scholar/' . $s['scholar_id']) ?>"class="btn btn-success">Edit</a>
                            <a href="<?= base_url('admin/delete-scholar/' . $s['scholar_id']) ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
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