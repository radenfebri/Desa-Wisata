@extends('admin.layout.layout', ['menu' => 'componen', 'submenu' => 'slide'])

@section('title', 'Team')

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

                        <li><a class="dropdown-item" href="{{ route('team.index') }}">Kembali</a></li>

                    </ul>
                </div>

                <!-- General Form Elements -->
                <form action="{{ route('team.update', $team->id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Team</label>
                        <div class="col-sm-10">
                            <input name="nama_team" id="nama_team" type="text" class="form-control @error('nama_team') is-invalid @enderror" placeholder="Nama Team" value="{{ $team->nama_team }}">
                        </div>
                        @error('nama_team')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Jabatan Team</label>
                        <div class="col-sm-10">
                            <input name="jabatan_team" id="jabatan_team" type="text" class="form-control @error('jabatan_team') is-invalid @enderror" placeholder="Jabatan Team" value="{{ $team->jabatan_team }}">
                        </div>
                        @error('jabatan_team')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Link Facebook</label>
                        <div class="col-sm-10">
                            <input name="facebook_team" id="facebook_team" type="text" class="form-control @error('facebook_team') is-invalid @enderror" placeholder="https://facebook.com/username" value="{{ $team->facebook_team }}">
                        </div>
                        @error('facebook_team')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>



                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Link Instagram</label>
                        <div class="col-sm-10">
                            <input name="instagram_team" id="instagram_team" type="text" class="form-control @error('instagram_team') is-invalid @enderror" placeholder="https://instagram.com/username" value="{{ $team->instagram_team }}">
                        </div>
                        @error('instagram_team')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Upload Gambar</label>
                        <div class="col-sm-10">
                            <input name="foto_team" id="foto_team" class="form-control @error('foto_team') is-invalid @enderror" type="file" value="{{ old('foto_team' ) }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Gambar saat ini</label>
                        <div class="col-sm-10">
                            <img src="{{ asset('storage/'.$team->foto_team) }}" alt="{{ $team->nama_team }}" width="100px">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Submit Button</label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Data</button>
                        </div>
                    </div>

                </form>
                <!-- End General Form Elements -->

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Delete Data</label>
                    <div class="col-sm-10">
                        <form action="{{ route('team.destroy', $team->id ) }}" onsubmit="return confirm('Yakin anda akan menghapus data {{ $team->nama_team }}?')" method="POST" class="d-inline">
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
