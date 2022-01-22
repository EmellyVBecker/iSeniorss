@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: white;color:#dca809; font-size:18px;">Listagem de Medicamentos</div>
                <div class="card-body">
                    <form action="{{action('MedicamentosController@search')}}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Pesquisar nome" name="nome" />
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn" style="background-color:#ffffcc;">Buscar</button>
                                <a href="{{ url('/medicamentos/create')}}" class="btn" style="background-color: #ffffcc;">Cadastrar</a>
                            </div>
                        </div>
                    </form>
                    <br>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col" style="font-size:18px">Nome</th>
                                <th scope="col" style="font-size:18px">Data</th>
                                <th scope="col" style="font-size:18px">Horário</th>
                                <th scope="col" style="font-size:18px">Repetição</th>
                                <th scope="col" style="font-size:18px">Editar</th>
                                <th scope="col" style="font-size:18px">Remover</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($medicamentos as $dados)
                            <tr>
                                <td style="font-size:18px">{{$dados->nome}}</td>
                                <td style="font-size:18px">{{$dados->data}}</td>
                                <td style="font-size:18px">{{$dados->horario}}</td>
                                <td style="font-size:18px">{{$dados->repeticao}}</td>
                                <td> <a style="color:  green; font-size:18px" href="{{action('MedicamentosController@edit',$dados->id)}}">Editar</a></td>
                                <td> <a style="color:  red;font-size:18px" href="{{action('MedicamentosController@remove',$dados->id)}}" onclick="return confirm('Tem certeza que deseja remover?');">Remover</a></td>
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