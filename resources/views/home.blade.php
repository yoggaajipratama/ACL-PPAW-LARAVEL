@extends('layouts.app')
@section('title','Halaman pengguna');
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user()->jabatan == 'ADMIN')
                        Hello anda adalah admin dengan nama pengguna {{Auth::user()->username}}
                    @endif

                    <div class="panel-body">
                        Anda adalah member <br>
                        Nama  :  {{ Auth::user()->name }} <br>
                        Email : {{ Auth::user()->email }} <br>
                        Nama panggilan : {{ Auth::user()->username }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
