
<?= $this->include('Components/admin/head'); ?>
<body>
    <?php
$data['page'] = "modstudent"; // Set the 'page' variable in the $data array
echo view('Components/admin/navbar', $data); // Pass the $data array to the view

    ?>


        <!-- /.content-wrapper -->
        <div class="content-wrapper p-5">
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

                    <table class="table table-striped table-bordered table-hover scholarlist" id="tbl">
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
                            <td><?= $s['address'] ?></td>
                            <td><?= $s['email'] ?></td>
                            <td>
                            <a href="<?= base_url('admin/edit-scholar/' . $s['scholar_id']) ?>"class="btn btn-success">Edit</a>
                            <!-- <a href="<?= base_url('admin/delete-scholar/' . $s['scholar_id']) ?>" class="btn btn-danger">Delete</a> -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="<?= $s['scholar_id'] ?>">
  Delete Item
</button>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>  
            </table>
                        
                </div>
            </section>
        </div>

        <!-- Control Sidebar -->

        <!-- /.control-sidebar -->
    </div>
    
    <?php 
    $res["content"] = [
        "id"=>"deleteModal",
        "title"=>"Delete Confirmation",
        "message"=>" Are you sure you want to delete this item?",
        "type"=>"delete",
        "action"=>"admin/delete-scholar/"
    ];
    echo view('components/Modal',$res); ?>
    <?= $this->include('components/admin/script'); ?>


    <script>
$("#tbl").on("click",".btn-danger", function() {
    $("#hiddenID").val($(this).data("id"))
})
        </script>
</body>

</html>