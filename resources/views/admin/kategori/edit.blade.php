@extends('admin.layout.layout', ['menu' => 'componen', 'submenu' => 'slide'])

@section('title', 'Slide')

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

                    <li><a class="dropdown-item" href="{{ route('kategori.index') }}">Kembali</a></li>

                </ul>
            </div>

            {{-- <a href="{{ route('slide.index') }}" class="btn btn-primary">Back</a> --}}

            <!-- General Form Elements -->
            <form action="{{ route('kategori.update', $kategori->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Kategori</label>
                    <div class="col-sm-10">
                        <input name="nama_kategori" id="nama_kategori" type="text" class="form-control @error('nama_kategori') is-invalid @enderror" placeholder="Nama Kategri" value="{{ $kategori->nama_kategori }}">
                    </div>
                    @error('nama_kategori')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Submit Button</label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
                </div>

            </form>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Delete Data</label>
                <div class="col-sm-10">
                    <form action="{{ route('kategori.destroy', $kategori->id ) }}" onsubmit="return confirm('Yakin anda akan menghapus data {{ $kategori->nama_kategori }}?')" method="POST" class="d-inline">
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
