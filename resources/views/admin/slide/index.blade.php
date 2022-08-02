@extends('admin.layout.layout', ['menu' => 'slide-profile', 'submenu' => 'slidebar'])

@section('title', 'Slide')

@section('content')
<!-- Recent Sales -->
<div class="col-12">
    <div class="card recent-sales overflow-auto">

        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                    <h6>ACTION</h6>
                </li>

                <li><a class="dropdown-item" href="{{ route('slide.create') }}">Tambah</a></li>
            </ul>
        </div>

        <div class="card-body">
            <h5 class="card-title">Data <span>| @yield('title')</span></h5>

            <table class="table table-borderless datatable">
                <thead>
                    <tr>
                        <th scope="col">Gambar</th>
                        <th scope="col">Title</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Link</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($slides as $item)
                    <tr>
                        <td>
                            @if ($item->gambar_slide)
                            <img src="{{ asset('storage/'. $item->gambar_slide ) }}" alt="{{ $item->judul_slide }}" width="100px">
                            @else
                            <img src="{{ asset('storage/'. $item->gambar_slide ) }}" alt="{{ $item->judul_slide }}" width="100px">
                            @endif
                        </td>
                        <td><a href="{{ route('slide.edit', encrypt($item->id) ) }}" class="text-primary">{{ $item->judul_slide }}</a></td>
                        <td>{{\Illuminate\Support\Str::words($item->deskripsi_slide, 5,'....') }}</td>
                        <td>{{ $item->link_slide }}</td>
                        <td>
                            @if ($item->status_slide == 1)
                            <span class="badge bg-success">Publish</span>
                            @else
                            <span class="badge bg-danger">Unpublish</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>
</div>
<!-- End Recent Sales -->
@endsection
