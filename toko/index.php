<?php
require 'functions.php';

$data = query("SELECT * FROM barang");

if (isset($_POST['addBtn'])) {
    if (addData($_POST) > 0) {
        echo "<script>alert('Data berhasil masuk !');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>alert('Data gagal masuk !');
        document.location.href = 'index.php';
        </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dianna</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        h1 {
            color: blue;
        }
    </style>
</head>

<body>



    <div class="container-fluid my-5 mx-3">
        <h1>Toko Dianna</h1>
        <form class="mt-5" method="post" action="">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga Barang</label>
                <input type="number" class="form-control" id="harga" name="harga">
            </div>
            <button type="submit" name="addBtn" class="btn btn-primary">Submit</button>
        </form>

        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Action</th>
                    <th scope="col">Waktu</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($data as $d) :
                ?>
                    <tr>
                        <th scope="row"><?php echo $i++; ?></th>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['harga']; ?></td>
                        <td>
                            <a href="hapus.php?id=<?php echo $d['barang_id']; ?>" class="badge rounded-pill text-bg-danger">Hapus</a>
                            <a href="" class="badge rounded-pill text-bg-info">Info</a>
                        </td>
                        <td><?php echo $d['created_at']; ?></td>

                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>



    <script>

    </script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>