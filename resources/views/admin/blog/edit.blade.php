@extends('admin.layout.layout', ['menu' => 'componen', 'submenu' => 'blog'])

@section('title', 'Blog')

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

                    <li><a class="dropdown-item" href="{{ route('blog.index') }}">Kembali</a></li>

                </ul>
            </div>

            <!-- General Form Elements -->
            <form action="{{ route('blog.update', $blog->id ) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input name="judul" id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" placeholder="Judul Blog" value="{{ $blog->judul }}">
                    </div>
                    @error('judul')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="kategori_id" id="kategori_id" aria-label="Default select example" required>
                            <option disabled selected>pilih kategori</option>
                            @foreach ($kategoris as $item)
                            @if ($item->id == $blog->kategori_id)
                                <option value="{{ $item->id }}" selected>{{ $item->nama_kategori }}</option>
                            @else
                                <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                            @endif
                            @endforeach
                          </select>
                    </div>
                    @error('kategori_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>



                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Upload Gambar</label>
                    <div class="col-sm-10">
                        <input name="gambar_artikel" id="gambar_artikel" class="form-control @error('gambar_artikel') is-invalid @enderror" type="file" value="{{ old('gambar_artikel' ) }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Gambar saat ini</label>
                    <div class="col-sm-10">
                        <img src="{{ asset('storage/'.$blog->gambar_artikel) }}" alt="{{ $blog->judul }}" width="100px">
                    </div>
                </div>

                <div class="row mb-5">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <div class="form-check form-switch">
                            <input type="hidden" name="status" id="status" value="0">
                            <input name="status" id="status" class="form-check-input" type="checkbox" value="1" {{ $blog->status || old('status', 0) === 1 ? 'checked':'' }}>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Publish</label>

                        </div>
                    </div>
                </div>

                <div class="row mb-5">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea name="deskripsi" id="summernote" class="form-control @error('deskripsi') is-invalid @enderror">{{ $blog->deskripsi }}</textarea>
                    </div>
                    @error('deskripsi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <br>


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
                    <form action="{{ route('blog.destroy', $blog->id ) }}" onsubmit="return confirm('Yakin anda akan menghapus data {{ $blog->judul }}?')" method="POST" class="d-inline">
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
