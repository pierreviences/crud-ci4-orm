<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h1>Buku Tamu</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tanggal Berkunjung</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No. Telepon</th>
                    <th scope="col">Keperluan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($all_data_tamu as $tamu) : ?>
                    <tr>
                        <td><?= $tamu->tgl_berkunjung ?></td>
                        <td><?= $tamu->nama_tamu ?></td>
                        <td><?= $tamu->alamat ?></td>
                        <td><?= $tamu->no_telepon ?></td>
                        <td><?= $tamu->keperluan ?></td>

                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <br>
        <a href="<?= base_url('add_data_tamu') ?>" class="btn btn-primary">+ Tambah Data</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>