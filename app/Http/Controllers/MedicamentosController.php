<?php

namespace App\Http\Controllers;

use App\MedicamentosModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class MedicamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objMedicamentos = MedicamentosModel::orderBy('id')->get();
        return view('medicamentos.list')->with('medicamentos', $objMedicamentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicamentos.create');
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
            'nome' => 'required|max:100',
            'data' => 'required|max:100',
            'horario' => 'required|max:100',
            'repeticao' => 'required|max:100',
        ]);

        $objMedicamentos = new MedicamentosModel();
        $objMedicamentos->nome = $request->nome;
        $objMedicamentos->data = $request->data;
        $objMedicamentos->horario = $request->horario;
        $objMedicamentos->repeticao = $request->repeticao;

        $objMedicamentos->save();

        return redirect()->action('MedicamentosController@index')
            ->with('sucess', 'Medicamento salvo com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MedicamentosModel  $medicamentosModel
     * @return \Illuminate\Http\Response
     */
    public function show(MedicamentosModel $medicamentosModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedicamentosModel  $medicamentosModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objMedicamentos = MedicamentosModel::findOrfail($id);
        return view('medicamentos.edit')->with('medicamentos', $objMedicamentos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MedicamentosModel  $medicamentosModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'data' => 'required|max:100',
            'horario' => 'required|max:100',
            'repeticao' => 'required|max:100',
        ]);

        $objMedicamentos = MedicamentosModel::findOrfail($request->id);
        $objMedicamentos->nome = $request->nome;
        $objMedicamentos->data = $request->data;
        $objMedicamentos->horario = $request->horario;
        $objMedicamentos->repeticao = $request->repeticao;

        $objMedicamentos->save();

        return redirect()->action('MedicamentosController@index')
            ->with('sucess', 'Medicamento salvo com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MedicamentosModel  $medicamentosModel
     * @return \Illuminate\Http\Response
     */
    public function remove($id)
    {
        $objMedicamentos = MedicamentosModel::findOrfail($id);

        $objMedicamentos->delete();

        return redirect()->action('MedicamentosController@index')
            ->with('sucess', 'Medicamento removido com sucesso.');
    }
    public function search(Request $request)
    {
        $query = DB::table('medicamentos');
        if (!empty($request->nome)) {
            $query->where('nome', 'like', $request->nome);
        }

        $objMedicamentos = $query->orderBy('id')->get();
        return view('medicamentos.list')->with('medicamentos', $objMedicamentos);
    }
}
