@extends('admin.layout.layout', ['menu' => '', 'submenu' => ''])

@section('title', 'Profile')

@section('content')


<div class="">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Update Data @yield('title')</h5>

            <!-- General Form Elements -->
            <form action="{{ route('profile.update', $profile ) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Deskripsi Profile I</label>
                    <div class="col-sm-10">
                        <input name="deskripsi_profil_1" id="deskripsi_profil_1" type="text" class="form-control @error('deskripsi_profil_1') is-invalid @enderror" placeholder="Deskripsi Profil I" value="{{ $profile->deskripsi_profil_1 }}">
                    </div>
                    @error('deskripsi_profil_1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi Profile II</label>
                    <div class="col-sm-10">
                        <textarea name="deskripsi_profil_2" id="deskripsi_profil_2" class="form-control @error('deskripsi_profil') is-invalid @enderror" style="height: 100px" placeholder="Deskripsi Profil II" value="{{ old('deskripsi_profil_2' ) }}">{{ $profile->deskripsi_profil_2 }}</textarea>
                    </div>
                    @error('deskripsi_profil_2')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Upload Gambar</label>
                    <div class="col-sm-10">
                        <input name="gambar_profil" id="gambar_profil" class="form-control @error('gambar_profil') is-invalid @enderror" type="file" value="{{ old('gambar_profil' ) }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Gambar saat ini</label>
                    <div class="col-sm-10">
                        <img src="{{ asset('storage/'. $profile->gambar_profil) }}" alt="{{ $profile->deskripsi_profile_1 }}" width="100px">
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

        </div>
    </div>

</div>



@endsection
