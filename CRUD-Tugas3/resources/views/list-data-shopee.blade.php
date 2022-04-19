@extends('main')

<div  style="padding-bottom: 7%"></div>

<section class="sektor" id="sektor">
    <div class="container">
        <center style="margin: 0 0 24px 0"><h2>Database Karyawan Shopee Indonesia</h2></center>
        <a href="{{ route('sektor.tambah-data') }}" class="btn btn-success shadow" style="font-size: 12px"><i class="fa fa-plus-circle fa-s"></i> Tambah Informasi Karyawan</a>
        <br/>
        <br/>
        @if (Session::has('tambah_data'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; height:auto;">
                <strong><i class="fa fa-check-circle"></i> Berhasil!</strong>
                <br>
                    Penambahan sektor Berhasil
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </button>
            </div>
        @endif

        @if (Session::has('edit_data'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; height:auto;">
                <strong><i class="fa fa-check-circle"></i> Berhasil!</strong>
                <br>
                    Pengeditan sektor Berhasil
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif

        @if (Session::has('hapus_data'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; height:auto;">
                <strong><i class="fa fa-check-circle"></i> Berhasil!</strong>
                <br>
                    Penghapusan sektor Berhasil
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Karyawan</th>
                    <th>Alamat Karyawan</th>
                    <th>Umur Karyawan</th>
                    <th>Agama Karyawan</th>
                    <th>Gender Karyawan</th>
                    <th>Jabatan Karyawan</th>
                    <th>Sektor Pekerjaan Karyawan</th>
                </tr>
            </thead>
            @php
                $it = 1;
            @endphp
            @foreach($data as $d)
            <tr>
                <td>{{ $it }}</td>
                <td>{{ $d->nama_karyawan}}</td>
                <td>{{ $d->alamat_karyawan }}</td>
                <td>{{ $d->umur_karyawan}}</td>
                <td>{{ $d->agama_karyawan}}</td>
                <td>{{ $d->gender_karyawan}}</td>
                <td>{{ $d->sektor->jabatan }}</td>
                <td>{{ $d->sektor->sektor_pekerjaan}}</td>
                <td>
                    <form onsubmit="return confirm('Apakah Anda Yakin Menghapus Data ini ?');" action="{{ route('sektor.destroy', $d->id) }}" method="POST">
                        
                        |
                        <a href="{{ Route('sektor.edit', $d->id) }}" class="btn btn-sm btn-primary shadow"><i class="fa fa-edit"></i> Edit</a>
                        |
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger shadow"><i class="fa fa-trash"></i> Delete</button>
                        |
                        <a href="{{ route('sektor.show' , $d->id) }}" class="btn btn-sm btn-secondary shadow"><i class="fa fa-info-circle"></i> Detail</a>
                    </form>
                </td>
            </tr>
            @php
                $it+=1;
            @endphp
            @endforeach
        </table>
    </div>
</section>