@extends('admin.layout.layout', ['menu' => 'componen', 'submenu' => 'slide'])

@section('title', 'Team')

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

                <li><a class="dropdown-item" href="{{ route('team.create') }}">Tambah</a></li>
            </ul>
        </div>

        <div class="card-body">
            <h5 class="card-title">Data <span>| @yield('title')</span></h5>

            <table class="table table-borderless datatable">
                <thead>
                    <tr>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $item)
                    <tr>
                        <td>
                            @if ($item->foto_team)
                            <img src="{{ asset('storage/'. $item->foto_team ) }}" alt="{{ $item->nama_team }}" width="100px">
                            @else
                            <img src="{{ asset('storage/'. $item->foto_team ) }}" alt="{{ $item->nama_team }}" width="100px">
                            @endif
                        </td>
                        <td><a href="{{ route('team.edit', encrypt($item->id) ) }}" class="text-primary">{{ $item->nama_team }}</a></td>
                        <td>{{ $item->jabatan_team }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>
</div>
<!-- End Recent Sales -->
@endsection
