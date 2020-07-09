@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <div class="jumbotron">
                  <h1 class="display-4">Selamat Datang!</h1>
                  <p class="lead">Di dalam clone Stack Overflow kalian dapat belajar bersama.</p>
                  <hr class="my-4">
                  <p>Selamat bergabung.</p>
                </div>
                <!--<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>-->

        </div>
    </div>
</div>
@endsection
