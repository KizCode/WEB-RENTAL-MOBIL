@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                @include('layouts/_flash')
                <table>
                    <td>
                        <h6 class="m-0 font-weight-bold text-primary">Data Mobil</h6>
                    </td>
        
                        <a href="{{ route('mobil.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                        
                        
                        
                    </div>
                </table>
                
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Merk</th>
                                <th>Nama Mobil</th>
                                <th>Foto</th>
                                <th>Stock</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp @foreach ($mobil as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->merk }}</td>
                                <td>{{ $data->type }}</td>
                                <td>
                                    <img src="{{ $data->image() }}" style="width: 150px; height: 150px;">
                                </td>
                                <td>{{ $data->stock }}</td>
                                <td>Rp. {{ number_format($data->harga,0,',','.') }}/hari</td>
                                <td>
                                    <form action="{{ route('mobil.destroy', $data->id) }}" method="post">
                                        @csrf @method('delete')
                                        <a href="{{ route('mobil.edit', $data->id) }}" class="btn btn-sm btn-outline-success">
                                                Edit
                                            </a> |
                                        <a href="{{ route('mobil.show', $data->id) }}" class="btn btn-sm btn-outline-warning">
                                                Show
                                            </a> |
                                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete
                                            </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection