@extends('layout.app')

@section('title')
    pembelian
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Pembelian</h5>
        </div>
    </div>

        <div class="card-body">
            <form action="{{route('pembelian.store')}}" method="POST">
                @csrf
        

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="barang_id" >ID Barang </label>
                            <input type="number" name ="barang_id" class="form-control" value="{{$pembelian->barang_id}}" @error('barang_id') is invalid @enderror>
                    @error('barang_id') 
                    <div class="text-danger">
                     {{$message}}
                    </div>
                 @enderror
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="tanggal" >tanggal Pembelian</label>
                            <input type="text" name ="tanggal" class="form-control" value="{{$pembelian->tanggal}}" @error('tanggal') is invalid @enderror>
                               @error('tanggal') 
                               <div class="text-danger">
                                {{$message}}
                               </div>
                            @enderror
                        </div>
                    </div>
                    
                   
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="jumlah" >Jumlah</label>
                                <input type="number" name ="jumlah" class="form-control" value="{{$pembelian->jumlah}}" @error('jumlah') is invalid @enderror>
                        @error('jumlah') 
                        <div class="text-danger">
                         {{$message}}
                        </div>
                     @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="harga" >Harga</label>
                    <input type="text" name ="harga" class="form-control" value="{{$pembelian->harga}}" @error('harga') is invalid @enderror>
                    @error('harga') 
                    <div class="text-danger">
                     {{$message}}
                    </div>
                 @enderror
                    </div>
                  </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-warning" type="submit"><i class="fa fa-save"></i>
                    Simpan</button>
                </div>
            </form>
        </div>
     
@endsection