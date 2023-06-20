<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PROJECT CRUD BDL</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>CRUD XML DATA MAHASISWA</h2>
                        </div>
                        <div class="col-sm-12">
                            <a href="add_modal.php" class="btn btn-success"><i class="material-icons">&#xE147;</i><span>Tambah</span></a>
                            <?php
                            session_start();
                            if (isset($_SESSION['message'])) {
                            ?>

                                <div class="alert alert-info text-center" style="margin-top: 50px;">
                                    <?php echo $_SESSION['message']; ?>
                                </div>

                            <?php
                                unset($_SESSION['message']);
                            }

                            ?>

                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">NIM</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">ALAMAT</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //load xml file
                        $file = simplexml_load_file('mahasiswa.xml');
                        foreach ($file->user as $row) {
                        ?>
                            <tr>
                                <td name="id"><?php echo $row->id; ?></td>
                                <td name="nama"><?php echo $row->nama; ?></td>
                                <td name="alamat"><?php echo $row->alamat; ?></td>
                                <td>
                                    <a href="edit_modal.php" class="edit" data-target="#editEmployeeModal" data-nim="<?php echo $row->id; ?>" data-nama="<?php echo $row->nama; ?>" data-alamat="<?php echo $row->alamat; ?>">
                                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                    </a>
                                    <a href="delete.php?id=<?php echo $row->id; ?>" class="delete"><i class="material-icons" title="Delete" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?');">&#xE872;</i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>