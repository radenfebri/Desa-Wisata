@extends('admin.layout.layout', ['menu' => 'componen', 'submenu' => 'slide'])

@section('title', 'Profil Gambar')

@section('content')
    <div class="">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Create Data @yield('title')</h5>

                <!-- General Form Elements -->
                <form action="{{ route('profile-gambar.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input name="judul" id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" placeholder="Judul Profil Gambar" value="{{ old('judul' ) }}">
                        </div>
                        @error('judul')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" style="height: 100px" placeholder="Deskripsi Gambar" value="{{ old('deskripsi' ) }}"></textarea>
                        </div>
                        @error('deskripsi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Upload Gambar</label>
                        <div class="col-sm-10">
                            <input name="profile_gambar" id="profile_gambar" class="form-control @error('profil_gambar') is-invalid @enderror" type="file" value="{{ old('profile_gambar' ) }}">
                        </div>
                    </div>

                    <div class="row mb-5">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <div class="form-check form-switch">
                                <input name="status" id="status" class="form-check-input" type="checkbox">
                                @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label class="form-check-label" for="flexSwitchCheckChecked">Unpublish / Publish</label>
                            </div>
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
