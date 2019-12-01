@extends('master')

@section('content')
<div class="row">
    <a href="{{route('users.index')}}">Voltar</a>
</div>
<div class="row">
    <h2>Editar usuário</h2>
</div>
{!! Form::model($dados, ['id' => 'frm', 'method' => 'put', 'type' => 'update', 'route' => ['users.update', $dados->id]]) !!}
<div class="row">
    <div class="col-md-4 form-group">
        {!! Form::label('name', 'Nome') !!}
        {!! Form::text('name') !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('email', 'E-Mail') !!}
        {!! Form::text('email') !!}
    </div>
    <div class="col-md-4 form-group">
        {!! Form::label('password', 'Senha') !!}
        {!! Form::password('password') !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12 text-right">
        {!! Form::button('Alterar',['id' => 'save', 'class'=>'btn btn-primary']) !!}
    </div>
</div>
{!! Form::close() !!}
@endsection

@section('footerScripts')
@parent
<script src="{{ asset('assets/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/user/create.js') }}"></script>
@endsection