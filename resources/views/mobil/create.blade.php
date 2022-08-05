@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
               
                <div class="card">
                    <div class="card-header">
                        Data Mobil
                    </div>
                    @include('layouts/_flash')
                    <div class="card-body">
                        <form action="{{ route('mobil.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Merk</label>
                                <input type="text" class="form-control  @error('merk') is-invalid @enderror"
                                    name="merk">
                                @error('merk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Type</label>
                                <input type="text" class="form-control  @error('type') is-invalid @enderror"
                                    name="type">
                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           <div class="mb-3">
                                <label class="form-label">Foto Mobil</label>
                                <input type="file" class="form-control  @error('foto') is-invalid @enderror"
                                    name="foto">
                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Stock</label>
                                <input type="number" class="form-control  @error('stock') is-invalid @enderror"
                                    name="stock">
                                @error('stock')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <input type="number" class="form-control  @error('harga') is-invalid @enderror"
                                    name="harga">
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection