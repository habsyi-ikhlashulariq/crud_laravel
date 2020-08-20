@extends('admin/master')
@section('title','Tambah Data')
@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><h2>Tambah Data Materi</h2></h1>
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
                <h3 class="card-title">Tambah Data</h3>
              </div>
    <form role="form"action="/course" method="post">
    @csrf
        <div class="card-body">
            <div class="form-group">
            <label for="materi">Materi Kursus</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" 
            name="title" placeholder="Masukan Judul">
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