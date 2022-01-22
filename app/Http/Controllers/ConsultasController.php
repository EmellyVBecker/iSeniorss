<?php

namespace App\Http\Controllers;

use App\ConsultasModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsultasController extends Controller
{
    public function index()
    {
        $objConsultas = ConsultasModel::orderBy("id")->get();
        return view('consultas.list')->with('consultas', $objConsultas);
    }
    public function create()
    {
        return view("consultas.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'medico' => 'required|max:100',
            'tipo' => 'required|max:100',
            'local' => 'required|max:100',
            'data' => 'required|max:100',
            'hora' => 'required|max:100',
        ]);

        $objConsultas = new ConsultasModel();
        $objConsultas->medico = $request->medico;
        $objConsultas->tipo = $request->tipo;
        $objConsultas->local = $request->local;
        $objConsultas->data = $request->data;
        $objConsultas->hora = $request->hora;

        $objConsultas->save();

        return redirect()->action('ConsultasController@index')
            ->with('success', 'Consulta salva com sucesso.');
    }
    public function edit($id)
    {
        $objConsultas = ConsultasModel::findorfail($id);
        return view('consultas.edit')->with('consultas', $objConsultas); 
    }
    public function update(Request $request)
    {
        $request->validate([
            'medico' => 'required|max:100',
            'tipo' => 'required|max:100',
            'local' => 'required|max:100',
            'data' => 'required|max:100',
            'hora' => 'required|max:100',
        ]);

        $objConsultas = ConsultasModel::findorfail($request->id);
        $objConsultas->medico = $request->medico;
        $objConsultas->tipo = $request->tipo;
        $objConsultas->local = $request->local;
        $objConsultas->data = $request->data;
        $objConsultas->hora = $request->hora;

        $objConsultas->save();

        return redirect()->action('ConsultasController@index')
            ->with('success', 'Consulta editada com sucesso.');
    }
    public function remove($id)
    {

        //select * from consultas where id = $id
        $objConsultas = ConsultasModel::findOrFail($id);

        $objConsultas->delete();

        return redirect()->action('ConsultasController@index')
            ->with('success', 'Consulta removida com sucesso.');
    }
    public function search(Request $request)
    {
        $query = DB::table('consultas');
        if (!empty($request->medico)) {
            $query->where('medico', 'like', $request->medico);
        }
        $objConsultas = $query->orderBy('id')->get();
        return view('consultas.list')->with('consultas', $objConsultas);
    }
}
