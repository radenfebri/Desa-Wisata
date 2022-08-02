@extends('admin.layout.layout', ['menu' => 'componen', 'submenu' => 'kategori'])

@section('title', 'Pesan')

@section('content')
<!-- Recent Sales -->
<div class="col-12">
    <div class="card recent-sales overflow-auto">

        {{-- <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                    <h6>ACTION</h6>
                </li>

                <li><a class="dropdown-item" href="">Tambah</a></li>
            </ul>
        </div> --}}

        <div class="card-body">
            <h5 class="card-title">Data <span>| @yield('title')</span></h5>

            <table class="table table-borderless datatable">
                <thead>
                    <tr>
                        <th scope="col">Nama Pengirim</th>
                        <th scope="col">Isi Pesan</th>
                        <th scope="col">Subjek</th>
                        <th scope="col">No HP</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesans as $item)
                    <tr>
                        <td><a href="{{ route('pesan.edit', encrypt($item->id) ) }}" class="text-primary">{{ $item->name }}</a></td>
                        <td>{{ $item->pesan }}</td>
                        <td>{{ $item->subjek }}</td>
                        <td>{{ $item->no_hp }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>
</div>
<!-- End Recent Sales -->
@endsection
