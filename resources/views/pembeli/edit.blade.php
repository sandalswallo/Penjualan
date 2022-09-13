@extends('layout.app')

@section('title')
    pembeli
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Pembeli</h5>
        </div>
    </div>

        <div class="card-body">
            <form action="{{route('pembeli.update', $pembeli->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" value="{{$pembeli->nama}}" 
                            class="text form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                        <div class="text-danger">
                            {{ $message}}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="text" name="telepon" id="telepon" value="{{$pembeli->telepon}}"
                            class="text form-control @error('telepon') is-invalid @enderror">
                        @error('telepon')
                        <div class="text-danger">
                            {{ $message}}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" value="{{$pembeli->alamat}}" 
                            class="text form-control @error('alamat') is-invalid @enderror">
                        @error('alamat')
                        <div class="text-danger">
                            {{ $message}}
                        </div>
                    @enderror
                </div>

            

                
                <div class="modal-footer">
                    <button class="btn btn-warning" type="submit"><i class="fa fa-save"></i>
                    Update</button>
                </div>
            </form>
        </div>
     
@endsection