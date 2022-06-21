<!doctype html>
<html lang="en">
    <head>
    <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    </head>
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center bg-primary">
                <div class="mb-5 mt-1 align-center"></div>
            </div>
        </div>
</div>
<div class="container-fluid py-2">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-3 col-sm-4 col-12">
                            <div class="nav flex-column nav-pills" role="tablist" ariaorientation="vertical">
                            <a class="nav-link text-black  rounded-4 p-1 border " href="/home">Home</a>
                            <a class="nav-link text-black  rounded-4 p-1 border " href="/dosen">Dosen</a>
                            <a class="nav-link text-black  rounded-4 p-1 border active " href="/mahasiswa">Mahasiswa</a>
                            <a class="nav-link text-black  rounded-4 p-1 border " href="/matakuliah">Skripsi</a>
                </div>
                        </div>
                    </div>
                </div>
<!-- Form -->
<div class="col-lg-10">
        <form action="/usser/simpanedituser2" method="POST" class="pt-2 pb-2">
            @csrf
            <div class="form-group w-25">
                <label> NIK User </label>
                <input type="number" name="nik_user" class="form-control" placeholder="Masukan NIK user" required>
             </div>

            <div class="form-group w-25">
                <label>Nama User</label>
                <input type="text" name="nama_user" class="form-control" placeholder="Masukan NAMA user" required>
            </div>

            <div class="form-group w-25">
                <label>No Hp</label>
                <input type="number" name="no_hp" class="form-control" placeholder="Masukan nomor hp" required>
            </div>

            <div class="form-group w-25">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukan password Pengguna" required>
            </div>

            <div class="form-group pt-4">
                <input type="submit" value="SIMPAN" class="btn btn-outline-primary" required>
            </div>
        </form>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"crossorigin="anonymous"></script>

</body>
</html>