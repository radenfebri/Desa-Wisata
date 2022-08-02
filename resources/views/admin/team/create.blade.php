@extends('admin.layout.layout', ['menu' => 'componen', 'submenu' => 'slide'])

@section('title', 'Team')

@section('content')
    <div class="">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Create Data @yield('title')</h5>

                <!-- General Form Elements -->
                <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Team</label>
                        <div class="col-sm-10">
                            <input name="nama_team" id="nama_team" type="text" class="form-control @error('nama_team') is-invalid @enderror" placeholder="Nama Team" value="{{ old('nama_team' ) }}">
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
                            <input name="jabatan_team" id="jabatan_team" type="text" class="form-control @error('jabatan_team') is-invalid @enderror" placeholder="Jabatan Team" value="{{ old('jabatan_team' ) }}">
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
                            <input name="facebook_team" id="facebook_team" type="text" class="form-control @error('facebook_team') is-invalid @enderror" placeholder="https://facebook.com/username" value="{{ old('facebook_team' ) }}">
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
                            <input name="instagram_team" id="instagram_team" type="text" class="form-control @error('instagram_team') is-invalid @enderror" placeholder="https://instagram.com/username" value="{{ old('instagram_team' ) }}">
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
                        <label class="col-sm-2 col-form-label">Submit Button</label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                            <button type="reset" class="btn btn-danger">Reset Data</button>
                        </div>
                    </div>

                </form>
                <!-- End General Form Elements -->

            </div>
        </div>

    </div>

@endsection
