<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Selamat Datang di Perpustakaan</h1>
                <p>Ini adalah halaman home</p>
            </div>
            <div class="col">
                <a href="<?= base_url('logout') ?>" class="btn btn-danger">Logout</a>
            </div>
        </div>

        <!-- create list of books -->
        <div class="row">
            <div class="col-12">
                <h2>Daftar Buku</h2>
                <a class="btn btn-info" href="<?= base_url('/buku/create') ?>">Tambah Data</a>
            </div>

            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($buku as $key => $value) : ?>
                            <tr>
                                <td><?= $value['judul'] ?></td>
                                <td><?= $value['penulis'] ?></td>
                                <td><?= $value['penerbit'] ?></td>
                                <td><?= $value['tahun_terbit'] ?></td>
                                <td>
                                    <a href="<?= base_url('/buku/' . $value['id']) ?>" class="btn btn-sm btn-success">Detail</a>
                                    <!-- hapus button -->
                                    <a href="<?= base_url('/buku/' . $value['id'] . '/edit') ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="<?= base_url('/buku/' . $value['id'] . '/delete') ?>" method="POST" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>