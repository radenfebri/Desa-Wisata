@extends('admin.layout.layout', ['menu' => 'componen', 'submenu' => 'blog'])

@section('title', 'Blog')

@section('content')
<div class="">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create Data @yield('title')</h5>

            <!-- General Form Elements -->
            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input name="judul" id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" placeholder="Judul Blog" value="{{ old('judul' ) }}">
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
                            @if (old('kategori_id') == $item->id)
                                <option value="{{ $item->id }}" selected>{{ $item->nama_kategori }}</option>
                            @else
                                <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                            @endif
                            @endforeach
                          </select>
                        {{-- <input name="link_blog" id="link_blog" type="text" class="form-control @error('link_blog') is-invalid @enderror" placeholder="Link blog" value="{{ old('link_blog' ) }}"> --}}
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

                <div class="row mb-5">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea name="deskripsi" id="summernote" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi' ) }}</textarea>
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
