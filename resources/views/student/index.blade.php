@extends('admin.master')
@section('title', 'Siswa')
@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><h2>Data Siswa</h2> </h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
   <div class="content">
      <div class="container">
        <div class="row">
        <div class="col-12">
        
            @if(session('message'))
                {!! session('message') !!}
            @endif
            <livewire:student-create></livewire:student-create>
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Siswa</h3>
              </div>

                <livewire:student-index></livewire:student-index>
                
    </div>
        </div>
        </div>
    </div>
    </div>
  </div>
  @endsection


