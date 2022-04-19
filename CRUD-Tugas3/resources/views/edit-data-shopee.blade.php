<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Edit Database Karyawan Shopee Indonesia</title>
</head>
<body>
<center>
    <div class="container-fluid">
        <div class="container position-center">
            <div class="row page-bg">
                <div class="p-4 col-md-12">
                    <div class="text-center top-icon">
                        <h1 class="mt-3">Edit Database</h1>
                        <br>
                        @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif

                        @if (Session::has('wrongUsername'))
                            <div class="alert alert-danger">{{ Session::get('wrongUsername') }}</div>
                        @endif

                        <form id="form-login" action="{{ route('sektor.update', $data->id) }}" method="post" onsubmit="return confirm('Apakah Anda Yakin Edit Data ?');">
                            @csrf
                            <div>
                                <input class="mt-3 form-control form-control-lg @error('nama_karyawan') is-invalid @enderror" name="nama_karyawan" type="text"
                                placeholder="nama_karyawan" value="{{ old('title', $data->nama_karyawan? $data->nama_karyawan: 'Tidak Ada Data') }}" autofocus required>
                            </div>
                            @error('nama_karyawan')
                            <div class="alert alert-danger">
                                Nama Karyawan Salah!
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('alamat_karyawan') is-invalid @enderror" name="alamat_karyawan" type="text"
                                placeholder="alamat_karyawan" value="{{ old('title', $data->alamat_karyawan? $data->alamat_karyawan: 'Tidak Ada Data') }}" autofocus required>
                            </div>

                            @error('alamat_karyawan')
                            <div class="alert alert-danger">
                                Alamat Karyawan Salah!
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('umur_karyawan') is-invalid @enderror" name="umur_karyawan" type="text"
                                placeholder="umur_karyawan" value="{{ old('title', $data->umur_karyawan? $data->umur_karyawan: 'Tidak Ada Data') }}" autofocus required>
                            </div>

                            @error('umur_karyawan')
                            <div class="alert alert-danger">
                                Umur Karyawan Salah!
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('agama_karyawan') is-invalid @enderror" name="agama_karyawan" type="text"
                                placeholder="agama_karyawan" value="{{ old('title', $data->agama_karyawan? $data->agama_karyawan: 'Tidak Ada Data') }}" autofocus required>
                            </div>

                            @error('agama_karyawan')
                            <div class="alert alert-danger">
                                Salah Menginputkan Agama Karyawan
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('gender_karyawan') is-invalid @enderror" name="gender_karyawan" type="text"
                                placeholder="gender_karyawan" value="{{ old('title', $data->gender_karyawan? $data->gender_karyawan: 'Tidak Ada Data') }}" autofocus required>
                            </div>

                            @error('gender_karyawan')
                            <div class="alert alert-danger">
                                Salah Menginputkan Gender Karyawan
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('jabatan') is-invalid @enderror" name="jabatan" type="text"
                                placeholder="jabatan" value="{{ old('title', $data->sektor->jabatan? $data->sektor->jabatan: 'Tidak Ada Data') }}" autofocus required>
                            </div>

                            @error('title')
                            <div class="alert alert-danger">
                                Jabatan dari Sektor Salah!
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('sektor_pekerjaan') is-invalid @enderror" name="sektor_pekerjaan" type="text"
                                       placeholder="sektor_pekerjaan" value="{{ $data->sektor->sektor_pekerjaan ? $data->sektor->sektor_pekerjaan : 'Tidak Ada Data' }}" autofocus required>
                            </div>

                            @error('sektor_pekerjaan')
                            <div class="alert alert-danger">
                                Sektor Pekerjaan tidak ada!
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('Alamat') is-invalid @enderror" name="Alamat" type="text"
                                       placeholder="Alamat Sekolah" value="{{ $data->sektor->Alamat ? $data->sektor->Alamat : 'Tidak Ada Data' }}" autofocus required>
                            </div>

                            @error('Alamat')
                            <div class="alert alert-danger">
                                Alamat Sekolah Salah
                            </div>
                            @enderror
                        </form>
                        <br>
                        <div class="mt-4 text-center submit-btn">
                            <a href="{{ route('home') }}" class="btn btn-secondary" onclick="return confirm('Apakah Anda Yakin Kembali ke Halaman Utama ?');">Kembali</a>
                            <button type="submit" class="btn btn-primary" form="form-login">Edit Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
</body>
</html>