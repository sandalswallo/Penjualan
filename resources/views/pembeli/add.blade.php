@extends('layout.app')

@section('title')
    pembeli
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Data Pembeli</h5>
        </div>
    </div>

        <div class="card-body">
            <form action="{{route('pembeli.store')}}" method="POST">
                @csrf
               

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="nama" >Nama Pembeli</label>
                            <input type="text" name ="nama" class="form-control" value="{{old('nama')}}" @error('nama') is invalid @enderror>
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
                    <input type="text" name ="telepon" class="form-control" value="{{old('telepon')}}" @error('telepon') is invalid @enderror>
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
                            <textarea type="text" name ="alamat" class="form-control" value="{{old('alamat')}}" @error('alamat') is invalid @enderror></textarea>
                    @error('alamat') 
                    <div class="text-danger">
                     {{$message}}
                    </div>
                 @enderror
                        </div>
                    </div>
                   
              
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit"><i class="fa fa-save"></i>
                    Simpan</button>
                </div>
            </form>
        </div>
     
@endsection