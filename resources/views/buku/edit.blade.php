@extends('layout.main')

@section('content')
<head>
    <title>Edit Database</title>
</head>
<body>
    <div class="container">
        @if(session('sukses'))

        <div class="alert alert-success" role="alert">
            {{ session('sukses') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endif
            <h1>Edit Data Siswa</h1>
            <!-- Button trigger modal -->

<div class="row">
    <form action="/buku/{{ $buku->id }}/update" method="POST">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
            <input name="judul_buku" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Judul Buku" value="{{ $buku->judul_buku }}" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlSelect1">Gendre</label>
            <select name="jenis_buku" class="form-control" id="exampleFormControlSelect1">
            <option value="Drama" @if($buku->jenis_buku == 'Drama') selected @endif >Drama</option>
            <option value="Criminal"@if($buku->jenis_buku == 'Criminal') selected @endif >Criminal</option>
            <option value="Fantasy" @if($buku->jenis_buku == 'Fantasy') selected @endif >Fantasy</option>
            <option value="Adventure"@if($buku->jenis_buku == 'Adventure') selected @endif >Adventure</option>
            <option value="Gore"@if($buku->jenis_buku == 'Gore') selected @endif >Gore</option>

            </select>
            </div>

        {{-- <div class="mb-3">
            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
            <option value="Laki-Laki" @if($siswa->jenis_kelamin == 'Laki-Laki') selected @endif >Laki-Laki</option>
            <option value="Perempuan"@if($siswa->jenis_kelamin == 'Perempuan') selected @endif >Perempuan</option>
            </select>
        </div> --}}

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Penerbit</label>
            <input name="penerbit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Penerbit" value="{{ $buku->penerbit }}" required>
        </div>

        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Alamat Penerbit</label>
        <input name="alamat_penerbit" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
        placeholder="Alamat Penerbit" value="{{ $buku->alamat_penerbit }}" required>
        </div>

        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Pengarang</label>
        <input name="pengarang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
        value="{{ $buku->pengarang }}" required>
        </div>
                    <button type="submit" class="btn btn-warning"><strong>Update</strong></button>
        </div>

    </form>
</div>
</body>
@endsection

