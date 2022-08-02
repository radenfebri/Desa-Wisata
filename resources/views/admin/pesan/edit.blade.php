@extends('admin.layout.layout', ['menu' => 'componen', 'submenu' => 'slide'])

@section('title', 'Pesan')

@section('content')
<div class="">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Data @yield('title')</h5>

            <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                        <h6>ACTION</h6>
                    </li>

                    <li><a class="dropdown-item" href="{{ route('pesan.index') }}">Kembali</a></li>

                </ul>
            </div>

            {{-- <a href="{{ route('slide.index') }}" class="btn btn-primary">Back</a> --}}

            <!-- General Form Elements -->
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Pengirim</label>
                    <div class="col-sm-10">
                        <input name="nama_kategori" id="nama_kategori" disabled type="text" class="form-control @error('nama_kategori') is-invalid @enderror" placeholder="Nama Kategri" readonly value="{{ $pesan->name }}">
                    </div>
                    @error('nama_kategori')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                        <input name="no_hp" id="no_hp" disabled type="text" class="form-control @error('no_hp') is-invalid @enderror" placeholder="Nama Kategri" readonly value="{{ $pesan->no_hp }}">
                    </div>
                    @error('no_hp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Subjek</label>
                    <div class="col-sm-10">
                        <input name="subjek" id="subjek" disabled type="text" class="form-control @error('subjek') is-invalid @enderror" placeholder="Nama Kategri" readonly value="{{ $pesan->subjek }}">
                    </div>
                    @error('subjek')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi Profile II</label>
                    <div class="col-sm-10">
                        <textarea name="pesan" id="pesan" class="form-control @error('pesan') is-invalid @enderror" style="height: 100px" placeholder="Pesan" readonly disabled value="{{ old('pesan' ) }}">{{ $pesan->pesan }}</textarea>
                    </div>
                    @error('pesan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

            </form>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Jawab Pesan</label>
                <div class="col-sm-10">
                    <a class="btn btn-success" type="button" href="">Jawab Pesan</a>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Delete Data</label>
                <div class="col-sm-10">
                    <form action="{{ route('pesan.destroy', $pesan->id ) }}" onsubmit="return confirm('Yakin anda akan menghapus data {{ $pesan->name }}?')" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete Data</button>
                    </form>
                </div>
            </div>
            <!-- End General Form Elements -->

        </div>
    </div>

</div>

@endsection
