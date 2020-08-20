@extends('admin/master')
@section('title','Update Data')
@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><h2>Update Data Materi</h2></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
   <div class="content">
      <div class="container">
        <div class="row">
        <div class="col-8">
        
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Data</h3>
              </div>
    <form role="form" action="/course/{{ $course->id }}/update" method="post">
    @csrf
        <div class="card-body">
            <div class="form-group">
            <label for="kursus">Materi Kursus</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" 
            name="title" placeholder="Masukan Judul" value="{{ $course->title }}">
                @error('title') 
                <div class="invalid-feedback">
                {{ $message }} 
                </div>
                @enderror
            </div>
            <br>
            <input type="submit" value="Simpan" class="btn btn-primary">
        </div>
    </form>       
        </div>
        </div>
        </div>
    </div>
    </div>
  </div>
@endsection