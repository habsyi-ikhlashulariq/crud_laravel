@extends('admin.master')
@section('title', 'Admin')
@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Profile</h1>
          </div><!-- /.col -->
    
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
   <div class="content">
      <div class="container">
        <div class="row">
        <div class="col-8">
        <h1>Selamat Datang</h1>
    <p>Perkenalkan nama saya {{$nama}} <hr>    
    Materi Belajar :<br>
    <ul>
        @foreach ($materi as $materi)
        <li>{{ $materi }}</li>
        @endforeach
    </ul> </p>
        </div>
        </div>
    </div>
    </div>
  </div>
  @endsection


