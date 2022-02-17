@extends('layout.main')

@section('content')
<body>
        @if(session('sukses'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('sukses') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endif
        <button type="button" class="btn btn-primary float-right btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <strong>Tambah Data Buku</strong>
        </button>
            <h1>Data Perpustakaan</h1>
            <!-- Button trigger modal -->

        <div class="row">
            <table class="table table-hover">
                <tr>
                    <th>#</th>
                    <th>Judul Buku</th>
                    <th>Gendre</th>
                    <th>Penerbit</th>
                    <th>Alamat Penerbit</th>
                    <th>Pengarang</th>
                    <th>Aksi</th>
                    <th></th>
                </tr>
                @foreach($databuku as $buku)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $buku->judul_buku }}</td>
                    <td>{{ $buku->jenis_buku }}</td>
                    <td>{{ $buku->penerbit }}</td>
                    <td>{{ $buku->alamat_penerbit }}</td>
                    <td>{{ $buku->pengarang }}</td>
                    <td><a href="/buku/{{ $buku->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                    <td><a href="/buku/{{ $buku->id}}/delete" class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin Mau Hapus?')">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Silakan isi keterangannya</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
    <div class="modal-body">
    <form action="/buku/create" method="POST">
        {{ csrf_field() }}
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
    <input name="judul_buku" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    placeholder="Judul Buku" required>
    </div>

    {{-- <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jenis Buku</label>
    <input name="jenis_buku" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    placeholder="Jenis Buku">
    </div> --}}

    <div class="mb-3">
    <label for="exampleFormControlSelect1">Gendre</label>
    <select name="jenis_buku" class="form-control" id="exampleFormControlSelect1">
    <option value="Drama">Drama</option>
    <option value="Criminal">Criminal</option>
    <option value="Fantasy">Fantasy</option>
    <option value="Gore">Gore</option>
    <option value="Adventure">Adventure</option>
    </select>
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Penerbit</label>
    <input name="penerbit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    placeholder="Penerbit" required>
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat Penerbit</label>
    <input name="alamat_penerbit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    placeholder="Alamat Penerbit" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Pengarang</label>
        <input name="pengarang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
        placeholder="Pengarang" required>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
    </div>
</div>
@endsection
