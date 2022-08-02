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

                    <li><a class="dropdown-item" href="{{ route('slide.index') }}">Kembali</a></li>

                </ul>
            </div>

            {{-- <a href="{{ route('slide.index') }}" class="btn btn-primary">Back</a> --}}

            <!-- General Form Elements -->
            <form action="{{ route('slide.update', $slide->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input name="judul_slide" id="judul_slide" type="text" class="form-control @error('judul_slide') is-invalid @enderror" placeholder="Judul Slide" value="{{ $slide->judul_slide }}">
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
                        <input name="link_slide" id="link_slide" type="text" class="form-control @error('link_slide') is-invalid @enderror" placeholder="https://google.com" value="{{ $slide->link_slide }}">
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
                        <textarea name="deskripsi_slide" id="deskripsi_slide" class="form-control @error('deskripsi_slide') is-invalid @enderror" style="height: 100px" placeholder="Deskripsi Slide" value="{{ old('deskripsi_slide' ) }}">{{ $slide->deskripsi_slide }}</textarea>
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
                        <input name="gambar_slide" id="gambar_slide" class="form-control @error('gambar_slide') is-invalid @enderror" type="file">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Gambar saat ini</label>
                    <div class="col-sm-10">
                        <img src="{{ asset('storage/'.$slide->gambar_slide) }}" alt="{{ $slide->judul_slide }}" width="100px">
                    </div>
                </div>

                <div class="row mb-5">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <div class="form-check form-switch">
                            <input type="hidden" name="status_slide" id="status_slide" value="0">
                            <input name="status_slide" id="status_slide" class="form-check-input" type="checkbox" value="1" {{ $slide->status_slide || old('status_slide', 0) === 1 ? 'checked':'' }}>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Publish</label>

                        </div>
                    </div>
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
                    <form action="{{ route('slide.destroy', $slide->id ) }}" onsubmit="return confirm('Yakin anda akan menghapus data {{ $slide->judul_slide }}?')" method="POST" class="d-inline">
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
