@extends('layouts.app')

@section('content')
<div class="container">
<div class="wrapper">
  @include('layouts.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    

    <!-- Main content -->
    <section class="">
      <div class="">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <div class="row mb-4">
                  <div class="col-sm-6 my-auto">
                    <h3>List Pertanyaan</h3>            
                  </div>
                  <div class="col-sm-6 d-flex flex-row-reverse">
                    <a href="/pertanyaan/create" class="btn btn-primary">
                      Buat Pertanyaan
                    </a>
                  </div>                  
                </div>
                <div class="row">
                  <div class="col-sm-9 my-auto">
                    <h3 class="card-title">0 questions</h3>            
                  </div>
                  <div class="btn-group col-sm-3 ">
                    <button type="button" class="btn btn-default">Newest</button>
                    <button type="button" class="btn btn-default">Votes</button>
                  </div>
                </div>
              </div>   
              @foreach($pertanyaan as $key => $pertanyaan)
              <div class="card-body d-flex">
                <div class="col-1 my-auto">
                  <h4 class="mx-auto">0</h4>
                  <div class="row mx-auto">                    
                    <p style="font-size: 12px;">vote</p>
                  </div>
                  <h4>0</h4>
                  <div class="row mx-auto">                    
                    <p style="font-size: 12px;">answer</p>
                  </div>
                  <div class="row mx-auto">                    
                    <p style="font-size: 12px;">0 views</p>
                  </div>
                </div>                
                <div class="col-11">
                  <h3><a href="">{{ $pertanyaan->judul }}</a></h3>
                  <p>{{ $pertanyaan->isi }}</p>
                  <div class="row">
                    <div class="col-9">
                      <a href="#" class="btn btn-light mx-1" style="font-size: 14px;">{{ $pertanyaan->tag }}</a>
                    </div>
                    <div class="col-3">
                      <div class="row mb-1">
                        <p style="font-size: 14px;">asked at {{ $pertanyaan->created_at }}</p>
                      </div>
                      <div class="row">
                        <a href="#" style="font-size: 14px;">{{ $pertanyaan->user->name }}</a>
                      </div>                      
                    </div>
                  </div>
                </div>            
              </div>
              @endforeach
              <!-- /.card-body -->
              
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 
</div>
</div>
@endsection
