@extends('layout.app')

@section('title')
    suplier
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Suplier</h5>
        </div>
    </div>

        <div class="card-body">
            <form action="{{route('suplier.update', $suplier->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="nama" >Edit Suplier</label>
                            <input type="text" name ="nama" class="form-control" value="{{$suplier->nama}}" @error('nama') is invalid @enderror>
                               @error('nama') 
                               <div class="text-danger">
                                {{$message}}
                               </div>
                            @enderror
                        </div>
                    </div>
                   
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="nama" >Telepon</label>
                    <input type="text" name ="telepon" class="form-control" value="{{$suplier->telepon}}" @error('telepon') is invalid @enderror>
                    @error('telepon') 
                    <div class="text-danger">
                     {{$message}}
                    </div>
                 @enderror
                    </div>
                  </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="alamat" >Alamat</label>
                            <textarea type="text" name ="alamat" class="form-control" value="{{$suplier->alamat}}" @error('alamat') is invalid @enderror></textarea>
                    @error('stok') 
                    <div class="text-danger">
                     {{$message}}
                    </div>
                 @enderror
                        </div>
                    </div>
                   
                </div>
               
                <div class="modal-footer">
                    <button class="btn btn-warning" type="submit"><i class="fa fa-save"></i>
                    Update</button>
                </div>
            </form>
        </div>
     
@endsection