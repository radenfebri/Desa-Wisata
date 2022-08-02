@extends('admin.layout.layout', ['menu' => 'componen', 'submenu' => 'slide'])

@section('title', 'Slide')

@section('content')
    <div class="">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Create Data @yield('title')</h5>

                <!-- General Form Elements -->
                <form action="{{ route('slide.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input name="judul_slide" id="judul_slide" type="text" class="form-control @error('judul_slide') is-invalid @enderror" placeholder="Judul Slide" value="{{ old('judul_slide' ) }}">
                        </div>
                        @error('judul_slide')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Link</label>
                        <div class="col-sm-10">
                            <input name="link_slide" id="link_slide" type="text" class="form-control @error('link_slide') is-invalid @enderror" placeholder="https://google.com" value="{{ old('link_slide' ) }}">
                        </div>
                        @error('link_slide')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea name="deskripsi_slide" id="deskripsi_slide" class="form-control @error('deskripsi_slide') is-invalid @enderror" style="height: 100px" placeholder="Deskripsi Slide" value="{{ old('deskripsi_slide' ) }}"></textarea>
                        </div>
                        @error('deskripsi_slide')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Upload Gambar</label>
                        <div class="col-sm-10">
                            <input name="gambar_slide" id="gambar_slide" class="form-control @error('gambar_slide') is-invalid @enderror" type="file" value="{{ old('gambar_slide' ) }}">
                        </div>
                    </div>

                    <div class="row mb-5">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <div class="form-check form-switch">
                                <input name="status_slide" id="status_slide" class="form-check-input" type="checkbox">
                                @error('status_slide')
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
