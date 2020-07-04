@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3 mr-3">
        <h1>List Pertanyaan</h1>
        <a href="/pertanyaan/create" class="btn btn-primary mb-2">
            Buat Pertanyaan Baru
        </a>

        <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Judul</th>
                      <th>Isi Pertanyaan</th>
                      <th>Tanggal Dibuat</th>
                      <th>Tanggal Diperbarui</th>
                      <th style="width: 40px">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pertanyaan as $key => $tanya)

                        <tr>
                            <td> {{$key+1}} </td>
                            <td> {{$tanya->judul}} </td>
                            <td> {{$tanya->isi}} </td>
                            <td> {{$tanya->tanggal_dibuat}} </td>
                            <td> {{$tanya->tanggal_diperbaharui}} </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info">show</a>
                            </td>
                        </tr>

                    @endforeach
                  </tbody>
                </table>
    </div>

@endsection
