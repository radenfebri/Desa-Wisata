@extends('admin.layout.layout', ['menu' => 'componen', 'submenu' => 'kategori'])

@section('title', 'Kategori')

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

                <li><a class="dropdown-item" href="{{ route('kategori.create') }}">Tambah</a></li>
            </ul>
        </div>

        <div class="card-body">
            <h5 class="card-title">Data <span>| @yield('title')</span></h5>

            <table class="table table-borderless datatable">
                <thead>
                    <tr>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Slug</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategoris as $item)
                    <tr>
                        <td><a href="{{ route('kategori.edit', encrypt($item->id) ) }}" class="text-primary">{{ $item->nama_kategori }}</a></td>
                        <td>{{ $item->slug }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>
</div>
<!-- End Recent Sales -->
@endsection
