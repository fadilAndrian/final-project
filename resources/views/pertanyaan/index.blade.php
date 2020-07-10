@extends('layouts.app')

@section('content')

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
                <div class="row mb-1">
                  <div class="col-sm-10">
                    <h3 class="card-title">List Pertanyaan</h3>            
                  </div>
                  <div class="col-sm-2">
                    <a href="/pertanyaan/create" class="btn btn-primary">
                      Buat Pertanyaan
                    </a>
                  </div>                  
                </div>
              </div>   
              <!-- foreach -->
              <div class="card-body d-flex">
                <div class="col-1">
                  <h1>0</h1>
                  <div class="row">                    
                    <p>vote</p>
                  </div>
                  <h1>0</h1>
                  <div class="row">                    
                    <p>answer</p>
                  </div>
                </div>                
                <div class="col-11">
                  <h3><a href="">judul</a></h3>
                  <p>isi Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                
              </div>
              <!-- endforeach -->
              <!-- /.card-body -->
              <div class="card-footer">
                Sanbercode Grup 66
              </div>
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
@endsection
