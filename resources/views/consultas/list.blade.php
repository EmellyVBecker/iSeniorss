@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <a href="{{ url('/home')}}"><div class="card-header" style="background-color: white;color:#dca809; font-size:18px;">Listagem de Consultas</div></a>

                <div class="card-body">
                    <form action="{{action('ConsultasController@search')}}" method="POST">
                        @csrf
                        <div class ="form-row">
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Pesquisar nome do médico" name="nome" />
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn" style="background-color:#ffffcc;">Buscar</button>
                                <a href="{{ url('/consultas/create')}}" class="btn" style="background-color:#ffffcc;">Cadastrar</a>
                            </div>
                        </div>
                    </form>
                    <br>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col" style="font-size:18px">Médico</th>
                                <th scope="col" style="font-size:18px">Tipo</th>
                                <th scope="col" style="font-size:18px">Local</th>
                                <th scope="col" style="font-size:18px">Data</th>
                                <th scope="col" style="font-size:18px">Hora</th>
                                <th scope="col" style="font-size:18px">Ação</th>
                                <th scope="col" style="font-size:18px">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($consultas as $dados)
                            <tr>
                                <td style="font-size:18px">{{$dados->medico}}</td>
                                <td style="font-size:18px">{{$dados->tipo}}</td>
                                <td style="font-size:18px">{{$dados->local}}</td>
                                <td style="font-size:18px">{{$dados->data}}</td>
                                <td style="font-size:18px">{{$dados->hora}}</td>

                                <td> <a style="color:green; font-size:18px" href="{{action('ConsultasController@edit',$dados->id)}}">Editar</a></td>
                                <td> <a style="color:red; font-size:18px" href="{{action('ConsultasController@remove',$dados->id)}}" onclick="return confirm('Tem certeza que deseja remover?');">Remover</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection