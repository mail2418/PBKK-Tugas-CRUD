@extends('main')

<div  style="padding-bottom: 7%"></div>
<section class="createsd" id="createsd">
    <div class="container-fluid">
        <div class="container position-center">
            <div class="row page-bg">
                <div class="p-4 col-md-12">
                    <div class="text-center top-icon">
                        <h1 class="mt-3">Form Informasi Karyawan Shopee Indonesia</h1>
                        <br>
                        @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif

                        @if (Session::has('wrongUsername'))
                            <div class="alert alert-danger">{{ Session::get('wrongUsername') }}</div>
                        @endif

                        <form id="form-login" action="{{ route('sektor.buat-data') }}" method="post">
                            @csrf
                            <div>
                                <input class="mt-3 form-control form-control-lg" name="nama_karyawan" type="text"
                                    placeholder="Nama Karyawan" autofocus required>
                            </div>

                            @error('nama_karyawan')
                            <div class="alert alert-danger">
                                Nama Karyawan salah!
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="alamat_karyawan" type="text"
                                    placeholder="Alamat Karyawan" autofocus required>
                            </div>

                            @error('alamat_karyawan')
                            <div class="alert alert-danger">
                                Alamat Karyawan salah!
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="umur_karyawan" type="text"
                                    placeholder="Umur Karyawan" autofocus required>
                            </div>

                            @error('umur_karyawan')
                            <div class="alert alert-danger">
                                Umur Karyawan salah!
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="agama_karyawan" type="text"
                                    placeholder="Agama Karyawan" autofocus required>
                            </div>

                            @error('agama_karyawan')
                            <div class="alert alert-danger">
                                Salah Menginputkan agama karyawan!
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="gender_karyawan" type="text"
                                    placeholder="Gender Karyawan" autofocus required>
                            </div>

                            @error('gender_karyawan')
                            <div class="alert alert-danger">
                                Gender Karyawan salah!
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="jabatan" type="text"
                                    placeholder="Jabatan Karyawan" autofocus required>
                            </div>

                            @error('jabatan')
                            <div class="alert alert-danger">
                                Jabatan Karyawan Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg" name="sektor_pekerjaan" type="text"
                                    placeholder="Sektor Pekerjaan" autofocus required>
                            </div>

                            @error('sektor_pekerjaan')
                            <div class="alert alert-danger">
                                Sektor Pekerjaan salah!
                            </div>
                            @enderror
                        </form>
                        <br>
                        <div class="mt-4 text-center submit-btn">
                            <button type="submit" class="btn btn-primary" form="form-login">Tambah Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</section>