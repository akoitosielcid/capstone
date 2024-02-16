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
                            <i class="fas fa-plus"></i> Add New Announcement
                        </button>
                    </a>


                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Middle Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Suffix</th>
                            <th scope="col">Age</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Address</th>
                            <th scope="col">Scholar Region</th>
                            <th scope="col">Present Address</th>
                            <th scope="col">Birthdate</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($scholar_info as $s): ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $s['firstname'] ?></td>
                            <td><?= $s['middlename'] ?></td>
                            <td><?= $s['lastname'] ?></td>
                            <td><?= $s['suffix'] ?></td>
                            <td><?= $s['age'] ?></td>
                            <td><?= $s['gender'] ?></td>
                            <td><?= $s['address'] ?></td>
                            <td><?= $s['scholar_region'] ?></td>
                            <td><?= $s['presentaddress'] ?></td>
                            <td><?= $s['birthdate'] ?></td>
                            <td><?= $s['email'] ?></td>
                            <td><?= $s['phone_num'] ?></td>
                            <td>
                                <a href="/scholar/edit/<?= $s['scholar_id'] ?>" class="btn btn-primary">Edit</a>
                                <a href="/scholar/delete/<?= $s['scholar_id'] ?>" class="btn btn-danger">Delete</a>
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