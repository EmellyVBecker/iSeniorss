@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="background-color: white;color:#dca809; font-size:18px">Formulário Medicamentos</div>

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
                    <form action="{{action('MedicamentosController@store')}}" method="post">
                        <div class="form-row">
                            @csrf
                            <div class="col" style="font-size:18px">
                                <label for="nome">Nome</label> </br>
                                <input type="text" class="form-control" name="nome" /> </br>
                            </div>
                            <div class="col" style="font-size:18px">
                                <label for="data">Data</label> </br>
                                <input type="text" class="form-control" name="data" /> </br>
                            </div>
                            <div class="col" style="font-size:18px">
                                <label for="horario">Horário</label> </br>
                                <input type="text" class="form-control" name="horario" /> </br>
                            </div>
                            <div class="col" style="font-size:18px">
                                <label for="repeticao">Repetição</label> </br>
                                <input type="text" class="form-control" name="repeticao" /> </br>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success">Salvar</button>
                                <a href="{{url ('medicamentos')}}" class="btn btn-primary">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection