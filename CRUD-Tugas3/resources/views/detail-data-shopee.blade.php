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
    <title>Detail Database</title>
</head>
<body>
<center>
    <div class="container-fluid">
        <div class="container position-center">
            <div class="row page-bg">
                <div class="p-4 col-md-12">
                    <div class="text-center top-icon">
                        <h1 class="mt-3">Detail Karyawan</h1>
                        <br>
                        @if (Session::has('isi'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif

                        @if (Session::has('title'))
                            <div class="alert alert-danger">{{ Session::get('wrongUsername') }}</div>
                        @endif

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="nama_karyawan" type="text"
                                        placeholder="nama_karyawan" value="{{ $data->nama_karyawan ? $data->nama_karyawan : 'Tidak Ada Data' }}" readonly>
                            </div>

                            @error('nama_karyawan')
                            <div class="alert alert-danger">
                                Nama Karyawan salah!
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="alamat_karyawan" type="text"
                                        placeholder="alamat_karyawan" value="{{ $data->alamat_karyawan ? $data->alamat_karyawan : 'Tidak Ada Data' }}" readonly>
                            </div>

                            @error('alamat_karyawan')
                            <div class="alert alert-danger">
                                Alamat Karyawan salah!
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="umur_karyawan" type="text"
                                        placeholder="umur_karyawan" value="{{ $data->umur_karyawan ? $data->umur_karyawan : 'Tidak Ada Data' }}" readonly>
                            </div>

                            @error('umur_karyawan')
                            <div class="alert alert-danger">
                                Umur Karyawan salah!
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="agama_karyawan" type="text"
                                        placeholder="agama_karyawan" value="{{ $data->agama_karyawan ? $data->agama_karyawan : 'Tidak Ada Data' }}" readonly>
                            </div>

                            @error('agama_karyawan')
                            <div class="alert alert-danger">
                                Salah Menginputkan agama karyawan!
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="gender_karyawan" type="text"
                                        placeholder="gender_karyawan" value="{{ $data->gender_karyawan ? $data->gender_karyawan : 'Tidak Ada Data' }}" readonly>
                            </div>

                            @error('gender_karyawan')
                            <div class="alert alert-danger">
                                Salah menginputkan gender karyawan!
                            </div>
                            @enderror
                            
                            <div>
                                <input class="mt-3 form-control form-control-lg" name="jabatan" type="text"
                                        placeholder="jabatan" value="{{ $data->sektor->jabatan ? $data->sektor->jabatan : 'Tidak Ada Data' }}" readonly>
                            </div>

                            @error('jabatan')
                            <div class="alert alert-danger">
                                Jabatan Karyawan salah!
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="sektor_pekerjaan" type="text"
                                        placeholder="sektor_pekerjaan" value="{{ $data->sektor->sektor_pekerjaan ? $data->sektor->sektor_pekerjaan : 'Tidak Ada Data' }}" readonly>
                            </div>

                            @error('sektor_pekerjaan')
                            <div class="alert alert-danger">
                                Sektor pekerjaan salah!
                            </div>
                            @enderror
                        {{-- </form> --}}
                        <br>
                        <div class="mt-4 text-center submit-btn">
                            <a href="{{ route('home') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
</body>
</html>
