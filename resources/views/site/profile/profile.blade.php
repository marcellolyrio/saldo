@extends('adminlte::page')

@section('title', 'Meu perfil')


@section('content_header')
    <h1>Meu Perfil</h1>
    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Meu Perfil</a></li>
    </ol>
@stop

@section('content')
@include('admin.includes.alerts')
<div class="box">
    <div class="box-body">
        <div class="col-lg-6 col-xs-6">
            @if (auth()->user()->image != null)
                    <img src="{{ url('storage/users/'.auth()->user()->image) }}" alt="{{ auth()->user()->name }}" class="img-circle" style="width: 100px; height: 100px;">
            @endif
            <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
                <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" value="{{ auth()->user()->name}}" name="name" placeholder="Nome" class="form-control">
                </div>
                <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" value="{{ auth()->user()->email}}" name="email" placeholder="E-mail" class="form-control">
                </div>

                <div class="form-group">
                <label for="password">Senha</label>
                <input type="text" name="password" placeholder="Senha" class="form-control">
                </div>

                <div class="form-group">

                <label for="image">Foto</label>
                <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
            <button type="submit" class="btn btn-info">Atualizar Perfil</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection