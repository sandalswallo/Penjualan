@extends('layout.app')

@section('title')
    Suplier
@endsection

@section('content')
<div class="card mt-3">
  <div class="card-header">
    <div class="card-title">
      <h5><i class="fa-solid fa-circle-user"></i> Data Suplier</h5>

      <a class="btn btn-success btn-sm float-end"href="{{route('suplier.create')}}"><i class="fa fa-plus"></i></a>
    </div>
  </div>


  <div class="card-body">
    <table class="table table-striped ">
      <thead>
        <tr>
          <th style="width: 5%">No.</th>
          <th>Nama</th>
          <th>Telepon</th>
          <th>Alamat</th>
          <th style="width: 10%">Aksi</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($suplier as $item)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$item->nama}}</td>
          <td>{{$item->telepon}}</td>
          <td>{{$item->alamat}}</td>
          <td>
            <a href="/suplier/{{$item->id}}/edit" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i> </a>
            <a href="/suplier/{{$item->id}}/hapus" class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash"></i> </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       yyy
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
@endsection