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
                            <h1 class="m-0">Scholar</h1>
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
                <form class="form-horizontal" action="<?= base_url('admin/update-scholar') ?>" method="POST">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Update Scholar Information</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <form id="postDataForm_ann">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- Left column -->
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <!-- Left column -->
                                                            <div class="mb-3">
                                                                <label for="first_name" class="form-label">First Name:</label>
                                                                <input type="text" class="form-control" id="firstname" name="firstname" value="<?= $scholar_info['firstname'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="middle_name" class="form-label">Middle Name:</label>
                                                                <input type="text" class="form-control" id="middlename" name="middlename" value="<?= $scholar_info['middlename'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="last_name" class="form-label">Last Name:</label>
                                                                <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $scholar_info['lastname'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="suffix" class="form-label">Suffix:</label>
                                                                <input type="text" class="form-control" id="suffix" name="suffix" value="<?= $scholar_info['suffix'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="age" class="form-label">Age:</label>
                                                                <input type="number" class="form-control" id="age" name="age" value="<?= $scholar_info['age'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="gender" class="form-label">Gender:</label>
                                                                <select class="form-select" id="gender" name="gender">
                                                                    <option value="male" <?= ($scholar_info['gender'] == 'male') ? 'selected' : '' ?>>Male</option>
                                                                    <option value="female" <?= ($scholar_info['gender'] == 'female') ? 'selected' : '' ?>>Female</option>
                                                                    <option value="other" <?= ($scholar_info['gender'] == 'other') ? 'selected' : '' ?>>Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <!-- Right column -->
                                                            <div class="mb-3">
                                                                <label for="address" class="form-label">Address:</label>
                                                                <input type="text" class="form-control" id="address" name="address" value="<?= $scholar_info['address'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="street" class="form-label">Street:</label>
                                                                <input type="text" class="form-control" id="street" name="street" value="<?= $scholar_info['street'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="barangay" class="form-label">Barangay:</label>
                                                                <input type="text" class="form-control" id="barangay" name="barangay" value="<?= $scholar_info['barangay'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="city" class="form-label">City:</label>
                                                                <input type="text" class="form-control" id="city" name="city" value="<?= $scholar_info['city'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="province" class="form-label">Province:</label>
                                                                <input type="text" class="form-control" id="province" name="province" value="<?= $scholar_info['province'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="present_address" class="form-label">Present Address:</label>
                                                                <input type="text" class="form-control" id="present_address" name="present_address" value="<?= $scholar_info['presentaddress'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="birthdate" class="form-label">Birthdate:</label>
                                                                <input type="date" class="form-control" id="birthdate" name="birthdate" value="<?= $scholar_info['birthdate'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="email" class="form-label">Email:</label>
                                                                <input type="email" class="form-control" id="email" name="email" value="<?= $scholar_info['email'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="phone_number" class="form-label">Phone Number:</label>
                                                                <input type="tel" class="form-control" id="phone_number" name="phone_number" value="<?= $scholar_info['phone_num'] ?>">
                                                                <input type="hidden" name="scholar_id" value="<?= $scholar_info['scholar_id'] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button class="btn btn-info" name="save" type="submit">
                                                <span class="fas fa-save me-2"></span>Save
                                            </button>
                                        </form>
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
