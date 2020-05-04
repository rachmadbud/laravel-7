@extends('layouts.app')

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
                    {{ Auth::user()->namapanjang }} <span class="caret"></span>
                </div>
            </div>
        <a href="users/edit" class="btn btn-primary my-3">Edit Profile</a>
        <a href="users/tambah" class="btn btn-secondary my-3">Tambah nama</a>
        <a href="users/lihat" class="btn btn-secondary my-3">Lihat Saudara</a>
        </div>
    </div>
</div>
@endsection
