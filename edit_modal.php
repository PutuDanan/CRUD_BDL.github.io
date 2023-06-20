<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>

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
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="edit.php">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="edit-id">NIM</label>
                            <input type="text" class="form-control" id="edit-id" name="id" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-nama">NAMA</label>
                            <input type="text" class="form-control" id="edit-nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-alamat">ALAMAT</label>
                            <textarea class="form-control" id="edit-alamat" name="alamat" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="index.php" style="text-decoration: none;"><input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"></a>
                        
                        <input type="submit" class="btn btn-info" name="edit" value="Edit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>