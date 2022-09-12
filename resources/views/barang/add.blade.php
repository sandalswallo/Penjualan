@extends('layout.app')

@section('title')
    barang
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Data Barang</h5>
        </div>
    </div>

        <div class="card-body">
            <form action="{{route('barang.store')}}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="nama" >Nama Barang</label>
                            <input type="text" name ="nama" class="form-control" value="{{old('nama')}}" @error('nama') is invalid @enderror>
                               @error('nama') 
                               <div class="text-danger">
                                {{$massage}}
                               </div>
                            @enderror
                        </div>
                    </div>
                   
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="nama" >Harga</label>
                    <input type="text" name ="harga" class="form-control" value="{{old('harga')}}" @error('harga') is invalid @enderror>
                    @error('harga') 
                    <div class="text-danger">
                     {{$massage}}
                    </div>
                 @enderror
                    </div>
                  </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="stock" >Stock</label>
                            <input type="number" name ="stok" class="form-control" value="{{old('stok')}}" @error('stok') is invalid @enderror>
                    @error('stok') 
                    <div class="text-danger">
                     {{$massage}}
                    </div>
                 @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                        <label for="suplier">Suplier</label>
                        <select name="suplier_id" id="suplier_id" class="form-control">
                            <option selected>Pilih...</option>
                            @foreach ($suplier as $s)
                            <option value="{{$s->id}}">{{$s->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="Kategori">Kategori</label>
                        <select name="kategori_id" id="kategori_id" class="form-control">
                            <option selected>Pilih...</option>
                            @foreach ($kategori as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit"><i class="fa fa-save"></i>
                    Simpan</button>
                </div>
            </form>
        </div>
     
@endsection