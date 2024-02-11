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


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?= $this->include('components/admin/script'); ?>
    
</body>

</html>