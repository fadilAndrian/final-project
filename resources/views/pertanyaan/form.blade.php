@extends('layouts.app')

@section('content')
<div class="container">
<div class="wrapper">
  @include('layouts.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<div class= "ml-3 mt-3">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan/store" method="POST">
              @csrf
                <div class="card-body">
                 <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" id="isi" name="isi">
                  </div>
                  <div class="form-group">
                    <label for="tag">Tag</label>
                    <input type="text" class="form-control" id="tag" name="tag">
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