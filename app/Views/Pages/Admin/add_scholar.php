
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
                <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
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
         
<form class="form-horizontal" action="<?= base_url('admin/store-scholar') ?>" method="POST">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add New Scholar</h3>
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
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name">
                                </div>
                                <div class="mb-3">
                                    <label for="middle_name" class="form-label">Middle Name:</label>
                                    <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Enter middle name">
                                </div>
                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name:</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="suffix" class="form-label">Suffix:</label>
                                        <input type="text" class="form-control" id="suffix" name="suffix" placeholder="Enter suffix (if any)">
                                    </div>
                                    <div class="mb-3">
                                        <label for="age" class="form-label">Age:</label>
                                        <input type="number" class="form-control" id="age" name="age" placeholder="Enter age">
                                    </div>
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Gender:</label>
                                        <select class="form-select" id="gender" name="gender">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Right column -->
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address:</label>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
                                    </div>
                                    <div class="mb-3">
                                        <label for="street" class="form-label">Street:</label>
                                        <input type="text" class="form-control" id="street" name="street" placeholder="Enter street">
                                    </div>
                                    <div class="mb-3">
                                        <label for="barangay" class="form-label">Barangay:</label>
                                        <input type="text" class="form-control" id="barangay" name="barangay" placeholder="Enter barangay">
                                    </div>
                                    <div class="mb-3">
                                        <label for="city" class="form-label">City:</label>
                                        <input type="text" class="form-control" id="city" name="city" placeholder="Enter city">
                                    </div>
                                    <div class="mb-3">
                                        <label for="province" class="form-label">Province:</label>
                                        <input type="text" class="form-control" id="province" name="province" placeholder="Enter province">
                                    </div>
                                
                                    <div class="mb-3">
                                        <label for="present_address" class="form-label">Present Address:</label>
                                        <input type="text" class="form-control" id="present_address" name="present_address" placeholder="Enter present address">
                                    </div>
                                    <div class="mb-3">
                                        <label for="birthdate" class="form-label">Birthdate:</label>
                                        <input type="date" class="form-control" id="birthdate" name="birthdate">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone_number" class="form-label">Phone Number:</label>
                                        <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="Enter phone number">
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