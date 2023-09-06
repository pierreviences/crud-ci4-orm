

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
        <h1>Edit Buku Tamu</h1>
        <form action="<?= base_url('proses_edit_tamu')?>" method="post">
        <input type="hidden" value="<?= $data_tamu->id ?>">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Berkunjung</label>
            <input type="text" class="form-control" id="tgl_berkunjung" name="tgl_berkunjung" value="<?= $data_tamu->tgl_berkunjung ?>">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Tamu</label>
            <input type="text" class="form-control" id="nama_tamu" name="nama_tamu" value="<?= $data_tamu->nama_tamu ?>">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">No Telepon</label>
            <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?= $data_tamu->no_telepon ?>">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data_tamu->alamat ?>">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Keperluan</label>
            <input type="text" class="form-control" id="keperluan" name="keperluan" value="<?= $data_tamu->keperluan ?>">
          </div>
            <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>