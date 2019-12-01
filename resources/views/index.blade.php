@extends('master')

@section('content')
<div class="row">
<a href="{{route('users.create')}}">Cadastrar usuário</a>
</div>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dados as $us)
            <tr>
                <td>{{$us->name}}</td>
                <td>{{$us->email}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('users.edit',$us->id)}}">Editar</a>
                    <a class="btn btn-danger remove" href="#" id="{{route('users.destroy',$us->id)}}" name="{{$us->name}}">Remover</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{!! Form::open(['id'=> 'delete', 'url' => '', 'method' => 'delete']) !!}
{!! Form::close() !!}
@endsection

@section('footerScripts')
@parent
<script src="{{ asset('js/user/index.js') }}"></script>
@endsection