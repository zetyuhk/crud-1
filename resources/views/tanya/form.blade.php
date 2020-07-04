@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3 mr-3" >
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan" method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="judul">
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" id="isi" name="isi" placeholder="isi">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_dibuat">Tanggal Dibuat</label>
                    <input type="timestamp" class="form-control" id="tanggal_dibuat" name="tanggal_dibuat" placeholder="tanggal_dibuat">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_diperbaharui">Tanggal Diperbarui</label>
                    <input type="timestamp" class="form-control" id="tanggal_diperbaharui" name="tanggal_diperbaharui" placeholder="tanggal_diperbaharui">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
    </div>

@endsection
