@extends('admin.master')

@section('title', 'Admin')

@section('container')
  
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Dashboard</h1>
          </div><!-- /.col -->
    
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   <!-- Main content -->
   <div class="content">
      <div class="container">
        <div class="row">
        <div class="col-8">
            @if(session('message'))
                {!! session('message') !!}
            @endif
            <h5>Selamat Datang, Ini Halaman Home</h5>
        </div>
        </div>
    </div>
    </div>
  </div>
          
  @endsection


