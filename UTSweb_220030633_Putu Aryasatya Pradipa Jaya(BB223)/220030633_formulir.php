<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulir - 220030633</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="javascript.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body sticky-top" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">AZorgXX Corp</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="220030633_admin.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="prodi.php">Program Studi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mhs.php">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="upload.php">Upload File</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gambar.php">Arsip Gambar</a>
                    </li>
                </ul>
                <div class="d-flex" role="search">
                    <a class="btn btn-outline-danger" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <br>
        <h3 class="text-center">Formulir Tambah Mahasiswa</h3>
        <br>
        <form action="proses.php" enctype="multipart/form-data">
            <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
            </div>
            <div class="mb-3 row">
            <label for="foto" class="col-sm-2 col-form-label">Foto Mahasiswa</label>
                <div class="col-sm-10">
            <img src="img/default-placeholder.png" alt="" id="preview" height="150px"> <br><br>
            <input type="file" class="form-control" id="foto" name="foto" accept=".jpg, .jpeg, .png" onchange="fileValidation()">
                </div>
            </div>
            <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="mb-3 row">
            <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                </div>
            </div>
            <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="L" value="L" required>
                    <label class="form-check-label" for="L">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="P" value="P">
                    <label class="form-check-label" for="P">
                        Perempuan
                    </label>
               </div>
                </div>
            </div>
            <div class="mb-3 row">
            <label for="prodi" class="col-sm-2 col-form-label">Program Studi</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" id="prodi" name="prodi" required>
                      <option value="">~ Pilih Program Studi ~</option>
                      <option value="SK">Sistem Komputer</option>
                      <option value="SI">Sistem Informasi</option>
                      <option value="TI">Teknologi Informasi</option>
                      <option value="MI">Manajemen Informatika</option>
                      <option value="BD">Bisnis Digital</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label">Minat</label>
                <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="minat[]" value="game" id="game">
                    <label class="form-check-label" for="game">
                        Game
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="minat[]" value="programming" id="programming">
                    <label class="form-check-label" for="programming">
                        Programming
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="minat[]" value="multimedia" id="multimedia">
                    <label class="form-check-label" for="multimedia">
                        Multimedia
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="minat[]" value="web_developer" id="web_developer">
                    <label class="form-check-label" for="web_developer">
                        Web Developer
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="minat[]" value="videographer" id="videographer">
                    <label class="form-check-label" for="videographer">
                        Videographer
                    </label>
                </div>
                </div>
            </div>
            <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Kirim</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>