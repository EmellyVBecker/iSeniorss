@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="background-color: white;color:#dca809; font-size:18px;">Formulário Consultas</div>

                <div class="card-body">
                    @if($errors->any())
                    <div>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{action('ConsultasController@update')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$consultas->id}}" />
                        <div class="form-row">
                        <div class="col" stlye="font-size:18px">
                                <label for="medico">Médico</label> </br>
                                <input type="text" class="form-control" name="medico" value="{{$consultas->medico}}"/> </br>
                            </div>
                            <div class="col" stlye="font-size:18px">
                                <label for="tipo">Tipo</label> </br>
                                <input type="text" class="form-control" name="tipo" value="{{$consultas->tipo}}"/> </br>
                            </div>
                            <div class="col" stlye="font-size:18px">
                                <label for="local">Local</label> </br>
                                <input type="text" class="form-control" name="local" value="{{$consultas->local}}"/> </br>
                            </div>
                            <div class="col" stlye="font-size:18px">
                                <label for="data">Data</label> </br>
                                <input type="text" class="form-control" name="data" value="{{$consultas->data}}"/> </br>
                            </div>
                            <div class="col" stlye="font-size:18px">
                                <label for="hora">Hora</label> </br>
                                <input type="text" class="form-control" name="hora" value="{{$consultas->hora}}"/> </br>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success">Atualizar</button>
                                <a href="{{url ('consultas')}}" class="btn btn-primary">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection