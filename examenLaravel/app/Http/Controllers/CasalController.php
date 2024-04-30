<?php

namespace App\Http\Controllers;

use App\Models\Casal;
use App\Models\Ciutat;

use App\Http\Requests\StoreCasalRequest;
use App\Http\Requests\UpdateCasalRequest;
use Illuminate\Http\Request;

class CasalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCasalRequest $request)
    {
        $request ->validate([
            'nom' => 'required',
            'dataInici' => 'required|date',
            'dataFi' => 'required|date',
            'nPlaces' => 'required|integer',
            'ciutat'=> 'required|integer'
        ]);

        $newCasal = new Casal();
        $newCasal->nom=$request->nom;
        $newCasal->dataInici=$request->dataInici;
        $newCasal->dataFinal=$request->dataFi;
        $newCasal->nPlaces=$request->nPlaces;
        $newCasal->ciutatId=$request->ciutat;

        $newCasal->save();

        return redirect()->route('user.main')->with('succes','Casal afegit exitosament');
    }
    public function saveUpdateCasalForm(StoreCasalRequest $request)
    {
        $request ->validate([
            'id'=>'required|integer',
            'nom' => 'required',
            'dataInici' => 'required|date',
            'dataFi' => 'required|date',
            'nPlaces' => 'required|integer',
            'ciutat'=> 'required|integer'
        ]);

        $casal= Casal::where('id', $request->id)->first();
        $casal->nom=$request->nom;
        $casal->dataInici=$request->dataInici;
        $casal->dataFinal=$request->dataFi;
        $casal->nPlaces=$request->nPlaces;
        $casal->ciutatId=$request->ciutat;

        $casal->save();

        return redirect()->route('user.main')->with('succes','Casal editat exitosament');
    }

    /**
     * Display the specified resource.
     */
    public function show(Casal $casal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Casal $casal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCasalRequest $request, Casal $casal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Casal $casal)
    {
        //
    }

    public static function deleteCasal($id)
    {
        $casal = Casal::find($id);
        if($casal){
            Casal::destroy($id);
            return redirect()->route('user.main')->with('success', 'Casal eliminado correctamente');
        }else{

            return redirect()->route('user.main')->with('error', 'No se ha encontrado el casal');
        }
    }

    public static function newCasalForm()
    {
        $ciutats = Ciutat::allCiutats();
        return view('user.newCasalForm', compact('ciutats'));
    }
    public static function updateCasalForm($id)
    {
        $casal=Casal::getCasal($id);
        $ciutats = Ciutat::allCiutats();
        return view('user.updateCasalForm', compact('ciutats', 'casal'));
    }
}
