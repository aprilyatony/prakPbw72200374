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
        @php
            $bidang = explode(',', $mahasiswa->bidang);
        @endphp
        <form action="/mahasiswa/simpanEditmahasiswa/{{ $mahasiswa->id }}" method="POST" class="pt-2 pb-2">
            @csrf
            @method('PUT')
            <div class="form-group w-25">
                <label> NIM</label>
                <input type="number" name="nim" class="form-control" value="{{ $mahasiswa->nim }}">
            </div>
            <div class="form-group w-25">
                <label> Nama Mahasiswa </label>
                <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}">
            </div>
            <label> Gender </label>
            <div class="form-group w-25">
                <input type="radio" name="gender" value="Laki-Laki" {{ $mahasiswa->gender='Laki-laki' ? 'checked':''}} class="form-check-input">
                <label> Laki-Laki </label>
            </div>
            <div class="form-group w-25">
                <input type="radio" name="gender" value="Perempuan" {{ $mahasiswa->gender='Perempuan' ? 'checked':''}} class="form-check-input">
                <label> Perempuan </label>
            </div>
            
            <div class="form-group w-25">
                <label> Jurusan </label>
                <select name="jurusan" class="form-control">
                    <option value="0">-Pilih Jurusan-</option> 
                    <option value="Akuntansi" {{ $mahasiswa ->jurusan = 'Akuntansi' ? 'selected':''}}>Akuntansi</option>
                    <option value="Arsitekur" {{ $mahasiswa ->jurusan = 'Arsitekur' ? 'selected':''}}>Arsitekur</option>
                    <option value="Astronomi" {{ $mahasiswa ->jurusan = 'Astronomi' ? 'selected':''}}>Astronomi</option>
                    <option value="Bioteknologi" {{ $mahasiswa ->jurusan = 'Bioteknologi' ? 'selected':''}}>Bioteknologi</option>
                    <option value="Desain Produk" {{ $mahasiswa ->jurusan = 'Desain Produk' ? 'selected':''}}>Desain Produk</option>
                    <option value="Fisika" {{ $mahasiswa ->jurusan = 'Fisika' ? 'selected':''}}>Fisika</option>
                    <option value="Informatika" {{ $mahasiswa ->jurusan = 'Informatika' ? 'selected':''}}>Informatika</option>
                    <option value="Matematika" {{ $mahasiswa ->jurusan = 'Matematika' ? 'selected':''}}>Matematika</option>
                    <option value="Manajemen" {{ $mahasiswa ->jurusan = 'Manajemen' ? 'selected':''}}>Manajemen</option>
                    <option value="Pendidikan Bahasa Inggris" {{ $mahasiswa ->jurusan = 'Pendidikan Bahasa Inggris' ? 'selected':''}}>Pendidikan Bahasa Inggris</option>
                    <option value="Statistika" {{ $mahasiswa ->jurusan = 'Statistika' ? 'selected':''}}>Statistika</option> 
                    <option value="Sistem Infromasi" {{ $mahasiswa ->jurusan = 'Sistem Infromasi' ? 'selected':''}}>Sistem Infromasi</option>
                </select>  
            
            <label> Bidang Minat </label>
            <div class="form-check w-25">
                <input type="checkbox" name="bidang[]" value="Keilmuan" {{ in_array('Keilmuan', $bidang) ? 'checked':''}} 
                class="form-check-input">
                <label> Keilmuan </label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" name="bidang[]" value="Seni" {{ in_array('Seni', $bidang) ? 'checked':''}} 
                class="form-check-input">
                <label> Seni </label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" name="bidang[]" value="Akuntansi" {{ in_array('Akuntansi', $bidang) ? 'checked':''}} 
                class="form-check-input"><label> Akuntansi </label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" name="bidang[]" value="Periklanan" {{ in_array('Periklanan', $bidang) ? 'checked':''}} 
                class="form-check-input"><label> Periklanan </label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" name="bidang[]" value="Kesekretariatan" {{ in_array('Kesekretariatan', $bidang) ? 'checked':''}}  
                class="form-check-input"><label> Kesekretariatan </label>
            </div>
            <div class="form-check w-25">
                <input type="checkbox" name="bidang[]" value="Reporter" {{ in_array('Reporter', $bidang) ? 'checked':''}}  
                class="form-check-input"><label> Reporter </label>
            </div>
            <div class="form-group pt-4">
                <input type="submit" value="SAVE" class="btn btn-outline-primary">
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