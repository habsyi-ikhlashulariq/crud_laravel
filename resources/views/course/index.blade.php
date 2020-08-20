@extends('admin.master')
@section('title', 'Course')
@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><h2>Materi kursus yang saya ambil :</h2> </h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
   <div class="content">
      <div class="container">
        <div class="row">
        <div class="col-12">
        <a href="/course/create" class="btn btn-primary my-3">Tambah Materi</a>
            @if(session('message'))
                {!! session('message') !!}
            @endif
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Materi Kursus</h3>
              </div>
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Opsi</th>
            </tr>
            @foreach ($course as $no => $data)
            <tr>
                <td>{{ $course->firstItem()+$no }}</td>
                <td>{{ $data->title }}</td>
                <td>
                    <a href="/course/{{ $data->id }}/update">Update</a> || 
                    <a href="/course/{{ $data->id }}/delete"onclick="return 
                    confirm('Yakin Mau Di Hapus')">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
        {{ $course->links() }}
    </div>
        </div>
        </div>
    </div>
    </div>
  </div>
  @endsection


