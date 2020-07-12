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
            <!-- detail pertanyaan -->
            <div class="card">
              <div class="card-header">
              	<div class="row">
              		<div class="col-sm-6 my-auto">
		            	<h3>{{$pertanyaan->judul}}</h3>  
		                <p style="font-size: 14px;">asked at {{ $pertanyaan->created_at }}</p>          
		            </div> 
		            <div class="col-sm-6 my-auto d-flex flex-row-reverse">		            	
		            	<a href="#" style="font-size: 17px;">{{ $pertanyaan->user->name }}</a>
		            	<p>Penanya : </p>
		            </div>
              	</div>	                                                              
              </div>   
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
                  <p>{{ $pertanyaan->isi }}</p>
                  <div class="row">
                    <div class="col-9">
                      <a href="#" class="btn btn-light mx-1" style="font-size: 14px;">{{ $pertanyaan->tag }}</a>
                    </div>
                  </div>
                </div>            
              </div>
              <!-- /.detail pertanyaan -->

              <div class="card-header">
                
              </div>

              <!-- pembatas -->
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-9 my-auto">
                    <h3 class="card-title">0 answers</h3>            
                  </div>                  
                </div>
              </div>

              <!-- jawaban -->
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
                </div>                
                <div class="col-11">
                  <h3><a href="/pertanyaan/{{ $pertanyaan->id }}">{{ $pertanyaan->judul }}</a></h3>
                  <p>{{ $pertanyaan->isi }}</p>
                  <div class="row">
                    <div class="col-9">
                      <a href="#" class="btn btn-light mx-1" style="font-size: 14px;">{{ $pertanyaan->tag }}</a>
                    </div>
                    <div class="col-3">
                      <div class="row mb-1">
                        <p style="font-size: 14px;">answered at {{ $pertanyaan->created_at }}</p>
                      </div>
                      <div class="row">
                        <a href="#" style="font-size: 14px;">{{ $pertanyaan->user->name }}</a>
                      </div>                      
                    </div>
                  </div>
                </div>            
              </div>
              <!-- /.jawaban -->
              
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
