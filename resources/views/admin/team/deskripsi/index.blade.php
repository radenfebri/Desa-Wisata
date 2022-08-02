@extends('admin.layout.layout', ['menu' => 'componen', 'submenu' => 'slide'])

@section('title', 'Deskripsi Team')

@section('content')
    <div class="">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Update Data @yield('title')</h5>

                <!-- General Form Elements -->
                <form action="{{ route('deskripsi-team.update', $deskripsi_team ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi Team</label>
                        <div class="col-sm-10">
                            <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" style="height: 100px" placeholder="Deskripsi Slide" value="{{ old('deskripsi' ) }}">{{ $deskripsi_team  ->deskripsi }}</textarea>
                        </div>
                        @error('deskripsi')
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
                <!-- End General Form Elements -->

            </div>
        </div>

    </div>

@endsection
