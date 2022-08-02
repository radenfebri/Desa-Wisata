@extends('admin.layout.layout', ['menu' => 'componen', 'submenu' => 'slide'])

@section('title', 'Contact')

@section('content')
    <div class="">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Update Data @yield('title')</h5>

                <!-- General Form Elements -->
                <form action="{{ route('contact.update', $contacts ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi Contact</label>
                        <div class="col-sm-10">
                            <textarea name="deskripsi_contact" id="deskripsi_contact" class="form-control @error('deskripsi_contact') is-invalid @enderror" style="height: 100px" placeholder="Deskripsi Contact" value="{{ old('deskripsi_contact' ) }}">{{ $contacts->deskripsi_contact }}</textarea>
                        </div>
                        @error('deskripsi_contact')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Alamat Contact</label>
                        <div class="col-sm-10">
                            <input name="alamat_contact" id="alamat_contact" type="text" class="form-control @error('alamat_contact') is-invalid @enderror" placeholder="Nama Kategori" value="{{ $contacts->alamat_contact }}">
                        </div>
                        @error('alamat_contact')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Email Contact</label>
                        <div class="col-sm-10">
                            <input name="email_contact" id="email_contact" type="text" class="form-control @error('email_contact') is-invalid @enderror" placeholder="Nama Kategori" value="{{ $contacts->email_contact }}">
                        </div>
                        @error('email_contact')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Call Contact</label>
                        <div class="col-sm-10">
                            <input name="call_contact" id="call_contact" type="text" class="form-control @error('call_contact') is-invalid @enderror" placeholder="Nama Kategori" value="{{ $contacts->call_contact }}">
                        </div>
                        @error('call_contact')
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
