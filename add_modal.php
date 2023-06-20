<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <!-- Add Modal HTML -->
    <div tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="add.php">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Data</h4>
                        <button type="index.php" class="close" data-dismiss="modal" aria-hidden="true">&times;
                            <a href="index.php"></a></button>
                    </div>
                    <div class="modal-body">
                    
                        <div class="form-group">
                            <label>NIM</label>
                            <input type="number" name="id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span><a href="index.php" style="text-decoration:none">Cancel</a></span></button>
                        <button type="submit" name="add" class="btn btn-success"><span>Tambah</span></button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>